<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>States</title>
</head>
<body>

<div class="jumbotron">
  <h1 style="text-align: center">The 50 States and Their Flags</h1>      
  <!-- <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p> -->
</div>

<!-- <div class="container">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div> -->
    

<table class="table table-bordered">
    
<?php

$states = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

$x = 1;
echo '<tr>';

foreach($states as $state) {

    $upperunder = preg_replace('/\s+/', '_', $state);
    $lowerunder = preg_replace('/\_/', ' ', strtolower($state));

    //$state = preg_replace('/\s+/', '_', $state);

    $myimage = "https://jaxcode.com/stateflags/$upperunder.svg.png";

    //It won't find the correct url when clicking on a state if you don't put state variable in href.
    $mystring = <<<EOT
    <h4><a href="pages/$state.html"><img src="$myimage"><br>$state</a></h4>
    EOT;

    echo '<td class="text-center">';
    echo $mystring;
    echo '</td>';
    $x++;
    if($x == '6') {
        echo '</tr><tr>';
        $x = 1;
    }
};

echo '</tr>';
?>
</table>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</html>