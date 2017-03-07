<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	//เขียน php เอาข้อมูลที่ส่งมาไป selec ใน DB ว่ามีหรือไม่มี ถ้าไม่มีแสดงข้อความบอก ถ้ามี ต้องดูว่าเปลี่ยน admin->admin.php หรือ member ->member.php
	$uname = $_POST['uname'];
	$upassword = $_POST['upassword'];

	//การทำงานกับฐานข้อมูล
	//step 1  connect ฐานขอมูล
	$host = "localhost";
	$userdb = "root";
	$passworddb = "";
	$dbname = "comscia_db";
	$conn = mysqli_connect($host,$userdb,$passworddb,$dbname);

	//step 2 สร้างคำสั่ง SQL เพื่อทำงานกับ database

	$strsql = "select * from user_tb where uname='".$uname."' and upassword='".$upassword."'";
	//echo $strsql;

	//step 3 สร้างให้ทำงาน นำผลลัพธ์ที่ได้ไปไว้ในตัวแปร


	$result = mysqli_query($conn, $strsql);


	// step 4 เอาผลที่ได้จากการทำงานมาใช้งาน


	if($row = mysqli_fetch_array($result)){
		echo "OK";
	}else{
		//
		echo "User name และ Password ไม่ถูกต้อง ";
	}

	
?>
	
</body>
</html>