<div  id="table_h">
<table class="table table-bordered table-hover" >
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
                                                       <TH>Option</TH>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                             <!-- display all inscriptions -->
                                             <?php foreach($classes as $row):?>
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
     <div class="modal-footer">
        <!-- <small>List of </small> -->
     </div>
</div>

<div  style="display:block;width:100%;padding:20px;border-top:1px solid #dee2e6 !important;">
        <a class="button text-white" onclick="printEl('table_h');">print list</a>
</div>
