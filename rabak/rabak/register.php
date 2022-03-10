<?php
session_start();
ob_start();
error_reporting(E_ERROR);

include 'php_files/config.php';

if(isset($_POST['registerBtn'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    if(empty($firstname)|| empty($lastname)|| empty($username)|| empty($phoneno)|| empty($email)||  empty($password)){
        $swal="error";
        $fb="Please enter all the details";

    }elseif(!preg_match ('/^([a-zA-Z]+)$/',$firstname)){
        $swal='error';
        $fb='Invalid first name. only letters allowed';
    }elseif(!preg_match ('/^([a-zA-Z]+)$/',$lastname)){
        $swal='error';
        $fb=' Invalid last name. Only letters only allowed';
    }elseif(!preg_match ('/^([a-zA-Z]+)$/',$username)){
        $swal='error';
        $fb='invalid username. Only letters only allowed';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $swal='error';
        $fb='Invalid email';


    }elseif(!is_numeric($phoneno)){
        $swal='error';
        $fb='Phone number should contain digits only ';


    }elseif(strlen($phoneno)<>10){
        $swal='error';
        $fb='Phone number should have 10 digit numbers';

    }elseif(strlen($password)<3) {

        $swal='error';
        $fb='Password should have more than 3 characters';


    }else{
        // check if user name exist
        $select="SELECT * FROM customer WHERE username='$username'";
        $query=mysqli_query($con,$select);
        if($check=mysqli_num_rows($query)>0){
            $swal="error";
            $fb=$username." Username in use";
        }else{

            // check if phone no exist
            $select="SELECT * FROM customer WHERE phone_no='$phoneno'";
            $query=mysqli_query($con,$select);
            if($check=mysqli_num_rows($query)>0){
                $swal="error";
                $fb=$phoneno." Phone number  in use";
            }else{
                // check if email exist
                $select="SELECT * FROM customer WHERE email='$email'";
                $query=mysqli_query($con,$select);
                if($check=mysqli_num_rows($query)>0){
                    $swal="error";
                    $fb=$email ." Email is in use";
                }else{




                    $insert="INSERT INTO customer(first_name,last_name,username,phone_no,email,password) VALUES 
	('$firstname','$lastname','$username','$phoneno','$email','$password')";
                    if(mysqli_query($con,$insert)){
                        $_SESSION['success']='Account created successfully. Please wait for activation';

                        header('location:login.php');
                    }else{
                        $swal='error';
                        $fb='Please try again';
                    }
                }
            }
        }
    }
}
ob_end_flush();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $siteName?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>  
.center {
margin: auto;
width: 60%;
border: 5px solid #FFFF00;
padding: 10px;
}
.</style>


    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

    <!-- Google-code-prettify -->
    <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>

    <script src="bootstrap/js/custom-sweetalert.js"></script>
</head>
<body>

<!-- Header ====================================================================== -->
<?php
include 'php_files/nav_bar.php';
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
            <?php
          //  include 'php_files/sidebar.php';

            if($swal=='error'){
                echo'<script>
swal("Failed","'.$fb.'","error")
</script>';
            }
            if($swal=='success'){
                echo'<script>
swal("SUCCESS","'.$fb.'","success")
</script>';
            }
            if($swal=='error'){
                echo'<script>
swal("Failed","'.$fb.'","error")
</script>';
            }
            if($swal=='success'){
                echo'<script>
swal("SUCCESS","'.$fb.'","success")
</script>';
            }

            ?>
           
            <!-- Sidebar end=============================================== -->
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">REGISTER</li>
                </ul>

                <hr class="soft"/>

                <div class="span4 offset1">
                    <div class="well text-center">
                        <h5> REGISTER HERE</h5>
                        <form method="post"autocomplete="off">
                                <label class="control-label" for="inputEmail1">First name</label>

                                <input class="span3 " name="firstname"value="<?php echo $firstname?>"  type="text" id="inputEmail1" placeholder="First name">

                                <label class="control-label" for="inputEmail1">Last Name</label>
                                <input class="span3"  type="text" name="lastname"value="<?php echo $lastname?>" id="inputEmail1" placeholder="Last name">

                                <label class="control-label" for="inputEmail1">Username</label>
                               <input class="span3"  type="text" name="username"value="<?php echo $username?>" id="inputEmail1" placeholder="Username">

                            <label class="control-label" for="inputEmail1">Email</label>
                            <input class="span3"  type="text" name="email"value="<?php echo $email?>" id="inputEmail1" placeholder="Email">

                            <label class="control-label" for="inputEmail1">Phone number</label>
                            <input class="span3"  type="text" name="phoneno"value="<?php echo $phoneno?>" id="inputEmail1" placeholder="Phone number">

                            <label class="control-label" for="inputPassword1">Password</label>

                                    <input type="password"  name="password"value="<?php echo $password?>"class="span3"  id="inputPassword1" placeholder="Password">

                                <div class="controls">
                                    <button type="submit" class="btn btn-danger"name="registerBtn">Register</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            </div>
        </div> 
    </div>
<!-- Footer ================================================================== -->
<footer>
  <?php  include 'footer.php'; 
  ?> 
</footer>
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>




</body>
</html>