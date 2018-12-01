<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


	include'../db.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM reservation WHERE id= :r_id");
	$result->bindParam(':r_id', $id);
        if($result->execute()){    
      header("location:reservations.php");
        }else{
            echo 'error, Please retry';
        }     
?>