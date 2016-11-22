<?php

$bmw = array("model" => "X5", "speed" => 120,"doors" => 5,"year" => "2006");
$toyota = array("model" => "Camry", "speed" => 160,"doors" => 3,"year" => "1999");
$opel = array("model" => "Cadett", "speed" => 124,"doors" => 5,"year" => "1989");

$cars = array();

$cars[] = $bmw;
$cars[] = $toyota;
$cars[] = $opel;


?>




<head>

    <style>
        table{
            border-collapse: collapse;
        }
        table, th, td{
            border:1px solid #000;
        }
        </style>

</head>

<body>

<table>
    <caption>cars</caption>
    <tr>
    <th>model</th>
    <th>speed</th>
    <th>doors</th>
    <th>year</th>
    </tr>


    <?php foreach ($cars as $item){
            echo '<tr><td>' . ($item['model']);
            echo '</td><td>' . ($item['speed']);
            echo '</td><td>' . ($item['doors']);
            echo '</td><td>'. ($item['year']);
            echo '</td></tr>';
    }?>

</table>

</body>


