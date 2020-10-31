
<div class="modalShow" id="delete_lecturer" style="display:block;">
       <span class="closing" onclick="HideElement('delete_lecturer');">&times;</span>
	<div class="modalShowBox">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Want to delete ?</p>
			
		</div>
            <div class="modal-body">
                <div class="text-center" style="width:50%;margin:auto;padding:20px;">
                    <a href="lecturer.php" class="link btn btn btn-success btn-sm">No</a>
                    <a href="lecturer.php?remove=true&&user=<?php echo $_GET['user'];?>" class="link btn btn btn-danger btn-sm">continue</a>
                </div>
            </div>
		<div>
		</div>
	</div>
</div>