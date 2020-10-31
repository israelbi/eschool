<!-- Get corresponding values for the item to update -->
    <?php 
        if(isset($_GET['update'])){
            $data = $db->query("select * from payment where academic = '".$_SESSION['academic']."' and id='".$_GET['update']."'")->fetch();
            
        }
    ?>

           
<div class="modalShow" id="pay" style="display:block;">
        <span class="closing" onclick="HideElement('pay');">&times;</span>
        <div class="modalShowBox" style="margin: 5% auto;">
            <div class="modal-header " id="clb" style="background-color: #007baa;">
                <p>Update Student Payment</p>
            </div>
            <div class="modal-body">
                <form method="POST" action="scripts/main.php">
                        <input type="text" name="student" placeholder="student no:" class="input" value="<?php echo $data['student'];?>">
                        <input type="text" name="amount" placeholder="amount paid" class="input" value="<?php echo $data['amount'];?>">
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                      
                    
                        <input type="text" name="date" placeholder="date in format : day-month-year" class="input" value="<?php echo $data['date'];?>">
                    
                        <input type="submit" name="updatepay" class="button" value="validate">
                </form>
            </div>
            <div>   
            </div>
        </div>
</div>