


<div class="modalShow" id="inorders" style="display: block;">
       <span class="closing" onclick="HideElement('inorders');">&times;</span>
     <div class="modalShowBox" style="margin: 5% auto;width: 50%;">
          <div class="modal-header " id="clb" style="background-color: #007baa;">
               <p>  Students In order with School fees</p>
               
          </div>
          <div class="modal-body">
                       <div class="payment-table" id="liststudent">
                                 <table class="table table-bordered table-hover">
                                             <thead>
                                                  <tr>
                                                       <th>id</th>
                                                       <th>Roll N</th>
                                                       <th>fname</th>
                                                       <th>lname</th>
                                                       <th>pseudo</th>
                                                       <th>Authorization</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  
                                             <?php foreach($newpaid as $row):?>
                                                  <tr>
                                                       <td><?php echo $row['id'];?></td>
                                                       <td><?php echo $row['student'];?></td>
                                                       <td><?php echo $row['fname'];?></td>
                                                      <td><?php echo $row['lname'];?></td>
                                                      <td><?php echo $row['pseudo'];?></td>
                                                      <td>Authorized</td>
                                                  </tr>
                                             <?php endforeach;?>
                                             </tbody>
                                        </table>
                            </div>
                    <div class="form-registration" style="width: 100%;">
                              
                              <a onclick="printEl('liststudent');" class="button text-white">print list</a>
                              
                         </div>
          </div>
          <div>
               
          </div>
     </div>
</div>