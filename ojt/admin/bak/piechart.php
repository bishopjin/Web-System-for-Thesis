<div class="col-lg-6 col-xl-6">
              <div class="card shadow mb-4">

                <div class="card-header d-flex justify-content-between align-items-center">
                  <h6 class="text-primary font-weight-bold m-0">Programming Language Distribution</h6>
                  <div class="dropdown no-arrow">
                    <button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
                      <p class="text-center dropdown-header">dropdown header:</p>
                      <a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a>
                      <a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="chart-area">
                    <canvas data-bs-chart='{
                    "type":"doughnut",
                    "data":
                    {
                      "labels":["C++","C#","Java","Python","Swift","VB.Net","Javascript","PHP"],
                      "datasets":[
                      {
                        "label": "",
                        "backgroundColor":["rgb(225, 0, 0)","#1cc88a","#36b9cc"],
                        "borderColor":["#ffffff","#ffffff","#ffffff"],
                        "data":["50","30","15","12","23","28","62","5"]
                      }]
                    },
                    "options":
                    {
                      "maintainAspectRatio":false,
                      "legend":
                      {
                        "display":false
                      },
                      "title":{}}}'></canvas>
                  </div>

                  <div class="text-center small mt-4">
                    <span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;C++</span>
                    <span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;C#</span>
                    <span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;Java</span>
                    <span class="mr-2"><i class="fas fa-circle text-warning"></i>&nbsp;Python</span>
                    <span class="mr-2"><i class="fas fa-circle text-secondary"></i>&nbsp;Swift</span>
                    <span class="mr-2"><i class="fas fa-circle text-danger"></i>&nbsp;VB.Net</span>
                    <span class="mr-2"><i class="fas fa-circle text-dange"></i>&nbsp;Javascript</span>
                    <span class="mr-2"><i class="fas fa-circle text-dange"></i>&nbsp;PHP</span>

                  </div>
                </div>

              </div>
            </div>