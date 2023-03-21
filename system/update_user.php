<?php
	session_start ();

    include_once 'dbconnect.php';

	if (isset($_GET['user_id'])) {
		$sql = "SELECT * FROM employee WHERE user_id = " . $_GET['user_id'];
		$result = mysqli_query($con, $sql);
		$row_update = mysqli_fetch_array($result);
		$user_id = $row_update['user_id'];
		$name = $row_update['user_name'];
		$email = $row_update['user_email'];
		$passwd = $row_update['user_passwd'];
	}

	if (isset($_POST['update'])) {
		$user_id = $_POST['id'];
		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$passwd = $_POST['user_passwd'];

		$validate_error = false;
		$error_msg = "";


		if (!$validate_error) {
			$sql = "UPDATE employee SET  user_name = '" . $name . "', user_email = '" . $email . "' , user_passwd = '" . $passwd . "'  WHERE user_id = " . $user_id;
			
			if (mysqli_query($con, $sql)) {
				header ("location: employee.php");
			} else {
				$error_msg = "อัปเดตข้อมูลไม่สำเร็จ";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="/lib/bootstrap.min.css">
        <script src="/lib/jquery-1.12.2.min.js"></script>
        <script src="/lib/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
        <title>LOGIN POS</title>

        <link rel="icon" type="image/x-icon" href="assets/CPALL1.png" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
		<!-- เมนู (Navigator) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="col-md-5"><a class="navbar-brand" href="#!">LOGIN POS</a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_user.php">ลงชื่อเข้างาน</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_leave.php">ลาป่วย/ลากิจ</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="add.php">เพิ่มพนักงาน</a></li>
			                <li class="nav-item"><a class="nav-link" href="employee.php">รายชื่อพนักงาน</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</head>

<header><br><br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="updateform">
				<fieldset>				
					<h1 class="masthead-heading mb-0 text text-center">อัปเดตข้อมูลพนักงาน</h1>
                    <br>
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $user_id; ?>" />

						<label for="name">รหัสพนักงาน</label>
						<input type="text" name="user_id"  required value="<?php echo $user_id; ?>" class="form-control" />
					
					</div>

					<div class="form-group">
                    <label for="name">ชื่อ</label>
						<input type="text" name="user_name"  required value="<?php echo $name; ?>" class="form-control" />
					</div>

					<div class="form-group">
					<label for="name">ชื่อผู้ใช้งาน</label>
						<input type="text" name="user_email" required value="<?php echo $email; ?>" class="form-control" />
					</div>

					<div class="form-group">
					<label for="name">รหัสผ่าน</label>
						<input type="text" name="user_passwd" required value="<?php echo $passwd; ?>" class="form-control">
					</div>

					<center><br>
					<div class="form-group">
						<input type="submit" name="update" value="อัปเดต" class="btn btn-dark" onclick="alert('อัปเดตข้อมูลการลาสำเร็จ');"/>
					</div>
				</fieldset>
			</form>
			<span class = "text-danger"><?php if (isset($error_msg)) echo $error_msg; ?></span>
		</div>
	</div>
</div>
<center><button onclick="document.location='employee.php'" class="btn btn-dark">ย้อนกลับ</button></center><br>
</header><br>

        <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>