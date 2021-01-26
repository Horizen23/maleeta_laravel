<style>

</style>

<div class="d_concludes">
        <p>รายงานผล</p>
        <div class="listconclue">
            <div class="conclude ccl">
                <p>
                  รายวัน
                </p>
                <div class="grah">
                    <canvas class="gcanva" id="canvasd"></canvas>
                </div>
                <h1 class="Count">
                    3040
                </h1>
            </div>
       
                
            <div class="conclude1 ccl">
                <p>
                    สัปดาห์
                  </p>
                  <div class="grah">
                      <canvas class="gcanva" id="canvasw"></canvas>
                  </div>
                  <h1 class="Count">
                      5000
                  </h1>
              </div>  
            <div class="conclude1 ccl">
                <p>
                    รายเดือน
                  </p>
                  <div class="grah">
                      <canvas class="gcanva" id="canvasm"></canvas>
                  </div>
                  <h1 class="Count">
                      10432
                  </h1>
              </div>  
              <div class="conclude1 ccl">
                <p>
                    รายปี
                  </p>
                  <div class="grah">
                      <canvas class="gcanva"id="canvasy"></canvas>
                  </div>
                  <h1 class="Count">
                      302300
                  </h1>
              </div>
            
        </div>
        <div class="flex eeee">
            <div class="mo">
                <div class="hgbar">
                    <p>กราฟรายปี</p>
                    <div class="flex">
                        <div class="week">วัน</div>
                        <div class="week">สัปดาห์</div>
                        <div class="week">เดือน</div>
                        <div class="week">ปี</div>
                    </div>
                </div>
                <div class="mo1">
                    <canvas class="ed" id="ed"></canvas>
            </div>
        </div>
        <div class="acction">
                <div class="flex">
                    <h1>History</h1>
                    <p>See All</p>
                </div>
                    <div class="centerdiv">
                    <div>
                        <canvas class="gcanva"id="Doughnut " height="225"></canvas>  
                    </div>
                </div>
        </div>
        </div>
        <script>
            
var index = 11;
var canvasd = document.getElementById('canvasd').getContext('2d');
var canvasy = document.getElementById('canvasy').getContext('2d');
var canvasw = document.getElementById('canvasw').getContext('2d');
var canvasm = document.getElementById('canvasm').getContext('2d');
var Doughnut  = document.getElementById('Doughnut ').getContext('2d');
var ed = document.getElementById('ed').getContext('2d');



new Chart(canvasd, {
    type: 'line',
        data: {
        labels: ['', '', '', '', '', '', ''],
        datasets: [{
            label:"erer",
            cubicInterpolationMode:"dsasda",
            pointHitRadius:5,
            fill:false,
            borderColor: '#4CFA9D',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },
    options: {
         legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
            }
            }
        },
      
        scales: {
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display:false
                            
                        },
                        ticks: {
                    display: false //this will remove only the label
                }
                }],
                    yAxes: [{
                        gridLines: {
                            display: false,         
                            drawBorder: false
                        } ,
                        ticks: {
                    display: false //this will remove only the label
                }  
                }]
    }
}
});



