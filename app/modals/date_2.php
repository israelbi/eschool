
<div class="modalShow" id="sortDate" style="display:block;">
       <span class="closing" onclick="HideElement('sortDate');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;width:60%;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>Sorting Report</p>
			
		</div>
            <div class="modal-body">
            <div style="	height: 300px;overflow-y:scroll" id="list_paid_2">
            <div  style="width:100%;">
               <div class="modal-header"style="width:100%;">
                    <h2>School : Institut Berce</h2>
               </div>
               <div style="padding:10px 0px;">
                    <h5 style="display:block;">Payment Of date <?php echo $_GET['month'];?>/<?php echo $_GET['year'];?></h5>
                    <h6>Academic Year :<?php echo $_SESSION['academic'];?></h6>
               </div>
               
             
              
            </div>
            <table class="table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>student</th>
                            <th>amount</th>
                            <th>Trimester</th>
                            <th>Date</th>
                             <!-- <th>Options</th> -->
                        </tr>
                    </thead>
                <tbody>
                     <?php foreach($views as $row):?>
                              <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['student'];?></td>
                                    <td><?php echo $row['amount'];?></td>
                                    <td><?php echo $row['trimster'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <!-- <td>
                                        <a href="payment.php?action=delete" class="button text-white bg-danger" style="border:none;"><span class="fa fa-remove"></span></a>
                                        <a href="payment.php?action=remove" class="button text-white">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="payment.php?action=remove" class="button text-white" style="margin-left: 10px;margin-right: -55px;">
                                            <span class="fa fa-print"></span>
                                        </a>
                                    </td> -->
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                    <div>
                        <p> Done by Kas gracias Tmb , the secretor</p>
                    </div>
            </div>
           <div class="modal-footer">
                <a  class="button text-white col-lg-3" onclick="printEl('list_paid_2')">
                    <span class="fa fa-print"></span> Print List
                </a>
           </div>
            </div>
		<div>
		</div>
	</div>
</div>