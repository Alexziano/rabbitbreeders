<div class="navbar-header" style="background: #ed7020;">
    
    <button type="button" id="navbar-button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<nav class="navbar-collapse" id="nav-menu" style="min-height: 1164px; height: 1164px;">
    <ul class="nav nav-content" id="sub-menu">
 
   <li class="routerMode" >
            <a id="status" href="../admin/home.php" class="">
                Dashboard</a>
        </li>
        <?php
        if($_SESSION['user']=='Admin'){
            ?>
            
            </li>
            <li class="routerMode" >
                <a id="status" href="../admin/shipping_com.php" class="">
                    Shipping companies</a>
            </li>
            

            <li class="routerMode" >
                <a id="status" href="../admin/approved_customers.php" class="">
                    Customers</a>
            </li>
            <li class="routerMode" >
                <a id="status" href="../admin/stock.php" class="">
                    Stock</a>
            </li>
              <li class="routerMode" >
                <a id="status" href="../admin/pending_orders.php" class="">
                    Orders</a>
            </li>
            <script> <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script></script>

        <?php
        }
        ?>
          <li class="routerMode" >
            <a id="network" href="logout.php" class="">
               Logout</a>
        </li>

     </ul>
</nav>