<template>
  <form @submit="getResults">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="form-group">
            <label for="search">Enter the name of Journal:</label>
            <input type="text" name="search" id="search" class="form-control">
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
        <ul class="list-unstyled resp-text-sub align-marg">
          <li v-for="item in data" class="animated fadeInDown"><i class="fa fa-chevron-right text-colored align-marg"></i><a v-bind:href="item.url">&nbsp;&nbsp;{{item.name}}</a></li>
        </ul>
        <center v-if="noresults"><label>No results found!</label></center>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data: function() {
    return {
      data:[],
      noresults: false,
    }
  },
  mounted() {

  },
  methods: {
    getResults: function(event) {
      event.preventDefault();
      var form = event.target;
      fh.hide_button();
      this.noresults = false;
      axios.post('/api/search/ebooks', $(form).serialize())
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
