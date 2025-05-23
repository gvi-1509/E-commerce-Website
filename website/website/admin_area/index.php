<!-- connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
<!-- bootstrap  css links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />  
<!--  css file -->
<link rel="stylesheet" href="../style.css">
<style>
    .admin_image{
    width: 100px; 
    object-fit: contain;
 }
 body{
   overflow-x:hidden;
 }
 .product_img{
   width:100px;
   object-fit:contain;
 }
 </style>

</head>
<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
      
    <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
           <div class="container-fluid">
             <img src="../image/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                         <li class="nav-item">
      <?php
      if(!isset($_SESSION['username'])){
        echo "  <li class='nav-item'>
        <a class='nav-link' href='#'>Welcome Guest</a>
   </li>";

      }else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
     </li>";
      }
      ?>
                         </li>
                    </ul>   
                </nav>
          </div>  
      </nav>

      <!-- second child-->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>

      <!-- third chilld-->
      <div class="row">
         <div class="col-md-12 bg-secondary p-1 d-flex
          align-items-center">
            <div class="p-3">
                <a href="#"> <img src="../image/admin.png"
                 alt="" class="admin_image"></a>
                <!-- <p class="text-light text-center">Admin Name</p> -->
               </div>

      <!-- for button-->       
               <div class="button text-center">
                   <button class="my-3" ><a href="insert_product.php" class="nav-link text-light 
                bg-info my-1">Insert Products</a></button>

                   <button><a href="index.php?view_products" class="nav-link text-light 
                bg-info my-1">View Products</a></button>

                   <button><a href="index.php?insert_category" class="nav-link text-light
                bg-info my-1">Insert Categories</a></button>

                   <button><a href="index.php?view_categories" class="nav-link text-light
                bg-info my-1">View Categories</a></button>

                   <button><a href="index.php?insert_brand" class="nav-link text-light
                bg-info my-1">Insert Brand</a></button>

                   <button><a href="index.php?view_brands" class="nav-link text-light 
                bg-info my-1">View Brand</a></button>

                   <button><a href="index.php?list_orders" class="nav-link text-light 
                bg-info my-1">All Orders</a></button>

                   <button><a href="index.php?list_payments" class="nav-link text-light
                bg-info my-1">All Payments</a></button>

                   <button><a href="index.php?list_users" class="nav-link text-light 
                 bg-info my-1">List Users</a></button>

                   <button><a href="admin_login.php" class="nav-link text-light 
                bg-info my-1">Logout</a></button>
             </div> 
         </div>
      </div>
   </div>

   <!-- fourth child-->
   <div class="container my-3">
      <?php
      if(isset($_GET['insert_category'])){
         include('insert_categories.php');
      } 

      if(isset($_GET['insert_brand'])){
         include('insert_brands.php');
      }

      if(isset($_GET['view_products'])){
         include('view_products.php');
      }

      if(isset($_GET['edit_products'])){
         include('edit_products.php');
      }

      if(isset($_GET['delete_product'])){
         include('delete_product.php');
      }

      if(isset($_GET['view_categories'])){
         include('view_categories.php');
      }

      if(isset($_GET['view_brands'])){
         include('view_brands.php');
      }

      if(isset($_GET['edit_category'])){
         include('edit_category.php');
      }

      if(isset($_GET['edit_brands'])){
         include('edit_brands.php');
      }

      if(isset($_GET['delete_category'])){
         include('delete_category.php');
      }

      if(isset($_GET['delete_brands'])){
         include('delete_brands.php');
      }

      if(isset($_GET['list_orders'])){
         include('list_orders.php');
      }

      if(isset($_GET['delete_orders'])){
         include('delete_orders.php');
      }

      if(isset($_GET['list_payments'])){
         include('list_payments.php');
      }

      if(isset($_GET['list_users'])){
         include('list_users.php');
      }
      ?>
   </div>

   <!-- include footer -->
   <?php include("../includes/footer.php") ?>

<!-- bootstrap js links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
   crossorigin="anonymous"></script>

</body>
</html>