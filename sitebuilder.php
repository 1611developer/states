<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Maker</title>
    <style>
        img {
            border-radius: 2%;
        }
    </style>
</head>
<body>

<div class="px-4 py-2 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://blog.lakeside.com/wp-content/uploads/2014/05/American-Flag.jpg" alt="" width="480" height="300">
    <h1 class="display-5 fw-bold">Build the 50 States Website Here</h1>
    <div class="col-lg-6 mx-auto">
      <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">


        <a href="sitebuilder.php?run=yes" class="btn btn-primary btn-lg px-4 gap-3">Build Website</a>
        <a href="index.php" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-lg px-4">Index</a>
      </div>
    </div>
</div>

<br><br>

<?php

$state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

if(isset($_GET['run'])) {
    foreach ($state_list as $state) {
$statename = $state;
//$state = preg_replace('/\s+/', '_', $state);
$upperunder = preg_replace('/\s+/', '_', $state);
$lowerunder = preg_replace('/\_/', ' ', $state);
$myimage = "http://jaxcode.com/stateflags/$upperunder.svg.png";

$state = strtolower($state);

$myfile = fopen("pages/$lowerunder.html", "w") or die("Unable to open file!");

$mystring = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Website Maker</title>
</head>
<body>
    <a href="../index.php" class="btn btn-outline-secondary btn-lg px-4">Go Back</a>
    <div class="container text-center" style="background-color:#FFF;">
        <div class="row">
            <div class="col-lg-12">
                <h1>$statename</h1>
                <img src="$myimage" class="img-thumbnail">
                <br><br>
                <iframe src="https://wikipedia.org/wiki/$state" width="100%" height="10000" frameborder="0"></iframe>
                    <br><br>
            </div>
        </div>
    </div>


</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</html>
EOT;

fwrite($myfile, $mystring);

fclose($myfile);

echo '<table class="table table-bordered">';
echo '<tr>';
echo '<td class="text-center">';
echo 'File Created: <a href="pages/'.$state.'.html"> '.$state.'.html</a><br>';
echo '</td>';
echo '</tr>';
echo '</table>';
    }
}

?>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>