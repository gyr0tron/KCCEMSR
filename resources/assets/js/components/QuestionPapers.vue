<template>
  <form @submit="getResults">
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="col-md-3">
            <div class="form-group">
              <label for="pwd">Departments:</label>
              <select class="form-control select2-single" name="department" id="department" @change="departmentChanged" placeholder="Select">
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

          <!-- cards -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card" style="border: .0625rem solid #e5e5e5;border-radius: .25rem;">
              <div class="card-block" style="padding: 10px;">
                <h4 class="text-center">Date title</h4>
                <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 1</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card" style="border: .0625rem solid #e5e5e5;border-radius: .25rem;">
              <div class="card-block" style="padding: 10px;">
                <h4 class="text-center">Date title</h4>
                <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 1</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card" style="border: .0625rem solid #e5e5e5;border-radius: .25rem;">
              <div class="card-block" style="padding: 10px;">
                <h4 class="text-center">Date title</h4>
                <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 1</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored"></i><a href="">Subject 2</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
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
      axios.post('/api/search/question-papers', $(form).serialize())
      .then((response)=>{
        console.log(response.data);
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
