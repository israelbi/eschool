<div class="modalShow" id="confirm" style="display:block">
       <span class="closing" onclick="HideElement('confirm');">&times;</span>
	<div class="modalShowBox">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Confirm Student Registration</p>
		</div>
            <div class="modal-body">
                <form method="POST">
                    <label for="studID">Student RollNumber</label>
                    <input type="text" name="studId" value="<?php echo $_GET['student'];?>" class="input" >
                    <input type="submit" name="validateSTUD" class="button" value="validate Registration">
                </form>
            </div>
		<div>
		</div>
	</div>
</div>