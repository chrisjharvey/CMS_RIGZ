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
                            <a class="nav-link active" href="#">
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
                            <a class="nav-link" href="products.php">
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
                    <h1><i class="fas fa-cog pl-2"></i> Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="shop.php" type="button" class="btn mr-5"><i class="fa fa-shopping-cart"
                                aria-hidden="true"></i> Shop </a>
                    </div>
                </div>
                <div class="dash-main m-5">
                    <div class="dash-main-title p-2">
                        <h4 class="ml-5 mt-2">Member Area</h4>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card text-center my-5 p-4">
                                    <div class="card-body">
                                        <i class="fas fa-copy fa-2x"></i>
                                        <h3 class="my-3">Orders</h3>
                                        <h4>10<h4>
                                                <div class="overlay">
                                                    <a class="btn btn-lg text-white">View Orders</a>
                                                </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card text-center my-5 p-4">
                                    <div class="card-body">
                                        <i class="fas fa-tags fa-2x"></i>
                                        <h3 class="my-3">Products</h3>
                                        <h4>10<h4>
                                                <div class="overlay">
                                                    <a href="products.php" class="btn btn-lg text-white">View
                                                        Products</a>
                                                </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card text-center my-5 p-4">
                                    <div class="card-body">
                                        <i class="fas fa-user-friends fa-2x"></i>
                                        <h3 class="my-3">Customers</h3>
                                        <h4>10<h4>
                                                <div class="overlay">
                                                    <a class="btn btn-lg text-white">View Customers</a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-main m-5">
                    <div class="dash-main-title p-2">
                        <h4 class="ml-5 mt-2">Subscribers</h4>
                    </div>
                    <div class="container">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <?php
   
    // include_once('logout.php');
   
    // $username = $_SESSION['user_record']['username'];
    // $email = $_SESSION['user_record']['email'];
    // echo "$username <br>";
    // echo $email;
?>
</section>

<?php
 
   include_once('footer2.php');
   
?>