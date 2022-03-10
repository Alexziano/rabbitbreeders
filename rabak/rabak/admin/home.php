<?php
error_reporting(E_ERROR);
session_start();
if(empty($_SESSION['userID'])){
   header('location:index.php');
}
include "../php_files/config.php";



?>

<!DOCTYPE html>

<html lang="en" class=" lang-en" style="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $siteName?></title>
    <link rel="shortcut icon" href="http://192.168.0.1/favicon.ico">
    <link rel="stylesheet" href="css_file/reasyui.css">
    <link rel="stylesheet" href="css_file/index.css">
    <link href="css_file/bootstrap.min.css">
    <![endif]-->

    <script src="js/b28n.js"></script>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

</head>
<body class="index-body">
<noscript>
    <div id="testJs" class="test-tips">
        
    </div>
</noscript>
<div id="main_content" class="none" style="display: block;">
    
    <?php

    

    ?>
   
    <section class="container-fluid">
        <div class="row main-container">
        
            <div class="navbar navbar-default col-sm-3 col-lg-2" id="nav">
                
            </div>
            
            <article class="col-sm-9 col-lg-10 main-content" id="main-content" >



            <div id="iframe" class="">
                

         <h1>Welcome <?php echo $_SESSION['user']?></h1>
                           

<?php
include 'stock.php'  ?>

            
     
               </body></html>