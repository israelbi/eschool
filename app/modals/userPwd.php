
<div class="modalShow" id="userpwd" style="display:block">
       <span class="closing" onclick="HideElement('userpwd');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Configure User  Password</p>
		</div>
		<div class="modal-body">
            <form method="POST" class="" id="accessForm" action="">
                <?php if(isset($_GET['e'])):?>
                    <span style="padding:4px 6px;background:#ce9d8ab6;display: block;margin-bottom: 5px">
                        <?php echo $_GET['e'];?>
                    </span>
                <?php endif;?>
                <input type="password" name="newpassword" placeholder="new password" class="input" required>
                <input type="password" name="retypepassword" placeholder="retype password" class="input" required>
                <input type="hidden" name="userid" value="<?php if(isset($_GET['uid'])){ echo $_GET['uid'];}?>">
                <input type="submit" name="sendPassword" class="btn btn-sm btn-primary">
			</form>
		</div>
	</div>
</div>