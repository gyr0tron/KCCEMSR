<template>
  <form @submit="getResults">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="pwd">Departments:</label>
            <select class="form-control" name="department" id="department" @change="departmentChanged">
              <option v-for="dep in departments" v-bind:value="dep.url">{{dep.name}}</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="pwd">Year:</label>
            <select class="form-control" name="year" id="year" @change="yearChanged" placeholder="Select">
              <option v-for="year in years" v-bind:value="year.no">{{year.name}}</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="pwd">Sem:</label>
            <select class="form-control" name="sem" id="sem" placeholder="Select">
              <option v-for="sem in sems" v-bind:value="sem">{{sem}}</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <button class="btn btn-primary btn-block btn-full" style="margin-top: 27px;height: 45px;">Search</button>
          </div>
        </div>
      </div>
      <hr/>
      <div class="space"></div>
      <div class="row">

        <!-- cards -->
        <div v-for="item in data" class="col-xs-12 col-sm-6 col-md-3">
          <div class="card animated fadeInDown" style="border: .0625rem solid #e5e5e5;border-radius: .25rem;">
            <div class="card-block" style="padding: 10px;">
              <h4 class="text-center">{{item.year}}</h4>
              <ul class="list-unstyled">
                <li v-for="paper in item.papers"><i class="fa fa-caret-right pr-10 text-colored"></i><a v-bind:href="paper.url">{{paper.name}}</a></li>
              </ul>
            </div>
          </div>
        </div>
        <center v-if="noresults"><label>No results found!</label></center>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data: function() {
    return {
      departments:[],
      years:[],
      sems:[],
      data:[],
      noresults: false,
    }
  },
  mounted() {
    this.getDepartments();
  },
  methods: {
    departmentChanged: function(event) {
      this.getYears();
    },
    yearChanged: function(event) {
      this.getSems();
    },
    getResults: function(event) {
      event.preventDefault();
      var form = event.target;
      fh.hide_button();
      this.noresults = false;
      axios.post('/api/search/question-papers', $(form).serialize())
      .then((response)=>{
        this.data = response.data;
        if(this.data.length < 1) this.noresults = true;
        fh.show_button();
      });
    },
    getDepartments: function() {
      axios.get('/api/get/departments')
      .then((response)=>{
        this.departments = response.data;
        this.years = [];
        setTimeout(function () {
          $('#department').prop('selectedIndex',-1);
          $('#year').prop('selectedIndex',-1);
          $('#sem').prop('selectedIndex',-1);
        }, 5);
      })
    },
    getYears: function() {
      axios.get('/api/get/years?department=' + $('#department').val())
      .then((response)=>{
        this.years = response.data;
        this.sems = [];
        setTimeout(function () {
          $('#year').prop('selectedIndex',-1);
          $('#sem').prop('selectedIndex',-1);
        }, 5);
      })
    },
    getSems: function() {
      axios.get('/api/get/sems?year=' + $('#year').val())
      .then((response)=>{
        this.sems = response.data;
        setTimeout(function () {
          $('#sem').prop('selectedIndex',-1);
        }, 5);
      })
    }
  }
}
</script>
