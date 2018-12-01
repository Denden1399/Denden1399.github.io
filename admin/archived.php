<?php include('header.php'); ?>

		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>History</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
       <div class="grid-form">
<div class="col-md-12 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
         
      <div class="mailbox-content">
						<h2 class="title text-center">HISTORY</h2>                                            					
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#data1" role="tab" data-toggle="tab">Finish Orders</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
            
        </table>
    </div>
    <div class="tab-pane" id="data1">
        <table class="table table-bordered">
            <thead class="bg-default">
            <?php $delivered = $jim->getdeliveredorders(); ?>
            <?php while($row = mysql_fetch_array($delivered)){ ?>
               
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data3">
        <table class="table table-bordered">
            <thead class="bg-default">
                <th>Date Paid</th>
                <th>Customer</th>
                <th>Item</th>
            </thead>
            <?php $paid = $jim->getpaidorders(); ?>
            <?php while($row = mysql_fetch_array($paid)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateDelivered']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>" target="_blank"><i class="fa fa-external-link"></i> View Item</a></td>                    
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div> 
       </div>
        <div class="clearfix"> </div>
       </div>
                    
                 </div>
                     
    

<?php include('footer.php'); ?>