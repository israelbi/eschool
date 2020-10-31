<?php
	   session_start();
		require 'db.php';
        require 'func.php';
		//add new school year
		if(isset($_POST['addyear']))
		{
			addyear($_POST['year']);
			header('location:../index.php?action=okay');
		}

		//add new student
		if(isset($_POST['co']))
		{
			if(empty($_POST['fname-co']) || empty($_POST['lname-co']) || empty($_POST['pseudo-co']) || empty($_POST['bday-co']) || empty($_POST['ldn-co']))
			{
				header('location:../inscription.php?action=empty');
			}
			else
			{
				$post = array('fn'=>protectData($_POST['fname-co']),
					          'ln'=>protectData($_POST['lname-co']),
					          'ps'=>protectData($_POST['pseudo-co']),
					          'bday'=>protectData($_POST['bday-co']),
					          'ldn'=>protectData($_POST['ldn-co']),
					          'class'=>protectData($_POST['class-co']),
					          'section'=>protectData($_POST['section-co']), 
					          'sex'=>protectData($_POST['sex-co']),
					          'rollnumber' =>rollnumber(),
					          'academic'=>$_SESSION['academic'],
					          'option'=>'C.O'
					);
				$query = "INSERT INTO students (fname,lname,pseudo,bday,sex,class,section,ldn,matricule,academic,option) VALUES ('".$post['fn']."','".$post['ln']."','".$post['ps']."','".$post['bday']."','".$post['sex']."','".$post['class']."','".$post['section']."','".$post['ldn']."','".$post['rollnumber']."','".$post['academic']."','".$post['option']."','draft')";
				addindb($query);
				header('location:../inscription.php?action=okay');
			}
		}elseif(isset($_POST['humanity']))
		{
			if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['pseudo']) || empty($_POST['bday']) || empty($_POST['ldn']))
			{
				header('location:../inscription.php?action=empty');
			}
			else
			{
				$post = array('fn'=>protectData($_POST['fname']),
					          'ln'=>protectData($_POST['lname']),
					          'ps'=>protectData($_POST['pseudo']),
					          'bday'=>protectData($_POST['bday']),
					          'ldn'=>protectData($_POST['ldn']),
					          'class'=>protectData($_POST['class']),
					          'section'=>protectData($_POST['section']), 
					          'sex'=>protectData($_POST['sex']),
					          'rollnumber' =>rollnumber(),
					          'academic'=>$_SESSION['academic'],
					          'option'=>'humanity'
					);
				$query = "INSERT INTO students (fname,lname,pseudo,bday,sex,class,section,ldn,matricule,academic,option,status) VALUES ('".$post['fn']."','".$post['ln']."','".$post['ps']."','".$post['bday']."','".$post['sex']."','".$post['class']."','".$post['section']."','".$post['ldn']."','".$post['rollnumber']."','".$post['academic']."','".$post['option'].",'draft')";
				addindb($query);
				header('location:../inscription.php?action=okay');
			}
		}
       
       //record a new payment
		if(isset($_POST['pay']))
		{
			if(empty($_POST['student']) and empty($_POST['amount']) and empty($_POST['date']))
			{
				header('location:../payment.php?action=empty');
			}else{
				$posts = array('student'=>protectData($_POST['student']),
					           'amount '=>protectData($_POST['amount']),
							   'date'=>protectData($_POST['date']),
							   'purpose'=>protectData($_POST['purpose']),
					           'trims'=>protectData($_POST['trimester']));
				$query = " INSERT INTO payment(student,trimster,amount,date,academic,status,purpose) 
				 		   VALUES ('".$posts['student']."','".$posts['trims']."','".$_POST['amount']."','".$posts['date']."','".$_SESSION['academic']."','draft','".$posts['purpose']."')";
				addindb($query);
				header('location:../payment.php?action=okay');
			}
		}

		if(isset($_POST['field']))
		{
			header('location:../payment.php?section='.$_POST['section']);
		}
		if(isset($_POST['field2']))
		{
			header('location:../lecturer.php?section='.$_POST['section2']);
		}


		if(isset($_POST['lect2']))
		{
			if(!empty($_POST['fnam2']) && !empty($_POST['lnam2']) && !empty($_POST['sal2']) && !empty($_POST['age2']))
			{
				if( $_FILES['avatar2'] != '')
				{
					$dir = 'avatar/';
					$file = $dir.basename($_FILES['avatar2']['name']);
					$ln = $_POST['lnam2'];
					$fn = $_POST['fnam2'];
					$sal = $_POST['sal2'];
					$age = $_POST['age2'];
					$sec = $_POST['sect2'];
					$sex = $_POST['sexe2'];
					$no = rollnumber();
					$cl7 = $_POST['cl7'];

					if(move_uploaded_file($_FILES['avatar2']['tmp_name'], $file))
					{
						$querys = "insert into lecturers(no,fname,lname,class,section,salaire,age,sex,avatar) values ('".					$no."','".$fn."','".$ln."','".$cl7."','".$sec."','".$sal."','".$age."','".$sex."','".$file."')";
						addindb($querys);
						header('location:../lecturer.php?action=okay');
					}else{header('location:../lecturer.php?action=up');}
				}else{header('location:../lecturer.php?action=file');}
			}else{header('location:../lecturer.php?action=empty');}
		}


		if(isset($_POST['prof']))
		{
			if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['salary']) && !empty($_POST['age']))
			{
				if( $_FILES['avatar'] != '')
				{
					$dir = 'avatar/';
					$file = $dir.basename($_FILES['avatar']['name']);
					$ln = $_POST['lname'];
					$fn = $_POST['fname'];
					$sal = $_POST['salary'];
					$age = $_POST['age'];
					$sec = $_POST['section'];
					$sex = $_POST['sex'];
					$no = rollnumber();
					$cl7 = $_POST['class'];

					if(move_uploaded_file($_FILES['avatar']['tmp_name'], $file))
					{
						$querys = "insert into lecturers(no,fname,lname,class,section,salaire,age,sex,avatar) values ('".					$no."','".$fn."','".$ln."','".$cl7."','".$sec."','".$sal."','".$age."','".$sex."','".$file."')";
						addindb($querys);
						header('location:../lecturer.php?action=okay');
					}else{header('location:../lecturer.php?action=up');}
				}else{header('location:../lecturer.php?action=file');}
			}else{header('location:../lecturer.php?action=empty');}
		}
		

		//add new course
		if(isset($_POST['addCourse'])){
			if(!empty($_POST['name']) && !empty($_POST['hours']) && !empty($_POST['lecturer'])){
				if($db->query("insert into course(name,hours,lecturer,type) values ('".trim($_POST['name'])."','".trim($_POST['hours'])."','".trim($_POST['lecturer'])."','".trim($_POST['type'])."')")){
					header("location:../course.php?act=saved");
				}
			}
		}

		//action to perform whith payment data selection
		//page:payment.php?act=sort_by
		if(isset($_POST['choose'])){
			$selection = $_POST['selection'];

			if($selection == 1){
				//redict to same page using new url of selected = `Sort By Date`
				header("location:../payment.php?act=".$selection);
			}else{
				if($selection == 2){
					//redict to same page using new url of selected = `Sort By Month`
					header("location:../payment.php?act=".$selection);
				}else{
					//redict to selection
					header("location:../payment.php?act=sort_by");
				}
			}
			
		}

		//get payments by date
		if(isset($_POST['choose_1'])){
			if(empty($_POST['date']) && empty($_POST['year']) && empty($_POST['month'])){
				$act = $_POST['act'];
				$date = strtotime(date("Y-m-d"));
				header("location:../payment.php?act=".$act."&error=All Fields are Required !");
			}else{
				$date = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
				header("location:../payment.php?search_date=".$date);
			
			}
		}

		//get payments by month
		if(isset($_POST['choose_2'])){
			if($_POST['year'] != "" || $_POST['month'] != ""){
				$Month = $_POST['month'];
				$Year= $_POST['year'];
				     header("location:../payment.php?search_&year=".$Year."&&month=".$Month);
			}else{
				$act = $_POST['act'];
				header("location:../payment.php?act=".$act);
			}
		}

		//Edit payment
		if(isset($_POST['check_pwd'])){
			$id = $_POST['id'];
			if(!empty($_POST['pwd'])){
				$pwd = htmlspecialchars($_POST['pwd']);
				$get_idties = $db->query("select * from staff where username = '".$_SESSION['user']."' and password = '".$pwd."'")->rowCount();
					if($get_idties > 0){
						//redirect to payment and access is given
						header("location:../payment.php?access=allowed&update=".$id);
					}else{
						//redirect to payment and access is denied
						header("location:../payment.php?access=denied");
					}
			}else{
				//redirect to payment and access is denied
				header("location:../payment.php?action=edit&id=".$id);
			}
		}
		//continue with update action
		 //record a new payment
		 if(isset($_POST['updatepay']))
		 {
			 if(empty($_POST['student']) and empty($_POST['amount']) and empty($_POST['date']))
			 {
				 header('location:../payment.php?action=empty');
			 }else{
				 $id = $_POST['id'];
				 $posts = array('student'=>protectData($_POST['student']),
								'amount '=>protectData($_POST['amount']),
								'date'=>protectData($_POST['date']),
								'trims'=>protectData($_POST['trimester']));
				 $query = " update payment set student='".$posts['student']."',trimster='".$posts['trims']."',amount='".$_POST['amount']."' ,academic='".$_SESSION['academic']."' where id = '".$id."' ";
				 addindb($query);
				 header('location:../payment.php?action=okay');
			 }
		 }

	

		
		
?>