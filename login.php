

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="css/homepage.css">
    
       <style type="text/css">
              .font{
                font-family:roboto;
              }
            </style>

    
    
 
</head>

<body>

    
    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row">

               <!--First column-->
                    <div class="col-md-3">
                    </div>
                 
                        <div class="col-lg-5">
                            <form  action="login.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">

                                    <center>
                                            <img src="img/goldleap.png" style="width: 60px; position: relative; margin-top: -30px;">
                                          </center>
                                          
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h4 class="font"> Welcome back! Please login.</h4>
                                            <br/><hr/>
                                            

                                            <?php
                                                if (isset($_POST['login_button'])) {
                                                    $email=$_POST['email'];
                                                    $password=$_POST['password'];


                                                    $query="SELECT * FROM leapsignup WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)==0){

                                                            echo "<strong style='color:red;'>Wrong email</strong>";
                                                                
                                                        }else{

                                                        }

                                                    $query="SELECT * FROM leapsignup WHERE password='$password'";
                                                    $query_run=mysqli_query($mysqli,$query);

                                                        if(mysqli_num_rows($query_run)==0){
                                                            echo "<strong style='color:red;'>Wrong Password</strong>";

                                                        }else{
                                                                $query="SELECT * FROM leapsignup WHERE email='$email' AND password='$password'";
                                                                    $query_run=mysqli_query($mysqli,$query);
                                                                        if(mysqli_num_rows($query_run)>0){
                                                                            $_SESSION['email']=$email;
                                                                             header("Location:sign3.php");
                                                        }else{

                                                        }
                                                        }
                                                    # code...
                                                }
                                            ?>
                                        </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>

                                        <div class="col-md-6" style="text-align: center;">
                                        
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
<br/>
                                         <div class="row">          
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                        
                                                                <input type="email" name="email" id="email">
                                                                <label for="email" data-error="wrong" data-success="right"> <i class="material-icons">mail_outline</i>   Email Address</label>
                                                            </div>
                                                        </div>        
                                                    </div>
<br/>

                                                    <div class="row">  
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                
                                                                <input type="password" name="password" id="password" >
                                                                <label for="password" data-error="wrong" data-success="right"> <i class="material-icons">lock_outline</i> Password</label>
                                                            </div>
                                                        </div>        
                                                    </div>
                                       

                                        <div class="text-center">
                                            <button class="btn btn-primary btn-small" type="submit" name="login_button" style="width:200px; border-radius: 10px;" class="font">Sign in</button>
                                        </div>



                                      <center>
                                                       <fieldset class="form-group">
                                                
                                                   <br/><a href="sign1.php"><label><h5 style="color:black;" class="font">Dont have an account yet? Sign Up<br/><br/>Forgot Password</h5></label></a>
                                                  </fieldset>
                                                  </center> 

                                    </div>
                                </div>
                                <!--/.Form-->
                            </form>

                            
                        </div>

                    
                    <div class="col-md-3">
                    </div>


            </div>
        </div>
    </div>
</div>
<!--/.Mask-->

             
  




  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.2.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>


    
    

            

          
</body>

</html>


