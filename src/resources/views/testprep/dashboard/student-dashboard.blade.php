@extends('layout.testprep.dashboard.main')
 
@section('main-container')
<body>
<x-testprep.dashboard.navbar />
<x-testprep.dashboard.aside />
<main class="dashboard user profileReview">
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="dashboard--accordion nextStep p-6">
        <div class="dashboard--accordion__header border-bottom dash-head mb-4 pb-3">
                <p class="dash-head">Student Dashboard</p>
        </div>
        <div class="student-info-box ">
          <div class="row">
            <div class="col-6 col-md-3 col-6 text-center mx-auto linespe">
              <div class="score-box">
                <div class="flex-shrink-0">
                  <div id="listening"> </div>
                </div>
                <h3>Listening</h3>
              </div>
            </div>
            <div class="col-6 col-md-3 col-6 text-center mx-auto linespe">
              <div class="score-box">
                <div class="flex-shrink-0">
                  <div id="Reading"></div>
                </div>
                <h3>Reading</h3>
              </div>
            </div>
            <div class="col-6 col-md-3 col-6 text-center mx-auto linespe">
              <div class="score-box">
                <div class="flex-shrink-0">
                  <div id="Writing"></div>
                </div>
                <h3>Writing</h3>
              </div>
            </div>
            <div class="col-6 col-md-3 col-6 text-center mx-auto linespe">
              <div class="score-box">
                <div class="flex-shrink-0">
                  <div id="Speaking"></div>
                </div>
                <h3>Speaking</h3>
              </div>
            </div>
            <div class="block-screen">
              <div class="rb-but">
                <button class="arrow arrow--button arrow--button__redBg arrow--button__ border-0" onclick="window.location.href='{{ route('testprep.band_predictor') }}'"><span> Evaluation Test</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-lg-12 mb-4">
      <div class="dashboard--accordion nextStep p-6 st--performance">
        <div class="dashboard--accordion__header mb-4 ">
          <p class="dash-head">My Live Class</p>
        </div>
        <div class="row">
          <div class="col-lg-12">

           <x-testprep.dashboard.liveclasses  :onlineBatches="$onlineBatches" />


            <div class="d-flex justify-content-between why--controls  mt-0 " >
              <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev "></a> <a href="javascript:void(0)" class="btn-next "></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  <div class="row">
    <div class="col-md-12  mb-4">
      <div class="dashboard event p-0 height-auto"> 
        
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Top 10 IELTS Leader Box</div>
          <div id="shortlistcollapseOne" class="dashboard--accordion__answer collapse show" aria-labelledby="shortlistOne" data-parent="#dashboard_accordion">
            <div class="accordion-item shortlist-table explore">
              <div class="score-btn  mb-3">
                <button id="btnOverall" class="arrow arrow--button arrow--button__red arrow--button__ active px-6 py-2"><i class="menu-icon tf-icons bx bx-pie-chart-alt fs-16 me-2"></i> Overall</button>
                <button id="btnListening" class="arrow arrow--button arrow--button__red arrow--button__ px-6 py-2"> <i class="menu-icon tf-icons bx bx-headphone fs-16 me-2"></i> Listening</button>
                <button id="btnReading" class="arrow arrow--button arrow--button__red arrow--button__ px-6 py-2"><i class="menu-icon tf-icons bx bx-book-reader fs-16 me-2"></i> Reading</button>
                <button id="btnWriting" class="arrow arrow--button arrow--button__red arrow--button__ px-6 py-2"><i class="menu-icon tf-icons bx bx-pencil fs-16 me-2"></i> Writing</button>
                <button id="btnSpeaking" class="arrow arrow--button arrow--button__red arrow--button__ px-6 py-2"><i class="menu-icon tf-icons bx bx-user-voice fs-16 me-2"></i> Speaking</button>
              </div>
              <div class="card-body p-0 mt-5">
                <div class="table-responsive text-nowrap  d-module bt-table">
                  <table class="table  pt-4" id="assigned_homework">
                    <thead class="table-dark text-white">
                      <tr>
                        <th class="text-white">Rank</th>
                        <th class="text-white"> Name</th>
                        <th class="text-white">Course</th>
                        <th class="text-white"> Band</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 bg-white">
                      <tr>
                        <td>1</td>
                        <td><div class="st-tb-rank">
                            <div class="topperimg"> <img class="img-fluid" src="/prep/assets/images/default_profile_pic.png" alt="Student Name"> </div>
                            <div class="st-dt-txt">
                              <div class="act-student"> <strong>kirti dhiman</strong> </div>
                            </div>
                          </div></td>
                        <td><div class="course-tb-img"> <img src="/prep/assets/images/IELTS-logo 1.png" alt="IELTS"> </div></td>
                        <td>5.0 Band </td>
                      </tr>
                      
                      <tr class="active-student">
                        <td>NA</td>
                        <td><div class="st-tb-rank">
                            <div class="topperimg"> <img class="img-fluid" src="/prep/assets/images/default_profile_pic.png" alt="Student Name"> </div>
                            <div class="st-dt-txt">
                              <div class="act-student"> <strong>shanti bhushan</strong> </div>
                            </div>
                          </div></td>
                        <td><div class="course-tb-img"> <img src="/prep/assets/images/IELTS-logo 1.png" alt="IELTS"> </div></td>
                        <td><a href="#" class="arrow arrow--link arrow--link__red arrow--link__" id="@@id"><span>Take a test</span></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="mt-5 mp-pagination border-top d-flex justify-content-between pt-3 fs-12">
                  <div class="dataTables_info text--regular text--light" id="assigned_homework_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                  <div class="dataTables_paginate paging_simple_numbers" id="assigned_homework_paginate"><a class="paginate_button previous disabled text--regular text--light" aria-controls="assigned_homework" data-dt-idx="0" tabindex="-1" id="assigned_homework_previous">Previous</a><span></span><a class="paginate_button next disabled text--regular text--light ms-3" aria-controls="assigned_homework" data-dt-idx="1" tabindex="-1" id="assigned_homework_next">Next</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12  mb-4">
      <div class="dashboard event p-0 height-auto"> 
        
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Study Material</div>
          <div id="shortlistcollapseOne" class="dashboard--accordion__answer collapse show" aria-labelledby="shortlistOne" data-parent="#dashboard_accordion">
            <div class="accordion-item shortlist-table explore">
              <x-testprep.dashboard.studymaterial />

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

