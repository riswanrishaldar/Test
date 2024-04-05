<html>

<head>
    <title>Task 16</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        
        body {
            color: white;
            background-color: #113b48;
            font-family: helvita, sans-serif;
        }

        .col {
            border-style: solid;
            border-width: 4px;
            border-radius: 8px;
            background-color: #2B454E;
            overflow: hidden;
        }

        .tab {
            background-color: #264C5A;
            text-align: right;
            font-size: 30px;
            padding-right: 2px;
        }   
        .pattern{
            
        }
        </style>
</head>

<body>
    <br><br>
    <div class="container row mx-auto">
    <div class="col">
        <div class="container fs-3"><br>
<?php
    $stars=0;
    for($i=1;$i<=10;$i++){
        for($j=0;$j<=$stars;$j++){
            echo " * ";
        }
        if($i<5){
            $stars++; 
        }
        else{
            $stars--;
        }
        echo "<br>";
    }
?>
        </div>
    </div>
&nbsp;
    <div class="col">
        <div class="container fs-3"><br>
<?php
$end=6;
$start=6;

    for($i=1;$i<=6;$i++){
        for($j=$start;$j<=$end;$j++){
            echo " ".$j." ";
        }        
        $start--;
        echo "<br>";
    }
?>
        </div>
    </div>
&nbsp;  
    <div class="col">
        <div class="container fs-3"><br>
<?php

    for($i=1;$i<=5;$i++){
        for($s=5;$s>=$i;$s--){
            echo "&nbsp;";
        }
        for($j=1;$j<=$i;$j++){
            echo " * ";
        }
        echo "<br>";
    }
?>
        </div>
    </div>
&nbsp;
    <div class="col">
        <div class="container fs-3"><br>
<?php
$n=0;
    for($i=1;$i<=4;$i++){
        for($j=1;$j<=$i;$j++){
            echo " ".++$n." ";
        }
        echo "<br>";
    }
?>
        </div>
    </div>
</div>


</body>

</html>         