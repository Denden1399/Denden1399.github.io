<?php include 'header.php'; ?>
<?php
    
    if(isset($_POST['addcategory'])){
        $category = $_POST['category']; 
        $jim->addcategory($category);
    }
   
?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Menu</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">

<div class="clearfix"> </div>

<div class="col-md-12 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
      <div class="mailbox-content">
          <label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
          <script>
              $('#filter').on('keyup', function(e) {
    if ('' != this.value) {
        var reg = new RegExp(this.value, 'i'); // case-insesitive

        $('.table tbody').find('tr').each(function() {
            var $me = $(this);
            if (!$me.children('td').text().match(reg)) {
                $me.hide();
            } else {
                $me.show();
            }
        });
    } else {
        $('.table tbody').find('tr').show();
    }
});
          </script>
          <div class="pull-right"><span style="background-color: #ccc; color: #FFF; padding: 5px;"> <a href="add_product.php">Add new Dish</a></span></div>
  
           <table id="myTable" class="table table-striped table-hover" >
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
	
								<th> Name </th>
								<th> Event </th>
								<th> Date </th>
								<th> Time </th>
                                <th> Action </th>
							</tr>
						</thead>
               
                   <tbody>
                        <?php
							
							$result = mysql_query("SELECT * FROM reservation");
							while($row = mysql_fetch_array($result))
								{
									$id = $row["r_id"];
									echo '<tr class="record">';
									echo '<td style="border-left: 10px solid #C1DAD7;">'.$row['r_id'].'</td>';
									echo '<td><div align="left">'.$row['name'].'</div></td>';
									echo '<td><div align="left">'.$row['event'].'</div></td>';
									echo '<td><div align="left">'.$row['date'].'</div></td>';
									echo '<td><div align="left">'.$row['hr'].' : '.$row['min'].' : '.$row['ampm'].'</div></td>';
									echo '<td><div align="right"><a href="delete2.php?id='.$id.'" class="btn btn-danger" title="Click To Delete">Delete</a></div></td>';
									echo '</tr>';
								}
?> 
                     
                    </tbody>
                </table>
               </div>
            </div>
</div>
</div>
        </div>
 	


<div class="clearfix"> </div>
   </div>
    
</div>
                 </div>


<?php include 'footer.php'; ?>