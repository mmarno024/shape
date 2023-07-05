<!DOCTYPE html>
<html>
    <body>
        
    <div class="container" style="text-align: center;">
        <canvas id="myCanvas" style="background-color:white; border:1px dotted #000; display:block;"  width="500" height="500"></canvas>
        <!-- <canvas id="demoCanvas" width="340" height="340"> canvas</canvas>  -->
    </div>
        <script>
            var img = document.createElement("img");
            img.src = "img/stone1new.jpg";

            var canvas = document.getElementById("myCanvas");
            
            var ctx = canvas.getContext("2d");
            // var ctx2 = canvas.getContext("2d");

            // var canvasPattern = document.createElement("canvas");
            // canvasPattern.width = 10;
            // canvasPattern.height = 10;
            // var contextPattern = canvasPattern.getContext("2d");
            // contextPattern.beginPath();
            // contextPattern.strokeRect(0.5, 0.5, 10, 10);
            // contextPattern.arc(5.5, 5.5, 3, 0, Math.PI);
            // contextPattern.rect(3, 3, 1, 1);
            // contextPattern.rect(7, 3, 1, 1);
            // contextPattern.stroke();
            var pattern = ctx.createPattern(img,'repeat');
            
            
            var y = 25;
            ctx.font = '10pt Arial';
            ctx.fillText('Y = '+y,80,180);


            ctx.beginPath();
            ctx.moveTo(150,250);
            ctx.lineTo(150,400);
            ctx.lineTo(350,400);
            ctx.lineTo(350,250);
            ctx.fillStyle = "aqua";
            ctx.fill();

            
            
            ctx.lineWidth = 5;
            ctx.strokeStyle = "darkgrey";
            ctx.beginPath();
            ctx.moveTo(50,450);
            ctx.lineTo(450,450);
            ctx.lineTo(450,200);
            ctx.lineTo(350,200);
            ctx.lineTo(350,400);
            ctx.lineTo(150,400);
            ctx.lineTo(150,200);
            ctx.lineTo(50,200);
            ctx.lineTo(50,450);
            ctx.fillStyle = "lightgrey";
            // ctx.fillStyle = pattern;
            ctx.fill();
            ctx.stroke();





            // var canvas = document.getElementById('demoCanvas');
            // var ctx = canvas.getContext('2d');
            // var x = 90;
            // var y = 100;
            // var radius = 50;
            // var startAngle = 1.1 * Math.PI;
            // var endAngle = 1.9 * Math.PI;
            // var counterClockwise = false;
            // ctx.beginPath();
            // ctx.arc(x, y, radius, startAngle, endAngle, counterClockwise);
            // ctx.lineWidth = 10;
            // // line color
            // ctx.strokeStyle = 'green';
            // ctx.stroke();



        </script>


        <!-- <canvas id="canvas" style='background-color:#EEE;' width='500px' height='200px'></canvas>
        <script type='text/javascript'>
            var canvas = document.getElementById("canvas");
            var context = canvas.getContext("2d");
            var canvasPattern = document.createElement("canvas");
            canvasPattern.width = 10;
            canvasPattern.height = 10;
            var contextPattern = canvasPattern.getContext("2d");
            contextPattern.beginPath();
            contextPattern.strokeRect(0.5, 0.5, 10, 10);
            contextPattern.arc(5.5, 5.5, 3, 0, Math.PI);
            contextPattern.rect(3, 3, 1, 1);
            contextPattern.rect(7, 3, 1, 1);
            contextPattern.stroke();
            var pattern = context.createPattern(canvasPattern,"repeat");
            context.fillStyle = pattern;
            context.fillRect(20, 20, 100, 100);
            context.fill();
        </script> -->

    </body>
</html>