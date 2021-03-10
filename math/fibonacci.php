<?php
$f1Input = "0";         
$f2Input = "0";         
$nInput = "2";        

$temp = "0";            
$fn = "";            


if (isset($_POST['print'])) {     

    $f1Input = $_POST["inputf1"];
    $f2Input = $_POST["inputf2"];
    $nInput = $_POST["inputn"];

   
    $f1 = $f1Input;
    $f2 = $f2Input;
    $n = 10;
   
    $fn = $f1 . ", " . $f2;
    for ($i = 0; $i < $n - 2; $i++) {
        $temp = $f1 + $f2;
        $f1 = $f2;
        $f2 = $temp;

        $fn = $fn . ", " . $temp;
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
             
                <h3><strong> FIBONACCI </strong></h3>
                <form method="POST" action="#" class=" form-container">
                            <p>F<sub>n + 1</sub> = F <sub>n - 1</sub> + F<sub>n </sub></p>

                            <div class="form-group">
                                <label for="inputf1">F<sub>1</sub> = </label>
                                <input type="number" class="form-control" value="<?php echo $f1Input; ?>" id="inputf1"
                                    name="inputf1" required />
                            </div>
                            <div class="form-group">
                                <label for="inputf2">F<sub>2</sub> = </label>
                                <input type="number" class="form-control" value="<?php echo $f2Input; ?>" id="inputf2"
                                    name="inputf2" required />
                            </div>
                            <button type="submit" class="btn btn-primary" name="print">
                                Print
                            </button>

                            <br >
                            <div class="form-group">
                                <h5> <b>deret fibonacci: </b> </h5>
                                <p> F<sub>n = </sub> <?php echo $fn; ?> </p>
                            </div>
                            </form>
                            </div>
                            
                        
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






