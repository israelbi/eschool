
<div class="modalShow" id="pay">
       <span class="closing" onclick="HideElement('pay');">&times;</span>
     <div class="modalShowBox" style="margin: 5% auto;">
          <div class="modal-header " id="clb" style="background-color: #007baa;">
               <p> New Student Payment</p>
               
          </div>
          <div class="modal-body">
               <form method="POST" action="scripts/main.php">
                    <input type="text" name="student" placeholder="student no:" class="input">
                    <input type="text" name="amount" placeholder="amount paid" class="input">
                    
                    <select class="input" name="trimester">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                    </select>
                    <select class="input" name="purpose">
                         <option>Tuition</option>
                         <option>Registration</option>
                         <option>Retake</option>
                         <option>Special Exam(s)</option>
                         <option>Syllabus</option>
                         <option>Other</option>
                    </select>
                   
                    <input type="text" name="date" placeholder="date in format : day-month-year" class="input">
                    
                    <input type="submit" name="pay" class="button" value="validate">
               </form>
          </div>
          <div>
               
          </div>
     </div>
</div>