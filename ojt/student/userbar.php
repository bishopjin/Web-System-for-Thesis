<canvas id="myChartz" width="1000" height="1000" style="background-color: white;" responsive></canvas>
          <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"> </script> -->
          <script src="../includes/assets/cdnjs/chart.bundle.js"></script>
          <script>
          var ctz = document.getElementById("myChartz");
          var myChartz = new Chart(ctz, {
              type: 'horizontalBar',
              data: {
                  labels: ["Problem solving and Adaptability","Interpersonal","English Language Proficiency and Literacy","Information and Communication Tech","Personal Org and Time Mgmt","Leadership","Communication"],
                  datasets: [{
                      label: 'Employability Score',
                      data:
                      [
                        <?php echo $fn->getSoftSkillScore('graph'); ?>
                      ],

                      backgroundColor: [
                          'rgba(255, 99, 132, 0.4)',
                          'rgba(54, 162, 235, 0.4)',
                          'rgba(255, 206, 86, 0.4)',
                          'rgba(75, 192, 192, 0.4)',
                          'rgba(153, 102, 255, 0.4)',
                          'rgba(255, 159, 64, 0.4)',
                          'rgba(129, 189, 64, 0.4)',
                          'rgba(100, 159, 200, 0.4)',
                          'rgba(1, 159, 64, 0.4)',
                          'rgba(255, 255, 64, 0.4)',
                          'rgba(0, 159, 180, 0.4)',
                          'rgba(150, 0, 0, 0.4)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)',
                          'rgba(129, 189, 64, 1)',
                          'rgba(100, 159, 200, 1)',
                          'rgba(1, 159, 64, 1)',
                          'rgba(255, 255, 64, 1)',
                          'rgba(0, 159, 180, 1)',
                          'rgba(150, 0, 0, 1)'
                      ],

                      borderWidth: 1.5
                  }]
              },
              options: {
                  plugins:{
                    labels:{
                        render: 'value',
                    }
                  },
                  scales: {
                      yAxes: [{
                          barThickness: 30,
                          maxBarThickness: 40
                      }],

                      xAxes: [{
                          ticks: {
                              beginAtZero:true,
                              max: 5
                          }
                      }]
                  },
                  layout:{
                    padding: {
                      left:20,
                      top:20,
                      right:20,
                      bottom: 20
                    }
                  }
              }
          });
          </script>