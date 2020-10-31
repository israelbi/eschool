<?php 
    $stdInfos = $db->query("select * from students where matricule = '".$_GET['student']."' and status = 'active'")->fetchAll();
    $allTri = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active'")->fetch();

    $tr1 = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active' and trimster ='1'")->fetch();
    $tr2 = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active' and trimster ='2'")->fetch();
    $tr3 = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active' and trimster ='3'")->fetch();

    $reg = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active' and purpose ='Registration'")->fetch();
    $syllabus = $db->query("select sum(amount) from payment where student = '".$_GET['student']."' and status = 'active' and purpose ='Syllabus'")->fetch();


 ?>
 
<div class="modalShow" id="studentInfo" style="display:block;">
    
<span class="closing" onclick="HideElement('studentInfo');">&times;</span>
<div class="modalShowBox" style="margin: 5% auto;width:60%">
     <div class="modal-header " id="clb" style="background-color: #007baa;">
          <p>Student Information</p>
     </div>
     <?php foreach($stdInfos as $stdInfo):?>
     <div class="modal-body  studData" style="background:#efefef;">
         <div class="profileStudent">
            <div class="header">
                <div class="image">
                    <p><?php echo strtoupper(substr($stdInfo['fname'],0,1));?></p>
                </div>
                <div class="info">
                    <p><?php echo $stdInfo['fname'];?> <?php echo $stdInfo['lname'];?> <?php echo $stdInfo['pseudo'];?></p>
                </div>
            </div>
            <div class="content">
            <div class="tr">
                    <td>Identification </td>
                    <td>#<?php echo $stdInfo['id'];?></td>
                </div>
                <div class="tr">
                    <td>Class /</td>
                    <td><?php echo $stdInfo['class'];?></td>
                </div>
                <div class="tr">
                    <td>Section /</td>
                    <td><?php echo $stdInfo['section'];?></td>
                </div>
                <div class="tr">
                    <td>Option /</td>
                    <td><?php echo $stdInfo['option'];?></td>
                </div>
                <div class="tr">
                    <td>City Of Birth /</td>
                    <td><?php echo $stdInfo['ldn'];?></td>
                </div>
                <div class="tr">
                    <td>Gender /</td>
                    <td><?php echo $stdInfo['sex'];?></td>
                </div>
                <div class="tr">
                    <td>Roll Number /</td>
                    <td><?php echo $stdInfo['matricule'];?></td>
                </div>
            </div>
         </div>
         <div class="profilePaymemt">
            <div class="info">
                <details>
                    <summary>
                    Total School fees Paid $ <?php echo $allTri[0];?>
                    </summary>
                    <li>Trimeter One : $ <?php echo $tr1[0];?></li>
                    <li>Trimeter Two : $ <?php echo $tr2[0];?></li>
                    <li>Trimeter Tree : $ <?php echo $tr3[0];?></li>
               </details>
            </div>
            <div class="info">
                <details>
                    <summary>
                   Registration $ <?php echo $reg[0];?>
                    </summary>
               </details>
            </div><div class="info">
                <details>
                    <summary>
                   Syllabus $ <?php echo $syllabus[0];?>
                    </summary>
               </details>
            </div>
        </div>
     </div>
     <div>
     </div>
     <?php endforeach;?>
</div>

</div>



