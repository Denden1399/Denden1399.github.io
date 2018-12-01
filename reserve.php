

			<?php
			include("db2.php");
			if(isset($_POST['item_save']))
			{
			$name = $_POST['name'];
			$event = $_POST['event'];
			$date = $_POST['date'];
			$hr = $_POST['hr'];
			$min = $_POST['min'];
			$ampm = $_POST['ampm'];
			$doc = $_POST['doc'];
			


			 
			mysql_query("insert into reservation (name,event,date,hr,min,ampm) 
			values('$name', '$event', '$date', '$hr', '$min', '$ampm')")or die(mysql_error());
			echo "<script>Reservation was Successfully send.</script>";
			header("Location: index.php");
			}
			?>









