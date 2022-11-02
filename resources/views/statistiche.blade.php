@extends('layouts.app')

@section('content')
   
<div class="container "><div class="row"><canvas id="myCanvas"></canvas>
        <canvas id="canvasTorta"></canvas></div>
    </div>
    
    @endsection
    @section('scripts')
    
<script>
    var nome = <?php echo json_encode($arrayNomi) ?>;
    var reti = <?php echo json_encode($arrayGoal) ?>;
    var assist = <?php echo json_encode($arrayAssist) ?>;
    var presenze= <?php echo json_encode($arrayPresenze) ?>;
    $(function(){
    let myCanvas=document.getElementById("myCanvas").getContext('2d');
    let canvasTorta=document.getElementById("canvasTorta").getContext('2d');
   

    let chart=new Chart(myCanvas,{
            type:'bar',
            data:{
                labels: nome,
                datasets:[{
                    label:"gol",
                    data: reti,
                    backgroundColor:'blue',
                    borderColor:'grey',
                    borderWidth:4},
                    {
                        label:"assist",
                        data: assist,
                        backgroundColor:'green',
                        borderColor:'grey',
                        borderWidth:4
                    },
                    {
                        label:"presenze",
                        data: presenze,
                        backgroundColor:'orange',
                        borderColor:'grey',
                        borderWidth:4
                    }
                ]
            }, 
            options: {
                scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                        }
                                    }]
                                },
                title:{
                    display:true,
                    text: "record 2020",
                    fontSize:48,

                },
                layout:{
                    padding:0,
                    
                }
            }   
        })
        let chart2=new Chart(canvasTorta,{
            type:'horizontalBar',
            data:{
                labels: nome,
                datasets:[{
                    label:"gol",
                    data: reti,
                    backgroundColor:'blue',
                    borderColor:'grey',
                    borderWidth:4},
                    {
                        label:"assist",
                        data: assist,
                        backgroundColor:'green',
                        borderColor:'grey',
                        borderWidth:4
                    },
                    {
                        label:"presenze",
                        data: presenze,
                        backgroundColor:'orange',
                        borderColor:'grey',
                        borderWidth:4
                    }
                ]
            }, 
            options: {
                scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                        }
                                    }]
                                },
                title:{
                    display:true,
                    text: "record 2020",
                    fontSize:48,

                },
                layout:{
                    padding:0,
                    
                 
                    
                }
            }   
        })
     });
    

     
  
   

    
    
     
  
    </script>
     
  
    </script>
    @endsection



   