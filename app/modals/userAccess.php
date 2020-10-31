
<div class="modalShow" id="sortDate" style="display:block">
       <span class="closing" onclick="HideElement('sortDate');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Configure User  Accesses</p>
		</div>
		<div class="modal-body">
            <form method="POST" class=" p-4 border" id="accessForm" action="">
                <div class="row ">
                    <div class="col-lg-6">
                       
                        <input type="radio"  name="access" value="payment">
                        <label>Payment Control</label>
                    </div>
                    <div class="col-lg-6 border">
                    <div class="col-lg-12 mt-2">
                            <input type="checkbox"  checked disabled>
                            <label for="">Register payment</label>
                        </div>
                        <div class="col-lg-12 ">
                            <input type="checkbox"  checked disabled>
                            <label for="">Can validate payment</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <input type="radio"  name="access" value="registration">
                        <label>Student Registration</label>
                    </div>
                    <div class="col-lg-6 border p-2">
                        <div class="col-lg-12">
                            <input type="checkbox"  checked disabled>
                            <label for="">Can register</label>
                        </div>
                        <div class="col-lg-12">
                            <input type="checkbox"  checked disabled>
                            <label for="">Validate Registration</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <input type="radio"  name="access" value="settings">
                        <label>Eschool Settings</label>
                    </div>
                    <div class="col-lg-6 border p-2">
                        <div class="col-lg-12">
                            <input type="checkbox"  checked disabled>
                            <label for="">System administrator</label>
                        </div>
                        <div class="col-lg-12">
                            <input type="checkbox"  checked disabled>
                            <label for="">Lecturer</label>
                        </div>
                        <div class="col-lg-12">
                            <input type="checkbox"  checked disabled>
                            <label for="">Guest</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 text-right" style="padding:0">
                        <div class="col-lg-12" style="padding:0">
                            <input type="submit" name="sendFormAccess" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </div>
			</form>
		</div>
	</div>
</div>