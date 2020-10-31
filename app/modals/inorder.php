


<div class="modalShow" id="inorder" style="display: block;">
       <span class="closing" onclick="HideElement('inorder');">&times;</span>
     <div class="modalShowBox" style="margin: 5% auto;">
          <div class="modal-header " id="clb" style="background-color: #007baa;">
               <p> view students In order with School fees</p>
               
          </div>
          <div class="modal-body">
               <form method="POST" action="">
                   <select name="class" id=""  class="input">
                         <option >1</option>
                         <option >2</option>
                   </select>
                    <select class="input" name="sec">
                         <option>A</option>
                         <option>B</option>
                         <option>C</option>
                         <option>D</option>
                         <option>E</option>
                    </select>
                    <input type="text" name="paid" placeholder="amount" class="input" required>
                     <select class="input" name="tri">
                         <option value="1">Trimester One</option>
                         <option value="2">Trimester Two</option>
                         <option value="3">Trimester Tree</option>
                    </select>
                   
                   
                   <select class="input" name="cond">
                         <option>over</option>
                         <option>under</option>
                         <option>minimum</option>
                    </select>
                    
                   
                    <input type="submit" name="inorder" class="button" value="validate">
               </form>
          </div>
          <div>
               
          </div>
     </div>
</div>