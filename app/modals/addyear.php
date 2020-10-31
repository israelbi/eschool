
<div class="modalShow" id="year">
       <span class="closing" onclick="HideElement('year');">&times;</span>
	<div class="modalShowBox">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Add new year</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="./scripts/main.php">
				<input type="text" name="year" placeholder="example : 2010-2011" class="input">
				<input type="submit" name="addyear" class="button" value="validate">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>