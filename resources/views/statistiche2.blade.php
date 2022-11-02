@extends('layouts.app')

@section('content')
   
<div class="container "><div class="row"><canvas id="myCanvas"></canvas>
        <canvas id="canvasTorta"></canvas></div>
    </div>
    
    @endsection
    @section('scripts')
    
<script>
    var nome = <?php echo json_encode($arrayNome) ?>;
    var mensilita = <?php echo json_encode($arrayMensilita) ?>;
    var guadagno = <?php echo json_encode($arrayGuadagno) ?>;
    
    $(function(){
    let myCanvas=document.getElementById("myCanvas").getContext('2d');
    let canvasTorta=document.getElementById("canvasTorta").getContext('2d');
   

    let chart=new Chart(myCanvas,{
            type:'bar',
            data:{
                labels: nome,
                datasets:[{
                    label:"nome",
                    data: nome,
                    backgroundColor:'blue',
                    borderColor:'grey',
                    borderWidth:4},
                    {
                        label:"mensilita",
                        data: mensilita,
                        backgroundColor:'green',
                        borderColor:'grey',
                        borderWidth:4
                    },
                    {
                        label:"guadagno",
                        data: guadagno,
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
                    text: "Ral medie",
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
                    label:"nome",
                    data: nome,
                    backgroundColor:'blue',
                    borderColor:'grey',
                    borderWidth:4},
                    {
                        label:"guadagno",
                        data: guadagno,
                        backgroundColor:'green',
                        borderColor:'grey',
                        borderWidth:4
                    },
                    {
                        label:"mensilita",
                        data: mensilita,
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



   