
<div class="modalShow" id="humanity">
       <span class="closing" onclick="HideElement('humanity');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add New Student</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php">
				<input type="text" name="fname" placeholder="fname" class="input">
				<input type="text" name="lname" placeholder="lname " class="input">
				<input type="text" name="pseudo" placeholder="pseudo" class="input">
				<select class="input" name="sex">
					<option>male</option>
					<option>female</option>
				</select>
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
				<input type="text" name="bday" placeholder="Birth Day : 20-01-1989" class="input">
				<input type="text" name="ldn" placeholder="Birth City" class="input">
				
				<input type="text" name="academic" placeholder="School year :<?php echo $_SESSION['academic'];?>" class="input" disabled style="cursor: not-allowed;" value="<?php echo $_SESSION['academic'];?>">
				<input type="submit" name="humanity" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>