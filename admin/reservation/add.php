<?php
	include('db.php');
							
							    
                            if (isset($_POST['Submit'])) {
                           
								
								$title= $_POST['title'];
								$info1= $_POST['info1'];
								$info2= $_POST['info2'];
								$cred= $_POST['cred'];
								$description= $_POST['description'];

                           mysql_query("insert into tours (title,info1,info2,cred,description) 
						values('$title','$info1','$info2','$cred','$description')")or die(mysql_error());
						header('location:index.php');
                            }
                            ?>