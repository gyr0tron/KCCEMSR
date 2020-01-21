<template>
  <div>
    <h1 class="text-center"><strong><span>Placement Statistics</span></strong></h1>
    <p class="text-center" style="">(Click on bar to open department specific statistics)</p>
    <a @click="makeHomeChart" style="margin-left: 20px;margin-top: 20px"><i class="fa fa-2x fa-home" aria-hidden="true"></i></a>
    <div class="space"></div>
    <canvas id="placement-chart" style="height:600px;" @click="handleClick"></canvas>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      years: ["2012-13", "2013-14","2014-15","2015-16","2016-17","2017-18","2018-19","2019-20"],
      departments: ['computer', 'electronics','extc','it'],
      yearsData:[
        [25,15,9,11],
        [30,3,7,5],
        [40,16,4,5],
        [34,15,10,27],
        [26,10,29,27],
        [26,0,20,18],
        [32,6,9,18],
        [38,0,5,28],
      ],
      chart: '',
    }
  },
  mounted() {
    this.makeHomeChart();
  },
  methods: {
    handleClick(evt) {
      var activePoints = this.chart.getElementsAtEvent(evt);
      var firstPoint = activePoints[0];
      var label = this.chart.data.labels[firstPoint._index];
      var value = this.chart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
      if (firstPoint === undefined) return;
      var index = this.years.indexOf(label);
      if(index == -1) return
      this.makeYearChat(label, index);
    },
    makeHomeChart() {
      var ctx = document.getElementById("placement-chart").getContext('2d');
      if(this.chart) this.chart.destroy();
      this.chart = new Chart(ctx, {
        type: 'bar',
        responsive: false,
        data: {
          labels: this.years,
          datasets: [{
            label: 'Total placed students',
            data: [60, 45, 65, 86, 92, 67, 65, 76],
            backgroundColor: 'rgba(85, 172, 238, 0.4)',
            borderColor: 'rbga(255, 99, 132, 0.4)',
            borderWidth: 1
          }],
        },
        options: {
          tooltips: {enabled: true},
          hover: {mode: null},
          maintainAspectRatio: true,
          legend: { display: false },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          },
          title: {
            display: true,
            text: 'Total placed students'
          }
        },
      });
    },
    makeYearChat(year, index) {
      var ctx = document.getElementById("placement-chart").getContext('2d');
      this.chart.destroy();
      this.chart = new Chart(ctx, {
        type: 'bar',
        responsive: false,
        data: {
          labels: this.departments,
          datasets: [{
            label: 'Total placed students in ' + year,
            data: this.yearsData[index],
            backgroundColor: ['rgba(85, 172, 238, 0.4)', 'rgba(255, 13, 45, 0.4)', 'rgba(18, 208, 122, 0.4)', 'rgba(225, 21, 236, 0.4)'],
            borderColor: 'rbga(255, 99, 132, 0.4)',
            borderWidth: 1
          }],
        },
        options: {
          tooltips: {enabled: true},
          hover: {mode: null},
          maintainAspectRatio: true,
          legend: { display: false },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          },
          title: {
            display: true,
            text: 'Total placed students in ' + year,
          }
        },
      });
    }
  }
}
</script>
