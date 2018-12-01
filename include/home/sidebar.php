<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="faculty-div">
						<h3>Categories of Products</h3>
						<hr />
                        <div class="list-group">
                        <?php                            
                            $q = "Select * from category order by title asc";
                            $r = mysql_query($q);

                            if($r){
                                while($row = mysql_fetch_array($r)){
                                    echo '<a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a>';
                                }
                            }
                        ?> </div>                   
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div>