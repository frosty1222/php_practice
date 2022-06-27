<?php session_start()?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Send email with mail trap</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .main{
                width: 100%;
            }
            .col-auto-main{
                 width:1200px;
                margin-left: auto;
                margin-right: auto;
                padding:0px;
            }
            .col-auto-main form{
                padding:50px;
                margin:50px;
            }
            .text-success{
                background-color:green;
                color:white;
                padding:10px 0px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="main">
                    <div class="col-auto-main">
                        
                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Email status!</strong>
                             <?php if(isset($_SESSION['message'])):?>
                            <span class="text-success">
                                 <?php
                                  $message = $_SESSION['message'];
                                   unset($_SESSION['message']);
                                   echo $message;
                                 ?>
                            </span>
                           <?php endif;?>
                          
                        </div>
                        
                          <form action="validateForm.php" method="POST" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <legend>Form Send email</legend>
                                </div>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name..." required />
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email address..." required />
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter your phone number..." required />
                                </div>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter your title..." required />
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea type="text" class="form-control" name="content" placeholder="Enter your title..." required></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>