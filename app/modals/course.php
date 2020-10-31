
<div class="modalShow" id="course">
       <span class="closing" onclick="HideElement('course');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add Course</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php" enctype="multipart/form-data">
				<input type="text" name="name" placeholder="course name" class="input">
				<input type="number" name="hours" placeholder="Number of Hours " class="input">
				<input type="number" name="lecturer" placeholder="Lecturer ID" class="input">
                <SElect class="input" name="type">
                <option>humanity</option>
                <option>c.o</option>
                </SElect>
				
				<input type="submit" name="addCourse" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>