new Chart(canvasm, {
    type: 'line',
        data: {
        labels: ['', '', '', '', '', '', '', '', '', ''],
        datasets: [{
            label:"erer",
            cubicInterpolationMode:"dsasda",
            pointHitRadius:5,
            fill:false,
            borderColor: '#53B9EA',
            data: [20, 10, 50, 100, 20, 20]
        }]
    },
    options: {
         legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
            }
            }
        },
      
        scales: {
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display:false
                            
                        },
                        ticks: {
                    display: false //this will remove only the label
                }
                }],
                    yAxes: [{
                        gridLines: {
                            display: false,         
                            drawBorder: false
                        } ,
                        ticks: {
                    display: false //this will remove only the label
                }  
                }]
    }
}
});
new Chart(canvasw, {
    type: 'line',
        data: {
        labels: ['', '', '', '', '', '', '', '', '', ''],
        datasets: [{
            label:"erer",
            cubicInterpolationMode:"dsasda",
            pointHitRadius:5,
            fill:false,
            borderColor: '#53B9EA',
            data: [20, 50, 90, 80, 20, 20]
        }]
    },
    options: {
         legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
            }
            }
        },
      
        scales: {
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display:false
                            
                        },
                        ticks: {
                    display: false //this will remove only the label
                }
                }],
                    yAxes: [{
                        gridLines: {
                            display: false,         
                            drawBorder: false
                        } ,
                        ticks: {
                    display: false //this will remove only the label
                }  
                }]
    }
}
});
var myBarChart = new Chart(ed, {
    type: 'bar',
    data:  {
        labels: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        datasets: [{
            data: [5, 10, 5, 2, 20, 30, 45, 45, 45, 75, 35, 49],
            backgroundColor:'#5b73ea'

            
        }]
    },
    options: {
         legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
            }
            }
        },
      
        scales: {
                    xAxes: [{
                        barThickness: 40,
                        gridLines: {
                            drawBorder: false,
                            display:false
                            
                        }
                }],
                    yAxes: [{
                        gridLines: {
                            display: false,         
                            drawBorder: false
                        } ,
                        ticks: {
                  beginAtZero: true
               }
                }]
    }
}
});

new Chart(canvasy, {
    // The type of chart we want to create
    type: 'line',
        data: {
        labels: ['', '', '', '', '', '', ''],
        datasets: [{
            label:"erer",
            cubicInterpolationMode:"dsasda",
            pointHitRadius:5,
            fill:false,
            borderColor: '#53B9EA',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },
    options: {
         legend: {
        display: false
    },
    tooltips: {
        callbacks: {
           label: function(tooltipItem) {
                  return tooltipItem.yLabel;
            }
            }
        },
      
        scales: {
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display:false
                            
                        },
                        ticks: {
                    display: false //this will remove only the label
                }
                }],
                    yAxes: [{
                        gridLines: {
                            display: false,         
                            drawBorder: false
                        } ,
                        ticks: {
                    display: false //this will remove only the label
                }  
                }]
    }
}
});








        </script>
        <script>
            $('.Count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 380,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text('฿ '+  Math.ceil(now).toLocaleString());
                }
            });
        });
        



        var myDoughnutChart = new Chart(Doughnut, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [10, 20, 30, 50],
        backgroundColor: [
                '#343090',
                '#5f59f7',
                '#6592fd',
                '#44c2fd'
            ],
            borderAlign:'inner',
            borderWidth:0.1,
            weight:1,

    }],
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
},options: {
    cutoutPercentage: 70, 
}

});




        </script>











{{-- 
var index = 11;
var canvasd = document.getElementById('canvasd').getContext('2d');
var canvasy = document.getElementById('canvasy').getContext('2d');
var canvasm = document.getElementById('canvasm').getContext('2d');
var d = [0, 10, 5, 2, 20, 30, 45];
var m = [20, 10, 50, 100, 20, 20];
var y = [0, 10, 5, 2, 20, 30, 45];




const chartshow =(datalist,tag,colorline)=>{
    new Chart(tag, {
        type: 'line',
            data: {
            labels: datalist,
            datasets: [{
                label:"erer",
                cubicInterpolationMode:"dsasda",
                pointHitRadius:5,
                fill:false,
                borderColor: colorline,
                data: datalist
            }]
        },
        options: {
            legend: {
            display: false
        },
        tooltips: {
            callbacks: {
            label: function(tooltipItem) {
                    return tooltipItem.yLabel;
                }
                }
            },
        
            scales: {
                        xAxes: [{
                            gridLines: {
                                drawBorder: false,
                                display:false
                                
                            },
                            ticks: {
                        display: false 
                    }
                    }],
                        yAxes: [{
                            gridLines: {
                                display: false,         
                                drawBorder: false
                            } ,
                            ticks: {
                        display: false 
                    }  
                    }]
        }
    }
    });
}
chartshow(d,canvasd,'#4CFA9D');
chartshow(m,canvasm,'#53B9EA');
chartshow(y,canvasy,'#53B9EA');
 --}}

