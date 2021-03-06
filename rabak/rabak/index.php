<?php
error_reporting(E_ERROR);
session_start();

include 'php_files/config.php';

include 'cart_action.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rabbit  breeders Association of Kenya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>

	<style type="text/css" id="enject"></style>
      <script src="bootstrap/js/custom-sweetalert.js"></script>
  </head>
<body>

<!-- Header ====================================================================== -->

<?php
include 'php_files/nav_bar.php';

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

</div>
<div id="mainBody">
	<div class="container">
	<div class="row">

		<div class="span9">		

		<h4>Products </h4>
			  <ul class="thumbnails">


                    <?php
                    $select="SELECT * FROM product";
                    $query=mysqli_query($con,$select);
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <li class="span3" id="<?php echo $row['product_id']?>">
                            <div class="thumbnail">
                                <img src="uploads/<?php echo $row['image']?>" alt="image" style="height: 150px"/>
                                <div class="caption">
                                    <h5><?php echo $row['product_name']?></h5>
                                    <p><i style="font-weight: bolder;color: darkred">
                                            Ksh  <?php echo number_format($row['product_price'])?></i>
                                       Stock  <?php echo $row['stock']?>.
                                    </p>


                                        <form method="post" autocomplete="off" action="#<?php echo $row['product_id']?>">
                                           <p>
                                               <input value="<?php echo $row['product_id']?>"  type="hidden" class=""name="hID" style="width: 40%;padding-top: 5px">
                                               <input value="1"min="1"  type="number" class=""name="qty" style="width: 40%;padding-top: 5px">

                                               <?php
                                               if(empty($_SESSION['nID'])){
                                                   ?>
                                                   <button type="button" class="btn btn-primary" name="cartBtn" onclick="swal('','Login as a customer to add item to your cart','')">Add to <i class="icon-shopping-cart" style="padding: 0%"></i></button>

                                                   <?php

                                               }else{
                                                   ?>
                                                   <button type="submit" class="btn btn-primary" name="cartBtn">Add to <i class="icon-shopping-cart" style="padding: 0%"></i></button>

                                                   <?php
                                               }
                                               ?>
                                            </p></form>



                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                        </ul>



		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<footer>
  <?php  include 'footer.php'; 
  ?> 
  </footer>	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	

</body>
</html>