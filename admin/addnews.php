<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
include 'header.php';
?>

<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Services Update</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
       <div class="grid-form">
<div class="col-md-12 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
         
      <div class="mailbox-content">

	   <div class="xs">
  	    <h4>New Catering Services</h4>
           
  	 <form class="form-floating " action="savenews.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group">
              <label class="control-label">Service Title</label>
              <input type="text" name="title"  class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
                        
               <div  class="form-group" >
              <label class="control-label">Service Detail</label>
              <textarea rows="2" id='body' name="body" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" > </textarea>
                        <script>
                CKEDITOR.replace( 'body' );
            </script>  
              </div>
 <div class="form-group">
        <label for="exampleInputFile">Photo</label>
        <input type="file" name='file' id="image">
      </div>
             
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save Services</button>
            </div>
          </fieldset>
        </form>
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
    <?php include'footer.php'; ?>