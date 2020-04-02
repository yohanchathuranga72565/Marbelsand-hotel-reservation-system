<?php session_start();
    include 'connection.php';
    $user='';
    if(isset($_SESSION['user_type'])){
        if($_SESSION['user_type']=="admin"){
            //load the page
            
        }
        else if($_SESSION['user_type']=="receptionist"){
            //load the page
        }
        
        else{
            header('Location:index.php'); 
        }
    }
    else{
        header('Location:index.php');
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap-social.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
  <link href="simple-sidebar.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body>
    <!-- Slidebar start-->
    <?php include 'adminslidebar.php';?>
    <!-- Slidebar end-->

    <!-- dashboard content -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mt-4 bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-calendar-check-o text-left text-light fa-3x"></i>
                        <h5 class="card-title text-right text-light">Bookings</h5>
                        <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                    </div>
                    <div class="card-footer bg-dark"><br>
                        <a href="adminbookshow.php" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                        <!-- <a href="adminbookshow.php" class="text-light text-left">Add  <i class="fa fa-plus-circle"></i></a></br> -->
                    </div>            
                </div>
            </div>

            <div class="col-4">
                <div class="card mt-4 bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-bed text-left text-light fa-3x"></i>
                        <h5 class="card-title text-right text-light">Rooms</h5>
                        <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                    </div>
                    <div class="card-footer bg-dark"><br>
                        <a href="adminroomshow.php" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                        <!-- <a href="#" class="text-light text-left">Add  <i class="fa fa-plus-circle"></i></a></br> -->
                    </div>            
                </div>
            </div>

            <div class="col-4">
                <div class="card mt-4 bg-info" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fa fa-file-image-o text-left text-light fa-3x"></i>
                        <h5 class="card-title text-right text-light">Gallery</h5>
                        <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="gallery.php" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                        <a href="uploadimage.php" class="text-light text-left">Add  <i class="fa fa-plus-circle"></i></a></br>
                    </div>            
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card mt-4 bg-danger" style="width: 18rem;">
                        <div class="card-body">
                   
                            <i class="fa fa-fighter-jet text-left text-light fa-3x"></i>
                            <h5 class="card-title text-right text-light">Airport Pick Up</h5>
                            <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                        </div>
                        <div class="card-footer bg-dark">
                            <a href="adminairportshow.php" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                            <a href="#" class="text-light text-left">Add  <i class="fa fa-plus-circle"></i></a></br>
                        </div>            
                </div>
            </div>

            <div class="col-4">
                <div class="card mt-4 bg-secondary" style="width: 18rem;">
                        <div class="card-body">
        
                            <i class="fa fa-car text-left text-light fa-3x"></i>
                            <h5 class="card-title text-right text-light">Excursions</h5>
                            <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                        </div>
                        <div class="card-footer bg-dark">
                            <a href="#" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                            <a href="#" class="text-light text-left">Add  <i class="fa fa-plus-circle"></i></a></br>
                        </div>            
                </div>
            </div>

            <div class="col-4">
                <div class="card mt-4 bg-success" style="width: 18rem;">
                        <div class="card-body">
                   
                            <i class="fa fa-user text-left text-light fa-3x"></i>
                            <h5 class="card-title text-right text-light">User Details</h5>
                            <p class="card-text text-light text-right"><?php date_default_timezone_set("Asia/Colombo"); echo date("Y-m-d") . "<br>".date("h:i a");?></p>
                        </div>
                        <div class="card-footer bg-dark">
                            <a href="adminuserdetails.php" class="text-light text-left">Show <i class="fa fa-chevron-right text-light"></i></a></br>
                            <a href="#" class="text-light text-left" data-toggle="modal" data-target="#usermodal">Add  <i class="fa fa-plus-circle"></i></a></br>
                        </div>            
                </div>
            </div>


        </div>

            
    
    

        
    </div>
    <!-- dashboard content end -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script> 
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<?php
        echo '<script>';
        if((isset($_SESSION['exist']))){
                    if($_SESSION['exist']==1){ 
                    echo 'swal({
                    title: "Error!",
                    text: "Email is exist..please use another mail address!",
                    icon: "error",
                    button: "Ok",
                    });';
                    
                    //session_destroy();
                    unset($_SESSION['exist']);}
                }

        else if((isset($_SESSION['pass']))){
                  if($_SESSION['pass']==1){ 
                  echo 'swal({
                  title: "Error!",
                  text: "confirm password and password didn not match!",
                  icon: "error",
                  button: "Ok",
                  });';
                  
                  //session_destroy();
                  unset($_SESSION['pass']);}
              }  

        else if((isset($_SESSION['profileupdated']))){
                if($_SESSION['profileupdated']==1){ 
                echo 'swal({
                title: "",
                text: "Profile Updated!",
                icon: "success",
                button: "Ok",
                });';
                
                //session_destroy();
                unset($_SESSION['profileupdated']);}
            }  
            echo '</script>';
            ?>

    </body>
</html>