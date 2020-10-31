
<div class="modalShow" id="sortPay" style="display:block">
       <span class="closing" onclick="HideElement('sortPay');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Choise your data retrieval</p>
			
		</div>
		<div class="modal-body">
			<form method="POST" action="scripts/main.php" >
				<input type="text"  placeholder="Select How to get Payments" class="input" disabled="">
		 		<select class="input" name="selection">
					<option value="1">Sort By Date</option>
					<option value="2">Sort By Month</option>	
				</select>
				<input type="submit" name="choose" class="button" value="continue">
			</form>
		</div>
		<div>
			
		</div>
	</div>
</div>