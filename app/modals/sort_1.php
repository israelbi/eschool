
<div class="modalShow" id="sortDate" style="display:block">
       <span class="closing" onclick="HideElement('sortDate');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Choise your data retrieval</p>
			
		</div>
		<div class="modal-body">
            <form method="POST" action="scripts/main.php" id="form_1">
			<?php if(isset($_GET['error'])):?>
            	<div class="alert alert-danger" id="errors"><?php echo $_GET['error']; ?> !</div>
			<?php endif;?>
				<input type="text"  placeholder="Select  Payments By Date" class="input" disabled="" >
				<input type="hidden" name="act" value="<?php echo $_GET['act'];?>">
                 <input type="number"  placeholder="Day" class="input col-lg-3" name="day">
                 <input type="number"  placeholder="Month" class="input col-lg-4" style="margin:0 15px;" name="month">
                 <input type="number"  placeholder="Year" class="input col-lg-4" name="year">
				<input type="submit" name="choose_1" class="button" value="find payments">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>