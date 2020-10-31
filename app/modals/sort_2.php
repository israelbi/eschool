
<div class="modalShow" id="sortDate" style="display:block">
       <span class="closing" onclick="HideElement('sortDate');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Choise your data retrieval</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php" >
				<input type="text"  placeholder="Select  Payments By Month" class="input" disabled="">
                 <input type="number"  placeholder="Month" class="input col-lg-5" style="margin-right:30px;" name="month">
				 <input type="hidden" name="act" value="<?php echo $_GET['act']?>">
                 <input type="number"  placeholder="Year" class="input col-lg-6" name="year">
				<input type="submit" name="choose_2" class="button" value="find payments">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>