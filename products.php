<?php

    require_once "data_model.php";
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
                    class="container-fluid d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-dark text-white">
                    <h1><i class="fas fa-cog pl-2"></i> Products</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="member_area.php" type="button" class="btn mr-5"><i class="fa fa-home"
                                aria-hidden="true"></i> Dashboard </a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title bg-dark">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="#addEmployeeModal" class="btn" data-toggle="modal"> <span>Add
                                                New</span></a>
                                                
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
 

                                $productDetails = getAllProducts();
 
                                if(isset($productDetails)){
                                    foreach($productDetails as $product){ ?>
                                    <tr>
                                    <td> <img class ="product-img" src="images/<?php echo $product['image']?>" /> </td>
                                    <td> <?= $product['product_name'] ?> </td>
                                    <td> <?= $product['description'] ?></td>
                                    <td> <?= "£". $product['price'] ?></td>
                                    <td> <?= $product['stock'] ?></td>
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                                    class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <?php  } # End of Foreach 
          
                                    } else {
                                     echo "<tr><td colspan='9' style='font-weight: bold;'>No Product found in the Database!</td></tr>";
                                    }
                                    echo "</table>";
                                    ?>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item "><a href="#">Previous</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Product</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Product</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Stock</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Employee</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-danger"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <?php
   
    
?>
</section>

<?php
 
   include_once('footer2.php');
   
?>