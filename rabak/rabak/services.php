<?php
error_reporting(E_ERROR);
session_start();

include 'php_files/config.php';

include 'cart_action.php';
?>
<!doctype html>
<html lang="en">

<head>
     <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive --> 
    <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->   
    <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>

    <style type="text/css" id="enject"></style>
      <script src="bootstrap/js/custom-sweetalert.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Linking CSS File index.css -->

    <link rel="stylesheet" href="css/footer.css">

    <title>Our Services</title>

    <header>
        
<?php  
include 'php_files/nav_bar.php';
?>

    </header>


<body>

    <div class="container-fluid">
        <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
        <hr class="mx-auto mb-5 w-25">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="img/litter.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Rabbit breeding</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="img/sell.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Rabbit selling</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="img/com.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Community service</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <!-- card starts here -->
                <div class="card shadow">
                    <img src="img/learn.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Members training</h3>
                        <hr class="mx-auto w-75">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
                            nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
                        </p>
                    </div>
                </div>
                <!-- card ends here -->
            </div>
            <!-- col ends here -->
        </div>
    </div>
<footer>
    <?php  include'footer.php';
     ?>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html