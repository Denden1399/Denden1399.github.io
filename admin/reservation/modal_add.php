	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Add Tourist Spot</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Title</label></td>
							<td width="30"></td>
							<td><input type="text" name="title" placeholder="Tourist Spot Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Description</label></td>
							<td width="30" ></td>
							<td><input type="text" maxlength="500" rows="4" cols="30" name="description" placeholder="Describe the Location" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Credits to Owner</label></td>
							<td width="30" ></td>
							<td><input type="text" maxlength="500" rows="4" cols="30" name="cred" placeholder="Credits" required /></td>
						</tr>

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Tour Package</label></td>
							<td width="30" ></td>
							<td><input type="text" maxlength="500" rows="4" cols="30" name="info1" placeholder="Tour packages" required /></td>
						</tr>
												<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Tour Package Price</label></td>
							<td width="30" ></td>
							<td><input type="text" maxlength="500" rows="4" cols="30" name="info2" placeholder="Price" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			