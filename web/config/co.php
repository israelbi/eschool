<div class="doc">
                        <h4>Form Registration for Low Cycle</h4>
                        <div id="registrationReport2"></div>
                        <form id="registrationCo">
                        <input type="text"  placeholder="fname" class="input" id="fname2">
                        <input type="text"  placeholder="lname " class="input" id="lname2">
                        <input type="text"  placeholder="pseudo" class="input" id="pseudo2">
                        <select class="input" id="sex2" required>
                            <option value=""> --- Please Select Your Gender ----</option>
                            <option>male</option>
                            <option>female</option>
                        </select>


                        <div class="select">
                            <select   id="degree2" required>
                                <option value="">--- Please Select Class ---</option>
                                <option value="1">7Th Degree</option>
                                <option value="2">8Th Degree</option>
                            </select>
                        </div>
                      

                        <div class="select">
                          
                            <select  id="field2" required>
                                <option value=""> --- Select Division ---</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                            </select>
                        </div>
                     
                        <input type="date"  placeholder="Birth Day : 20-01-1989" class="input" id="bday2">

                        <div class="select">
                            <input type="number"  placeholder="Zip Code" class="input">
                            <input type="text"  placeholder="Street" class="input" style="margin:2px">
                            <input type="text"  placeholder="State" class="input">
                        </div>
                       
                        <input type="text"  placeholder="City Of Bith" id="ldn2" required class="input">
                        <input type="text" value="<?php echo date("Y");?>" placeholder="School year :<?php echo date("Y");?>" class="input" disabled id="academic2">                       
                            <select name="section" id="country" class="input" required>
                                <option value="">----  Please Select Country -----</option>
                            </select>
                        <input type="submit" name="humanity" class="button" value="validate">
                    </form>
                </div>

                <div class="doc" id="docRight">
                    <div class="header">
                        <h4>Eschool Features</h4>
                    </div>
                    <div class="features">
                        <div class="feature">
                            <div class="image">
                                <img src="./src/bible.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Spiritual </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam asperiores veniam fugit nisi praesentium deleniti, rem adipisci tenetur, excepturi, necessitatibus modi doloremque commodi accusantium quisquam ab voluptatum! Totam, laudantium!</p>
                            </div>
                        </div>
                    </div>
                    <div class="features">
                        <div class="feature">
                            <div class="image">
                                <img src="./src/book.png" alt="">
                            </div>
                            <div class="text">
                                <h4>Good Eduction</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit aliquam nisi neque laboriosam! Dolorum neque numquam veniam officia eveniet odit, asperiores, non quaerat error ut, quia alias sint. Aspernatur, magnam?</p>
                            </div>
                        </div>
                    </div>
                </div>