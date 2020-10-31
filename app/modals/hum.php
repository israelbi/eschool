


<div class="modalShow" id="hum" style="display: block;">
       <span class="closing" onclick="HideElement('hum');">&times;</span>
     <div class="modalShowBox" style="margin: 5% auto;">
          <div class="modal-header " id="clb" style="background-color: #007baa;">
               <p> view students In order with School fees</p>
               
          </div>
          <div class="modal-body">
               <form method="POST" action="">
                    <select name="class2" id="" class="input">
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                    </select>
                    <input type="text" name="paid2" placeholder="amount" class="input" required>
                     <select class="input" name="tri2">
                         <option value="" disabled selected>-- Select Trimester ---</option>
                         <option value="1">Trimester One</option>
                         <option value="2">Trimester Two</option>
                         <option value="3">Trimester Tree</option>
                    </select>
                    <select class="input" name="sec2" required>
                    <option value="" disabled selected>-- Select Section ---</option>
                         <option>Computer Science</option>
                         <option>Pedagogy</option>
                         <option>Litterary</option>
                         <option>Social</option>
                         <option>Business</option>
                         <option>Accounting</option>
                         <option>Economy</option>
                    </select>
                   
                   <select class="input" name="cond2" required>
                        <option value="" disabled selected>-- Select Range ---</option>
                         <option>over</option>
                         <option>under</option>
                         <option>minimum</option>
                    </select>
                    
                   
                    <input type="submit" name="inorder2" class="button" value="validate">
               </form>
          </div>
          <div>
               
          </div>
     </div>
</div>