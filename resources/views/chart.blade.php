@extends('layouts.app')

    @section('content')
   
   
   <div class="container">
        <canvas id="myCanvas"></canvas>
    </div>

    @section('scripts')

    <script>
        $(function(){
        let myCanvas=document.getElementById("myCanvas").getContext('2d');
        let myLabels=["Roma","Milano","Napoli","Palermo","Salerno"];
        let myData=["28000","13000","9600","5800","1000"];

        let chart=new Chart(myCanvas,{
            type:'bar',
            data:{
                labels:myLabels,
                datasets:[{
                    label:"Popolazione",
                    data: myData,
                    backgroundColor:['blue','green','yellow','white','orange'],
                    borderColor:'grey',
                    borderWidth:4
                    
  
                }]
            },
            options: {
                title:{
                    display:true,
                    text: "Popolazione citta",
                    fontSize:48,
                },
                layout:{
                    padding:0,
                }
            }   
        })
    });
    </script>
    @endsection
   
   
 @endsection
    
   
    
    