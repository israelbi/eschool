
<div class="modalShow" id="addlect">
       <span class="closing" onclick="HideElement('addlect');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add New Lecturer</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php" enctype="multipart/form-data">
				<input type="text" name="fnam2" placeholder="fname" class="input">
				<input type="text" name="lnam2" placeholder="lname " class="input">
		 		<select class="input" name="cl7">
					<option>1</option>
					<option>2</option>
					
				</select>
				<select class="input" name="sect2">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
				</select>
				<select class="input" name="sexe2">
					<option>male</option>
					<option>female</option>
				</select>
				
				
				<input type="number" name="sal2" placeholder="salary : 2000" class="input">
				<input type="number" name="age2" placeholder="Age : 45" class="input">
				
				<input type="file" name="avatar2"  class="input">
				<input type="submit" name="lect2" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>