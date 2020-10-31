
<div class="modalShow" id="addlect2">
       <span class="closing" onclick="HideElement('addlect2');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add New Lecturer</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php" enctype="multipart/form-data">
				<input type="text" name="fname" placeholder="fname" class="input">
				<input type="text" name="lname" placeholder="lname " class="input">
		 		<select class="input" name="class">
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
				<select class="input" name="section">
					<option>Computer Science</option>
					<option>Pedagogy</option>
					<option>Litterary</option>
					<option>Social</option>
					<option>Business</option>
					<option>Accounting</option>
					<option>Economy</option>
				</select>
				<select class="input" name="sex">
					<option>male</option>
					<option>female</option>
				</select>
				
				
				<input type="number" name="salary" placeholder="salary : 2000" class="input">
				<input type="number" name="age" placeholder="Age : 45" class="input">
				
				<input type="file" name="avatar"  class="input">
				<input type="submit" name="prof" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>