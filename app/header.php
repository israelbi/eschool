<div class="bar-menu">
     		<div class="bar-menu-one">
     			<div class="brand">
     				<h1><span class="brand-color">Institut</span> Berce</h1>
     			</div>
     			<div class="menu-options">
     				<ul>
     					<li><span class="fa fa-user  icon"></span></li>
     					<li><span class="fa fa-bell icon"></span></li>
     					<li><span class="fa fa-envelope icon"></span></li>
     					<li >
     						<span class="fa fa-cog icon" onclick="displayElement('cog');"></span>
     						<div class="cog" id="cog" style="height:auto;width:20%">
     							<div class="closer">
     								<span class="fa fa-close" onclick="HideElement('cog');"></span>
     							</div>
     							<div class="cog-body" >
     								<div class="modal-header">
     									<p style="margin-top: 5px;">Settings</p>
     								</div>
     								<div id="cog-body">
     									<ul id="link">
     										<li onclick="displayElement('year');"><a class="fa fa-plus icon"></a><a>Add School Year</a></li>
     										<li><a class="fa fa-plus icon"></a><a>change School Year</a></li>
     									</ul>
     								</div>
     							</div>
     						</div>
     					</li>
     					<li><a href="scripts/logout.php"><span class="fa fa-external-link icon"></span></a></li>
     					<li>
     						<form>
     							<input type="" name="" id="seachInput">
     							<button><span class="fa fa-search"></span></button>
							 </form>
							 <div class="cog" id="resultSearch" style="width:100%;height:auto">
     							<div class="closer">
     								<span class="fa fa-close" onclick="HideElement('resultSearch');"></span>
     							</div>
     							<div class="cog-body">
     								<div class="modal-header">
     									<p style="margin-top: 5px;">Search Result</p>
     								</div>
     								<div class="cog-body" id="seResultData">
     									<ul id="link">
     										<!-- <li><a class="fa fa-user icon"></a><a>Update profil</a></li> -->
     									</ul>
     								</div>
     							</div>
     						</div>
     					</li>
     				</ul>
     			</div>
     		</div>

     		<div class="menu-links">
     				<ul>
						 <li class="fa fa-dashboard"><a href="index.php">Dashboard</a></li>
						 <?php 
						 if($_SESSION['isAllowed'] === "registration"){?>
							 <li class="fa fa-plus"><a href="inscription.php">Student registration</a></li>
							 <li><a href="students.php">Students</a></li>
							 <li class="fa fa-plus"><a href="lecturer.php">Lecturer registration</a></li>
						 <?php }else if($_SESSION['isAllowed'] === "payment"){?>
							<li class="fa fa-document"><a href="payment.php">Payments</a></li>
							<li><a href="students.php">Students</a></li>
							<li><a href="./draft.php">Draft payments</a></li>
						 <?php }else{ ?>
							<li class="fa fa-plus"><a href="inscription.php">Student registration</a></li>
							<li><a href="students.php">Students</a></li>
							<li class="fa fa-plus"><a href="lecturer.php">Lecturer registration</a></li>
							<li class="fa fa-document"><a href="payment.php">Payments</a></li>
							<li><a href="./draft.php">Draft payments</a></li>
							<li><a href="./admin.php">Administration</a></li>
						 <?php }?>
     					
     					
     				</ul>
			</div>
			<!--  menubars button-->
			<div class="menu-bars" onclick="displayElement('toggle')">
				<div></div>
				<div></div>
				<div></div>
			</div>

			<!--- lefttoggle menu-->
			<div class="toggle" id='toggle'>
				<div class="toggle-menu">
					<div class="toggle-header">
						<span class="closer" onclick="HideElement('toggle')">x</span>
						<h4>Eschool</h4>
					</div>
					<div class="toggle-li">
							<li class="fa fa-dashboard"><a href="index.php">Dashboard</a></li>
							<?php 
							if($_SESSION['isAllowed'] === "registration"){?>
								<li class="fa fa-plus"><a href="inscription.php">Student registration</a></li>
								<li><a href="students.php">Students</a></li>
								<li class="fa fa-plus"><a href="lecturer.php">Lecturer registration</a></li>
							<?php }else if($_SESSION['isAllowed'] === "payment"){?>
							   <li class="fa fa-document"><a href="payment.php">Payments</a></li>
							   <li><a href="students.php">Students</a></li>
							   <li><a href="./draft.php">Draft payments</a></li>
							<?php }else{ ?>
							   <li class="fa fa-plus"><a href="inscription.php">Student registration</a></li>
							   <li><a href="students.php">Students</a></li>
							   <li class="fa fa-plus"><a href="lecturer.php">Lecturer registration</a></li>
							   <li class="fa fa-document"><a href="payment.php">Payments</a></li>
							   <li><a href="./draft.php">Draft payments</a></li>
							   <li><a href="./admin.php">Administration</a></li>
							   <li><a href="./scripts/logout.php">logout</a></li>
							<?php }?>
					</div>
				</div>
				
			</div>

        </div>
        <?php 

               require 'modals/addyear.php';
               require 'scripts/tools.php';    
        ?>