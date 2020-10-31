<?php
  
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/assets.css">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <link rel="shortcut icon" href="./src/favicon.png" type="image/x-icon">
    <title>Eschool | Home</title>
</head>
<body>
    
    <?php 

       
        if(isset($_GET['request']) && !empty($_GET['request'])){
            if($_GET['request'] === "registration"){
                require "./includes/registration.php";
            }
        }
    ?>
    <section class="banner" id="banner" style="height:300px">
        <div class="bannerContainer" style="height:300px">
            <header>
             
                <nav class="navbar" style="background-color: transparent;" id="menuToBeDisplaid">
                    <div class="navBrand">
                        <h4> <span id="light">Eschool</span></h4>
                    </div>
                    <div class="navLinkBox">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#counterSection">Rate</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#experts">Team Experts</a></li>
                            <li><a href="#parteners">Parteners</a></li>
                            <li><a href="#freequote">Contact</a></li>
                            <li><a href="?request=login" class="login" id="login">login</a></li>

                           
                        </ul>
                    </div>
                </nav>

                <!--- Menu on Responsive -->
                <div class="menuOnResponsive">
                    <div class="brand">
                        <h1>Eschool</h1>
                    </div>
                    <div class="menubars" onclick="displayMenuFX()">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="listUL" id="AllContent">
                        <span class="fa fa-close " id="span" onclick="closerFx()"></span>
                        <div class="content slideToRight" id="listUL">
                            <div class="head">
                                <h4>Mzee</h4>
                            </div>
                            <div class="search">
                                <form action="" method="get">
                                    <input type="text" placeholder="Rechercher chez invest">
                                    <button><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <div class="listLink">
                                <li><a href="">Home</a></li>
                                <li><a href="./pages/about">About</a></li>
                                <li><a href="./pages/servives">Services</a></li>
                                <li><a href="">Partenariat</a></li>
                                <li><a href="./pages/case">Blog</a></li>
                                <li><a href="./pages/contact">Contact</a></li>
                            </div>
                            <div class="footer">
                                <!-- <h4>Copyright&copy; Groupe Invest Sarl 2020</h4> -->
                                <div class="separator"></div>
                                <small>Designed & Maintened By <strong>Kas Gracias Tmb &COPY; <?php echo date("Y"); ?></strong></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- End Menu on responsive -->
            </header>
            <div class="bannerContent"style="margin: 5% auto;width:auto;text-align:center;clear:both" >
                <h1 style="font-size:30px">Home / Registration</h1>
            </div>
        </div>
    </section>


    <!-- Main section -->
    <section class="main-section">

        <!-- section why to choose our consulting-->
        <section class="whyourconsulting">
            <div class="content">
                <h1>Why choose our institution ?</h1>
                <div class="bottomDiv" style="margin:20px 0px"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sapiente dolorum commodi  exercitationem vero doloribus facere.adipisicing elit.adipisicing elit. Eos sapiente dolorum commodi  exercitationem vero . Eos sapiente dolorum commodi  exercitationem vero </p>
                <div style="margin-top: 30px;">
                    <a href="" class="service-button" >About</a>
                </div>
               
            </div>
            <div class="img">
                <img src="./src/library.jpg" alt="eschool library">
            </div>
        </section>
        <!--- End of why cjoose our consulting section-->

        <!--- Registration --->
        <section class="registration" id="?register=false">
            <div class="head">
                <div class="title">
                    <h4>We offer registration fro c.o and hight cycle</h4>
                </div>
                <div class="buttons">
                   <button id="LowCycleBtn">Cycle d'Orientation</button>
                   <button>Humanité</button>
                </div>
            </div>

            <div class="content" id="ContentReg">
                 <div class="doc">
                        <h4>Form Registration for Hight Cycle</h4>
                        <div id="registrationReport"></div>
                        <form id="registrationHuman">
                        <input type="text"  placeholder="fname" class="input" id="fname" required>
                        <input type="text"  placeholder="lname " class="input" id="lname" required>
                        <input type="text"  placeholder="pseudo" class="input" id="pseudo" required>
                        <input type="email" name="" id="" class="input" placeholder="email">
                        <select class="input"  id="sex" required>
                            <option value=""> --- Please Select Your Gender ----</option>
                            <option>male</option>
                            <option>female</option>
                        </select>


                        <div class="select">
                            <select  name="class" style="margin-right:20px" id="degree" required>
                                <option></option>
                                <option value="3">3rd Degree</option>
                                <option value="4">4th Degree</option>
                                <option value="5">5th Degree</option>
                                <option value="6">6th Degree</option>
                            </select>
                            <label for="section">Please Select Class</label>
                        </div>
                      

                        <div class="select">
                            <label for="section">Select a section</label>
                            <select name="section" id="field" required>
                                <option >Computer Science</option>
                                <option>Pedagogy</option>
                                <option>Litterary</option>
                                <option>Social</option>
                                <option>Business</option>
                                <option>Accounting</option>
                                <option>Economy</option>
                            </select>
                        </div>
                     
                        <input type="date" name="bday"  class="input" id="bday">

                        <div class="select">
                            <input type="number" name="zipCode" placeholder="Zip Code" class="input" required>
                            <input type="text" name="street" placeholder="Street" class="input" style="margin:2px" required>
                            <input type="text" name="state" placeholder="State" class="input" required>
                        </div>
                       
                        <input type="text"  placeholder="City Of Bith" id="ldn" required class="input" required>
                        <input type="text" value="<?php echo date("Y");?>" placeholder="School year :<?php echo date("Y");?>" class="input" disabled id="academic">                       
                            <select name="section" id="country" class="input" required>
                                <option value="">----  Please Select Country -----</option>
                            </select>
                        <input type="submit" name="humanity" class="button" value="validate" required>
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
            </div>
        </section>
        <!--- End Registration -->

    </section>
    <!-- End of main section -->


    <!--- Top scroll --->
    <div class="toTopScroller" id="toTopScroller">
        <span class="fa fa-arrow-up"></span>
    </div>

    <!-- Include Footer -->
    <?php include("./includes/footer.php");?>
    <script src="./js/main.js"></script>
</body>
</html>