@endsection
@section('scripts')

<script>
      
  
  
  
  
  //** IELTS LISTENING


var options = {
  chart: {
    height: 200,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "60%",
        background: "#fff",
        position: "front"
      },
      track: {
        background: "#e7e7e7",
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",
        name: {
           offsetY: 30,
          show: true,
          color: "#888",
          fontSize: "13px"
        },
        value: {
          formatter: function(val) {
            return 7;
          },
      
        fontWeight:"bold",
         offsetY: -10,
          color: "#111",
          fontSize: "30px",
          show: true
        }
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: ['#696CFF']
},

  series: [70],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};


        var chart = new ApexCharts(document.querySelector("#listening"), options);
        chart.render();
      
  
  
  
  //** IELTS Reading


       var options = {
  chart: {
    height: 200,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "60%",
        background: "#fff",
        position: "front"
      },
      track: {
        background: "#e7e7e7",
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",
        name: {
           offsetY: 30,
    
                  show: true,
          color: "#888",
          fontSize: "13px"
        },
        value: {
          formatter: function(val) {
            return 6;
          },
      
        fontWeight:"bold",
         offsetY: -10,
          color: "#111",
          fontSize: "30px",
          show: true
        }
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: ['#FFAB00']
},

  series: [60],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};


        var chart = new ApexCharts(document.querySelector("#Reading"), options);
        chart.render();
  
  
  
    
  //** IELTS Writing

     
       var options = {
  chart: {
    height: 200,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "60%",
        background: "#fff",
        position: "front"
      },
      track: {
        background: "#e7e7e7",
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",
        name: {
           offsetY: 30,
          show: true,
          color: "#888",
          fontSize: "13px"
        },
        value: {
          formatter: function(val) {
            return 8;
          },
          color: "#111",
        fontWeight:"bold",
         offsetY: -10,
          fontSize: "30px",
          show: true
        }
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: ['#FF3E1D']
},

  series: [80],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};



        var chart = new ApexCharts(document.querySelector("#Writing"), options);
        chart.render();
  
  
  
  
  
  //** IELTS Speaking

           var options = {
  chart: {
    height: 200,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "60%",
        background: "#fff",
        position: "front"
      },
      track: {
        background: "#e7e7e7",
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",     
      value: {
          formatter: function(val) {
            return 5;
          },
          color: "#111",
          fontSize: "30px",
        fontWeight:"bold",
         offsetY: -10,
          show: true
        
        },      
        name: {  
      
          offsetY: 30,
          show: true,
          color: "#888",
          fontSize: "13px"
        }
       
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: ['#03C3EC']
},

  series: [50],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};

        var chart = new ApexCharts(document.querySelector("#Speaking"), options);
        chart.render();
  
  
  // page load modal

  $(window).on('load',function(){
    var delayMs = 1500; // delay in milliseconds
    
    setTimeout(function(){
        $('#myDiagnosticModal').modal('show');
    }, delayMs);
});  
    
  
  
  
  
        </script>
@endsection