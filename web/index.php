<?php
  
    require "./config/db.php";

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
            if($_GET['request'] === "login"){
                require "./login.php";
            }
        }


    ?>
    <section class="banner" id="banner">
        <div class="bannerContainer">
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
                                <h4>Eschool</h4>
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
                                <small>Designed & Maintened By <strong>MzeeBerce &COPY; <?php echo date("Y"); ?></strong></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- End Menu on responsive -->
            </header>

            <div class="bannerContent">
                <h1 style="font-size:40px">MzeeBerce Institute</h1>
                <h4>The best institution and the way of changing the world</h4>
                <!-- <form action="">
                    <input type="text" placeholder="Rechercher sur invest">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </form> -->
                <button class="border">
                    <a href="./registration.php#?register=false" style="color:#007baa">Registration</a></button>
                <button class="bg">Get started</button>
            </div>
            
        </div>
    </section>


    <!-- Main section -->
    <section class="main-section">

        <!--- section presentation -->
        <section class="presentation" id="about">
            <div class="pre-head">
                <h4>About</h4>
                <h1>OUR ORGANISATION</h1>
                <div class="pre-head-btborder"></div>
            </div>
            <div class="pre-content">
                <div class="text">
                    <h4>1. WHO WE ARE ?</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consequatur obcaecati iusto, explicabo sint porro praesentium, rerum sapiente necessitatibus deleniti aliquam quisquam ipsa at! Obcaecati expedita maxime illo unde impedit!
                    </p>
                </div>
                <div class="text">
                    <h4 >2. WHAT WE DO</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, assumenda iusto labore officia eum perspiciatis ipsum molestias ut fugit dignissimos cupiditate cumque cum repellat atque dolorem deleniti, quibusdam architecto sint!</p>
                </div>
                <div class="text">
                    <h4>3. WHERE WE ARE ?</h4>
                    <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non repellat dolorum tenetur voluptatem, corporis blanditiis eius optio expedita delectus, quasi veniam! Eos est illum repudiandae aperiam rem reprehenderit unde veniam?
                    </p>
                </div>
            </div>
        </section>
         <!--- /section presentation -->


          <!--- section counters -->
         <section class="counters" id="counterSection">
             <div class="countContainer">
                <div class="count">
                    <span class="fa fa-desktop"></span>
                    <h4 id="countDIV" data-target="3500">0</h4>
                    <p>Students</p>
                </div>
                <div class="count">
                    <span class="fa fa-briefcase"></span>
                    <h4 id="countDIV"  data-target="1500">0</h4>
                    <p>Graduated per year</p>
                </div>
                <div class="count">
                    <span class="fa fa-phone" style=" padding: 20px 25px;"></span>
                    <h4 id="countDIV" data-target="2000">0</h4>
                    <p>Contact par jour</p>
                </div>
            </div>
         </section>
          <!--- /section counters -->


        <!-- Section what we do -->
        <section class="whatwedo" id="services">
            <div class="whatwedocontent">
                <h1>Our services</h1>
                <div class="bottomDiv"></div>
                <div class="box" id="whatwedobox">
                <span class="fa fa-hands"></span>
                    <h4>“ Recouvrement des créances et factoring ”</h4>
                    <p>Il s’agit des services d’appui offert à plusieurs institutions financières, Banques, entreprises privées (hôpitaux, hôtels et autres opérateurs économiques) et entreprises et régies financières publiques dans le recouvrement des créances, impôts et taxes des clients et autres débiteurs. </p>
                </div>
                <div class="box" id="whatwedobox">
                <span class="fa fa-money"></span>
                    <h4>“ AUDIT ET EXPERTISE COMPTABLE  ”</h4>
                    <p>Le Groupe Invest Sarl est constituée par des Experts congolais ayant évolué au pays  la RD Congo, avec le souci de mettre en place un carrefour  des professionnels en études et conseils,  audits et Expertise comptable, Recouvrement des créances et affacturage .</p>
                </div>
                <div class="box" id="whatwedobox">
                <span class="fa fa-desktop"></span>
                    <h4>“ Nouvelle Technologie de l’Information et de Télécommunication ”</h4>
                    <p>Nous vous fournissons des logiciels de gestion. Vous êtes un Hôtel, un Hôpital,une IMF, une COOPEC nous vous fournissons un logiciel(intégré avec une comptabilité OHADA avec la production des tableaux de synthèse.) de gestion selon votre besoin   </p>
                </div>
                <div class="box" id="whatwedobox">
                <span class="fa fa-building bg-in"></span>
                    <h4>“  Notre Cabinet d’Avocats Associés vous offre une gamme de services dans toutes les matières relevant du droit du travail et du droit social. ”</h4>
                    <p>Nous vous accompagnons et prodiguons des avis dans le cadre de questions ou problématiques portant sur l’engagement de travailleurs et employés.</p>
                </div>
                <div class="footer">
                    <a href="" class="service-button">More Services</a>
                </div>
            </div>
        </section>
        <!-- End section what we do -->

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



        <!--- Case study section-->
        <section class="casestudy" id="blog">
            <div class="head">
                <h1>Blogs</h1>
                <p>ulla magnam. Dicta inventore fugit minima numquam facere animi culpa molestiae deserunt? Maiores.</p>
                <div class="bottomDiv"></div>
            </div>
            <!-- <div class="casebtn">
                <span class="fa fa-arrow-left"></span>
                <span class="fa fa-arrow-right"></span>
            </div> -->
            <div class="casestudyContent" >
                <div class="boxCaseStudy" >
                    <div class="image">
                        <img src="./src/apple.jpg" alt="">
                    </div>
                    <div class="body">
                        <div class="h4">
                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat labore optio quia beatae laborum eligendi. Labore non numquam praesentium veritatis quis, consequuntur tempora in commodi, modi velit itaque incidunt! Recusandae.</h4>
                        </div>
                        <p>conseil en produits de consommation</p>
                        <div id="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="boxCaseStudy">
                    <div class="image">
                        <img src="./src/white.png" alt="">
                    </div>
                    <div class="body">
                        <div class="h4">
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, iusto ea, eum eligendi temporibus veniam labore a hic quibusdam soluta, explicabo necessitatibus blanditiis adipisci praesentium corporis asperiores enim placeat dolore!</h4>
                        </div>
                        <p>conseil en produits de consommation</p>
                        <div id="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
               
                <div class="boxCaseStudy" >
                    <div class="image">
                        <img src="./src/books-business.jpg" alt="">
                    </div>
                    <div class="body">
                        <div class="h4">
                            <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia aspernatur, fugiat, veniam eaque error, quis veritatis nisi officiis blanditiis quod reprehenderit quidem saepe fuga neque? Facilis quo aliquid aspernatur culpa.</h4>
                        </div>
                        <p>conseil en produits de consommation</p>
                        <div id="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="casefooter" >
                <a href="" class="btnsucess-no-bg">view more publications</a>
            </div>
        </section>
         <!--- /Case study section-->

         <!-- Owner quote section-->
        <section class="ownerquote">
            <div class="content">
                <div class="middle">
                    <img src="./src/icons/quote.svg" alt="">
                    <h4>LE GROUPE INVEST CONSULTING EST VOTRE OUTILS DE CONVERSION PROFESSIONNELLE DES VOS ACTIFS EXIGIBLES EN ACTIFS LIQUIDES </h4>
                    <div class="manager">
                        <div class="image">
                            <img src="./src/dg.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Remy Bagalwa</h4>
                            <small>Businesss Owner</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- / owner quote-->



        <!-- section testimonial -->
        <section class="testomial">
            <div class="head">
                <h4>Testimonials</h4>
                <h1>Nos Clients disent</h1>
               <div class="bottomDiv"></div>
            </div>
            <span class="nextTesti fa fa-arrow-right"></span>
            <span class="prevTexti fa fa-arrow-left"></span>
            <div class="content testimonialcarousel">
              
                <div class="testomialBox">
                    <div class="image">
                        <img src="./src/dg.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ab .</p>
                        <h4>Kas gracias Tmb</h4>
                        <small>CEO / DG Fungo Inc.</small>
                    </div>
                </div>
                <div class="testomialBox">
                    <div class="image">
                        <img src="./src/dev.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ab .</p>
                        <h4>Remy Bagalwa</h4>
                        <small>CEO / DG Invest Sarl</small>
                    </div>
                </div>
                <div class="testomialBox">
                    <div class="image">
                        <img src="./src/dev.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ab .</p>
                        <h4>Arthur Kalala</h4>
                        <small>CEO / DG Boopy Inc.</small>
                    </div>
                </div>
                <div class="testomialBox">
                    <div class="image">
                        <img src="./src/dg.jpg" alt="">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ab.</p>
                        <h4>Olivier Kissa</h4>
                        <small>CEO Hysop Consulting.</small>
                    </div>
                </div>
            </div>
        </section>
        <!--- Section testimonial -->


        <!-- section Request a quote -->

        <section class="requestQuote">
            <div class="quoteBlock">
                <div class="message">
                    <h1>Vous obtenez toujours les meilleurs conseils</h1>
                </div>
                <a href="" class="quoteBtn">Request Registration</a>
            </div>
        </section>

        <!--- Expert team section-->
        <section class="expert" id="experts">
            <div class="head">
                <h1>Team Experts</h1>
                <div class="bottomDiv"></div>
            </div>
            <div class="expertContent">
               

             
                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/bg.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>

                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/bg.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>

                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/bg.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>

                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/dev.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>

                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/dg.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>
                <div class="expertCard" id="">
                    <div class="image">
                        <img src="./src/bg.jpg" alt="">
                    </div>
                    <div class="body">
                        <h4>Example Ksongo</h4>
                        <p>Designer</p>

                        <div class="expertLink">
                            <li><span class="fa fa-facebook bg-blue"></span></li>
                            <li><span class="fa fa-instagram bg-insta"></span></li>
                            <li><span class="fa fa-twitter bg-twiter"></span></li>
                            <li><span class="fa fa-linkedin"></span></li>
                        </div>
                    </div>
                </div>
             
            </div>

            <div class="expertFooter">
                <li class="prev"></li>
                <li></li>
                <li class="next"></li>
            </div>
        </section>
        <!-- Expert team end-->

        <!--- parteners  section -->
        <section class="parteners" id="parteners">
            <div class="head">
                <h4>NOS PARTENAIRES</h4>
                <h1>NOUS NOUS ÉLÉVONS EN ÉLEVANT LES AUTRES</h1>
                <div class="bottomDiv"></div>
            </div>
                <div class="partenersIconBlock">
                   
                        <div class="partener">
                            <img src="./src/plazza.png" alt="">
                        </div>
                        <div class="partener">
                            <img src="./src/icon_bbox.png" alt="">
                        </div>
                        <div class="partener">
                            <img src="./src/icon_goshop.png" alt="">
                        </div>
                        <div class="partener">
                            <img src="./src/ihusi.png" alt="">
                        </div>
                        <div class="partener">
                            <img src="./src/caritas.png" alt="">
                        </div>
                        <div class="partener">
                            <img src="./src/icon.png" alt="">
                        </div>
                   
                </div>
                <!-- <div class="partloader">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->
           
        </section>
        <!--- end parteners section -->

        <!-- Get a free quote-->
        <section class="whyourconsulting" id="freequote">
            <div class="content" id="nopadding">
                <h1>Contact Us</h1>
                <div class="bottomDiv" style="margin: 15px 0px;"></div>
                <div id="freequoteReporter"></div>
                <div style="margin-top: 30px;">
                    <form id="freequoteForm">
                        <label for="name">Nom</label>
                        <input type="text" >
                        <label for="email">Addresse électronique</label>
                        <input type="email" name="email" id="">
                        <label for="message">Message</label>
                        <textarea name="" id="" ></textarea>
                        <button type="submit" class="service-button" >send contact</button>
                    </form>
                </div>
               
            </div>
            <div class="img" id="freequoteBlock" style="background:transparent">
              <img src="./src/bg.jpg" alt="">
            </div>
               
           
        </section>
         <!-- End of Get a free quote-->
        

    </section>
    <!-- End of main section -->


    <!--- Top scroll --->
    <div class="toTopScroller" id="toTopScroller">
        <span class="fa fa-arrow-up"></span>
    </div>

    <!-- Include Footer -->
    <?php include("./includes/footer.php");?>

    <!-- import external javascript file-->
    <script src="./js/jquery-1.11.0.min.js"></script>
    <script src="./js/jquery-migrate-1.2.1.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>