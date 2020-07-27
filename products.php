<?php
  
   include_once('header2.php');
    
   if(!$_SESSION) {
       header("Location:login.php");
   } 
   
?>
<section id="member-area">
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-5">
                    <ul class="nav flex-column ml-2">
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="member_area.php">
                                <i class="fas fa-home"></i>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="#">
                                <i class="fas fa-copy"></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tags"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-friends"></i>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="shop.php">
                                <i class="fas fa-shopping-cart"></i>
                                Shop
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-0">
                <div
                    class=" container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-dark text-white">
                    <h1><i class="fas fa-cog pl-2"></i> Products</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="member_area.php" type="button" class="btn mr-5"><i class="fa fa-home"
                                aria-hidden="true"></i> Dashboard </a>
                    </div>
                </div>

            </main>

            <?php
   
    
?>
</section>

<?php
 
   include_once('footer2.php');
   
?>