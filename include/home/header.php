<?php include('db.php'); ?>
<?php session_start(); ?>
<?php //print_r($_SESSION['cart']); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    $cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }
        function getcategory(){
            $result = mysql_query("SELECT * FROM category");
            return $result;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Uno's Hand System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  </head>
<body>
<nav class="navbar navbar-inverse" style="background-color:rgb(0,0,0);">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">UNO's HAND</a>
    </div>
    <ul class="nav navbar-nav">
	
		
      
	  <li> <a href="about.php">About Us</a></li>
          <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Customize</a></li>
		  
		  <!-- <li class="dropdown"><a href="#"><b> Order </b><i class="fa fa-angle-down fa-lg"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                            $cat = $jim->getcategory();
                                            while($row = mysql_fetch_array($cat)){
                                                echo '<li><a href="category.php?filter='.$row['title'].'">'.$row['title'].'</a></li>';
                                            }
                                        ?>
    
                                    </ul>
                                </li> -->
            
          
         <li><a href="cart.php"><b> Cart </b><span class="badge"></span></a></li>
		 
		 
		 <li><a href="logout.php"><b>Signout<b></a></li>
		 
      </li>
    </ul>
  </div>
</nav>
 
</body>
</html>
    
