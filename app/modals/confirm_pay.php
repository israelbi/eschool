<div class="modalShow" id="confirm" style="display:block">
       <span class="closing" onclick="HideElement('confirm');">&times;</span>
	<div class="modalShowBox">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Confirm Student Payment</p>
		</div>
            <div class="modal-body">
                <form method="POST" action="">
                    <label for="studID">Student Payment Identification</label>
                    <input type="text" name="pid" value="<?php echo $_GET['pid'];?>" class="input" >
                    <input type="submit" name="validatePAY" class="button" value="validate Registration">
                </form>
            </div>
		<div>
		</div>
	</div>
</div>