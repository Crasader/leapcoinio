

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Exacoin.co</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!--  custom styles (optional) -->
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

    <body style="background-color:grey;">
            <div class="container">
                <div class="row">

                   <!--First column-->

                    <div class="col-md-4 col-xs-12 col-sm-12">
                    </div>
                                     
                            <div class="col-md-5" style="margin-top: 40px;">
                                    <form action="sign1.php" method="POST">
                                        <div class="card wow fadeInRight">

                                          
                                           <center>
                                            <img src="img/goldleap.png" style="width: 60px; position: relative; margin-top: -30px;">
                                          </center>

                                                <div class="card-block">                                 
                                                    <div class="text-center" >
                                                        <h3 class="font">Create an account?</h3>  

                                                         <br/><hr>             
                                                    </div>

                                                    <div class="row">          
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                
                                                                <input type="text" name="naming" id="naming" required/>
                                                                <label for="name" data-error="wrong" data-success="right"> <i class="material-icons">account_circle</i>Name</label>
                                                            </div>
                                                        </div>        
                                                    </div>

  
                                                    <div class="row">          
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                
                                                                <input type="email" name="email" id="email" required/>
                                                                <label for="email" data-error="wrong" data-success="right"> <i class="material-icons">mail_outline</i>Email Address</label>
                                                            </div>
                                                        </div>        
                                                    </div>


                                                    <div class="row">  
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                                          
                                                                <input type="password" name="password" id="password" required/>
                                                                <label for="password" data-error="wrong" data-success="right"> <i class="material-icons">lock_outline</i>   Password</label>
                                                            </div>
                                                        </div>        
                                                    </div>

                                                     <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                              
                                                                <input type="password" name="confirm_password" id="confirm_password" required/>
                                                                <label for="confirm_password" data-error="wrong" data-success="right"><i class="material-icons">lock_outline</i>      Confirm_Password</label>
                                                            </div>
                                                        </div>        
                                                    </div>


                                                      <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="md-form form-sm">
                                                              
                                                                <input type="text" name="sponsor" id="sponsor">
                                                                <label for="sponsor" data-error="wrong" data-success="right">  <i class="material-icons">supervisor_account</i>     Sponsor (optional)</label>
                                                            </div>
                                                        </div>        
                                                    </div>





                                          <center>
                                              <fieldset class="form-group">
                                                  <input type="checkbox" id="checkbox1" name="checkbox" required/>
                                                  <label for="checkbox1"><h5 class="font">I Agree To Terms and Conditions</h5></label>

                                                  <a href="sign2.php"><button class="btn btn-danger btn-small" type="submit" name="register_button" style="width:250px; border-radius: 10px;" class="font">Continue ></button></a>
                                              </fieldset>
                            
                                                 <label> <a href="login.php"><h5 style="color:black;" class="font">Already have an account? sign in</h5></a></label>
                                                  
                                          </center> 
                                                    
                                                </div>
                                            </div>  
                                    </form>
                            </div>


                            
                                
                     <div class="col-md-3 col-xs-12 col-sm-12">
                     </div>
                              

                </div>
            </div>
                           

   <!--/BEGINING OF USER AND CUSTOMER PHP SCRIPT-->
                    <?php
                    //To check wether the form has been submitted when clicking the register button
                        if(isset($_POST['register_button'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];  
                            $sponsor=$_POST['sponsor'];       
                            $password=$_POST['password'];
                            $checkbox=$_POST['checkbox'];
                            $confirm_password=$_POST['confirm_password'];
                            $datetime = date("Y-m-d H:i:s");

                             //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($name)  && !empty($email) && !empty($password) && !empty($checkbox) && !empty($confirm_password)){

                                    //To check if the type in email format is correct ornoot
                                   if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email'])){

                                        //To check if the two password matches
                                            if($password==$confirm_password){

                                                if(isset($_POST['email'])){
                                                    $query="SELECT * FROM leapsignup WHERE email='$email'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                    if(mysqli_num_rows($query_run)>0){
                                                        echo "<script>alert('Email Already Exist')</script>";
                                                    }else{

                                                        $query="SELECT * FROM leapsignup WHERE phone_no='$phone_no'";
                                                        $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)){
                                                            echo "<script>alert('Phone Number Already Exist')</script>";
                                                        }else{
                                                            $query="INSERT INTO leapsignup(name,email,sponsor,password,datetime) VALUES('$name','$email','$sponsor','$password','$datetime')";
                                                            $query_run=mysqli_query($mysqli,$query);

                                                            if($query_run){
                                                                                 
                                                                 $to = $email;
                                                                $subject = "Confirmation from partyvendors.com.ng to $email";
                                                                
                                                                
                                                                 $message="Thank you for signing up with partyvendors.com.ng. 
                                                                 To provide you the best service possible, we require you to verify your email address. If you are receiving this email and have never signed up with us, please feel free to ignore this email. To finish your verification, please follow the directions below.
                                                                    Please click on the link below or copy and paste it into your browser to proceed with your registration.
                                                                 http://www.partyvendors.com.ng/test/confirm.php?email=$email
                                                                 
                                                                 Best regards,
                                                                 Partyvendors Team
                                                                    
                                                                 ";             

                                                                    // $sentmail = mail($to, $subject, $message);

                                                                        if($sentmail == true){
                                                                            echo "<script>alert('Your Confirmation link Has Been Sent To Your Email Address')</script>";

                                                                                           // header("Location:login.php");
                                                                        }else{
                                                                            echo "<script>alert('Cannot send Confirmation link to your e-mail address')</script>";
                                                                         }
                                                            }else{
                                                                echo "<script>alert('Insert Not succesfual')</script>";
                                                            }

                                                        }

                                                    }

                                                }else{
                                                  // else of email $_POST  
                                                }

                                            }else{
                                                echo "<script>alert('Passwords do not match')</script>";
                                            }

                                    }else{
                                        echo "<script>alert('Invalid Email Format')</script>";
                                    }

                                }else{
                                    echo "<script>alert('All Field Are Required to be filled')</script>";
                                }                       
                        }else{
                            // echo "<script>alert('nothing press')</script>";
                        }
                    ?>
    <!--/END OF USER AND CUSTOMER PHP SCRIPT-->



                    </div>
                </div>          
    <!--/.Mask-->

    <script type="text/javascript">
    $("#select2").change(function() {
      if ($(this).data('options') == undefined) {
        $(this).data('options', $('#select3 option').clone());
      }
      var id = $(this).val();
      var options = $(this).data('options').filter('[data-value=' + id + ']');
      $('#select3').html(options).show();
    });
</script>

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
