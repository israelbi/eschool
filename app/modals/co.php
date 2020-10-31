
<div class="modalShow" id="co">
       <span class="closing" onclick="HideElement('co');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add New Student</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php">
				<input type="text" name="fname-co" placeholder="fname" class="input">
				<input type="text" name="lname-co" placeholder="lname " class="input">
				<input type="text" name="pseudo-co" placeholder="pseudo" class="input">
				<select class="input" name="sex-co">
					<option>male</option>
					<option>female</option>
				</select>
				<select class="input" name="class-co">
					<option>1</option>
					<option>2</option>
				</select>
				<select class="input" name ="section-co">
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				</select>
				<input type="text" name="bday-co" placeholder="Birth Day : 20-01-1989" class="input">
				<input type="text" name="ldn-co" placeholder="Birth City" class="input">
				
				<input type="text" name="year" value="<?php echo $_SESSION['academic'];?>" placeholder="School year :echo $_SESSION['academic'];" class="input" disabled style="cursor: not-allowed;">
				<input type="submit" name="co" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>