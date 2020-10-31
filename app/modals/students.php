
<div class="modalShow" id="record">
       <span class="closing" onclick="HideElement('record');">&times;</span>
	<div class="modalShowBox" style="margin: 5% auto;width: 70%;">
		<div class="modal-header " id="clb" style="background-color: #007baa;">
			<p>List of Students</p>
		</div>
		<div class="modal-body">
			<div class="recent">
     						<div class="recent-text" style="background-color: transparent;">
     							<h4>Lastest inscriptions</h4>
     						</div>
     						<div class="recent-table">
     						<div style="height: 420px;overflow-y: scroll;">
                                   <div id="list">
     							<table class="table table-bordered table-hover">
     								<thead>
     									<tr>
     										<th>id</th>
     										<th>fname</th>
     										<th>lname</th>
     										<th>pseudo</th>
     										<th>Bday</th>
     										<th>sex</th>
     										<th>class</th>
     										<th>section</th>
     										<th>ldn</th>
     										<th>matricule</th>
                                                       <th>Option</th>
     									</tr>
     								</thead>
     								<tbody>
     									
                                             <?php foreach($info as $row):?>
     									<tr>
     										<td><?php echo $row['id'];?></td>
     										<td><?php echo $row['fname'];?></td>
     										<td><?php echo $row['lname'];?></td>
     										<td><?php echo $row['pseudo'];?></td>
     										<td><?php echo $row['bday'];?></td>
     										<td><?php echo $row['sex'];?></td>
     										<td><?php echo $row['class'];?></td>
     										<td><?php echo $row['section'];?></td>
     										<td><?php echo $row['ldn'];?></td>
     										<td><?php echo $row['matricule'];?></td>
                                                       <td><?php echo $row['option'];?></td>
     									</tr>
                                             <?php endforeach;?>
     								</tbody>
     							</table>
                                        </div>
                                </div>
     						</div>
     					</div>
		</div>
		<div>
			
		</div>
	</div>
</div>