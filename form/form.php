<!DOCTYPE html>
<html lang="en">
     <head>
         <title>HUBUNGI KAMI</title>
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

           <div class="right"> 
           <div class="col-lg-8 " >
                    <h1>HUBUNGI KAMI</h1>
                    <hr>
                    <form class="form-horizontal" action="  ">
                        <div class="form-group">
                            <label class="control-label col-sm-3"> Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" required placeholder=" Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="example@domain.com" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">PESAN:</label>
                            <div class="col-sm-9">
                                <textarea name="pesan"class="form-control" placeholder="pesan anda..." id="pesan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="send" class="btn btn-default" style="background-color:brown; color:white;">send</button>
                            </div>
                        </div>
                    </form>
                </div>
           </div>  
           <div id="myModal" class="modal Fade" role="dialog">
            <div class="modal-dialog">
              
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Berhasil</h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> 
     </body>
     
</html>

