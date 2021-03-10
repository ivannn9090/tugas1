<?php


$aInput = "";          
$bInput = "";            
$nInput = "";         

$temp = "";           
$output = "";       
$Un = "";          


if (isset($_POST['print'])) {      

    $aInput = $_POST["inputa"];
    $bInput = $_POST["inputb"];
    $nInput = $_POST["inputn"];


    $a = $aInput;
    $b = $bInput;
   


    $Un = $a + (10 - 1) * $b;


    for ($i = 0; $i < 10; $i++) {
        $temp = $a + $i  * $b;
        $output .= $temp . ", ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>TAMPLATE FROM IVAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/myweb.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
        <div class="header">
            <h1> JUDUL </h1>
            <h2>SUBJUDUL</h2>
           
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://localhost/tugas1/myweb.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/tugas1/form/form.php">Hubungi Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tugas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="http://localhost/tugas1/math/fibonacci.php">Fibonacci</a></li>
            <li><a class="dropdown-item" href="http://localhost/tugas1/math/arematika.php">Arimatika</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div class="row">
             <div class="left">
             <h3> side bar</h3>
             ddd
                
             </div>
             <div class="right">
             
                <h3><strong> ARIMATIKA </strong></h3>
                <form method="POST" action="#" class="form-container">
                            <p>U<sub>n</sub> = a + (n -1)b</p>
                            <p>b = U<sub>n</sub> - U <sub>n-1</sub></p>
                            <div class="form-group">
                                <label for="inputa">a = </label>
                                <input type="number" class="form-control" value="<?php echo $aInput; ?>" id="inputa"
                                    name="inputa" required />
                            </div>
                            <div class="form-group">
                                <label for="inputb">b =</label>
                                <input type="number" class="form-control" value="<?php echo $bInput; ?>" id="inputb"
                                    name="inputb" required />
                            </div>

                          

                            <button type="submit" class="btn btn-primary" name="print">
                                Print
                            </button>

                            <br />
                            <div class="form-group">
                             
                                <h5> <b>Baris Aritmatika: </b> </h5>
                                <p> <?php echo $output; ?> </p>
                                <p> <b> U<sub>n</sub> = </b> <?php echo $Un; ?> </p>
                            </div>

                           

                        </form>
             </div>   
        </div>
        <div style="clear:both"></div>
        <div class="row">
             <div class="footer">
                 <div id="text">
                     footer
                 </div>
             </div>
        </div>
        </div>
</body>

</html>






