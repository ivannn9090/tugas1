<!DOCTYPE html>
<html lang="en">
     <head>
         <title>Sistem Informasi Seputar Macbook</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="assets/myweb.css" type="text/css">
         <link rel="stylesheet" href="assets/navbar.css" type="text/css">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>
     <body>
         <div class="wrapper">
             <div class="header">
                 <h1> JUDUL </h1>
                 <h2>SUBJUDUL</h2>
            </div>
            <ul>
              <li><a class="active" href="http://localhost/tugas1/myweb.php">HOME</a></li>
              <li><a href="http://localhost/tugas1/form/form.php">hubungi kami</a></li>
              <li><a href="#link">linkt</a></li>
           </ul>

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

