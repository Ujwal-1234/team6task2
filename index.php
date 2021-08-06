<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!--My Custom CSS-->
<link href="mycustom.css" rel="stylesheet" type="text/css">
<title>Index Page</title>
</head>
<body>
<!--Navbar--> 
<!--<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container-fluid"> <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.php">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="">Display</a> </li>
      </ul>
    </div>
  </div>
</nav>--> 

<!-- Table display-->
  <tbody>
    <?php
    //Read Excel file using PHPExcel library
    error_reporting( 0 );
    require_once "Classes/PHPExcel.php";
    $path = "Team 6 Task 2 - Project Tracker - Part 2.xlsx";
    $reader = PHPExcel_IOFactory::createReaderForFile( $path );
    $excel_Obj = $reader->load( $path );

    //Get the last sheet in excel
    //$worksheet=$excel_Obj->getActiveSheet();

    //Get the first sheet in excel
    $worksheet = $excel_Obj->getSheet( '0' );
    //echo $worksheet->getCell('E33')->getValue();
    $No_of_Row = $worksheet->getHighestRow();
    $No_of_Col = $worksheet->getHighestDataColumn();
    $colomncount_number = PHPExcel_Cell::columnIndexFromString( $No_of_Col );
    //echo $No_of_Row.'     ';
    //echo $No_of_Col;
    echo "<table class='table table-dark table-bordered table-striped table-hover table-responsive mt-5 text-center'>";
    for ( $row = 0; $row <= $No_of_Row; $row++ ) {
      echo "<tr>";
      for ( $col = 0; $col <= $colomncount_number; $col++ ) {
        echo "<td>";
        echo $worksheet->getCell( PHPExcel_Cell::stringFromColumnIndex( $col ) . $row )->getValue();
        echo "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </tbody>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
