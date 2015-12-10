<?php
/**
 * Created by PhpStorm.
 * User: Marcin
 * Date: 2015-12-10
 * Time: 13:20
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serce</title>



</head>
<body>


<div id="cos">  </div>

<canvas id="foto" width="500" height="500" >
    Brak obs³ugi elementu canvas
</canvas>

<script>
    moj_canvas = document.getElementById("foto");
    kontekst = moj_canvas.getContext('2d');
    //kontekst.fillStyle = 'red';


    flag = true;


    /**
     * Implementacja bicia serca za pomoc¹ krzywych Beziera
     */
    function serce() {



        //document.getElementById('cos').innerHTML = "cokolwiek";
        //kontekst.clearRect()
        kontekst.clearRect(0, 0, moj_canvas.width, moj_canvas.height);
        kontekst.beginPath();

        var rgb1 = "rgb(152,0,0)";
        var rgb2 = "rgb(182,0,0)";

        if (flag) {
            //document.getElementById('cos').innerHTML = "petla jeden";
            kontekst.fillStyle = rgb1;
            kontekst.moveTo(75,40);
            kontekst.bezierCurveTo(75,37,70,25,50,25);
            kontekst.bezierCurveTo(20,25,20,62.5,20,62.5);
            kontekst.bezierCurveTo(20,80,40,102,75,120);
            kontekst.bezierCurveTo(110,102,130,80,130,62.5);
            kontekst.bezierCurveTo(130,62.5,130,25,100,25);
            kontekst.bezierCurveTo(85,25,75,37,75,40);

        } else {
            //document.getElementById('cos').innerHTML = "petla dwa";
            kontekst.fillStyle = rgb2;
            kontekst.moveTo(75,31);
            kontekst.bezierCurveTo(75,30,72,17,50,18);
            kontekst.bezierCurveTo(15,20,13,62.5,15,70);
            kontekst.bezierCurveTo(20,97,50,118,75,133);
            kontekst.bezierCurveTo(120,110,137,77,135,62.5);
            kontekst.bezierCurveTo(135,62.5,135,19,100,19);
            kontekst.bezierCurveTo(86,20,75,30,75,31);
        }

        kontekst.fill();

        flag = (!flag);
        setTimeout("serce()", 1200);
    }

    serce();

</script>




</body>
</html>

