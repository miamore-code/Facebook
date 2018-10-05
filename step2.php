<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="fb-header-step2">
    </div>

    <div class="fb-header">
        <div id="img1" class="fb-header">
            <img id="img1" src="images/facebook.jpg">
        </div>
    </div>
     <br> <br> <br> <br>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6 offset-4 border shadow">
                <form id="regform" class="form-group  border" method="POST" enctype="multipart/form-data">
                    
                    <h4 class="text-center"> Please Give Some Information about You </h4> <br>
                    
                    <label> Address</label>
                    <input type="text" name="address" class="form-control reg" required>
                       
                    <label > City </label>
                    <input type="text" name="city" class="form-control reg" required>
                    

                    <label> State </label>
                    <input type="text" name="state" class="form-control reg" required>
                    

                    <label> Country </label>
                    <input type="text" name="country" class="form-control reg" required>

                    <br> <br>
                    
                    <h4 class="text-center"> Upload Your Profile Picture </h4> <br>
                    <input type="file" name="dp" class="form-control reg" required>
                    <br> <br>
                    <h4 class="text-center"> Upload Your Cover Photo </h4> <br>
                    <input type="file" name="cover" class="form-control reg" required>
                    <br> <br>

                    <h4 class="text-center"> Some Other Informations </h4> <br>

                    <label > Works at </label>
                    <input type="text" name="work" class="form-control reg" required>

                    <label > Last School / College </label>
                    <input type="text" name="lsc" class="form-control reg" required>
                    <br>
                    <label > Marital Status </label>
                    <input type="radio" name="mrg" value="married" class="reg" required> Married
                    <input type="radio" name="mrg" value="unmarried" class="reg" required> Unmarried <br> <br>

                    <label > Write Something About You </label>
                    <input type="text" name="bio" class="form-control reg" required>
                    <br> <br> 
                    
                    <center>
                    <input type="submit" name="signup" class="btn btn-primary" value="Sign Up">
                    </center>
                
                </form>

            </div>
        </div>
    </div>
    </div>









</body>
</html>