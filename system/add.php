<?php
		include_once "dbconnect.php";

		if (isset($_POST['signup'])) {
            $id = $_POST['user-id'];
			$name = $_POST['user-name'];
			$email = $_POST['user-email'];
			$passwd = $_POST['user-password'];

		$validate_error = false;
		$validate_msg = "";
		

		if (!$validate_error){
			$sql = "INSERT INTO employee(user_id , user_name, user_email, user_passwd)
			VALUE('" . $id . "' , '" . $name . "' , '" . $email . "' , '" . ($passwd) . "')"; 
	
			if (mysqli_query($con, $sql));
		} else {

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
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <title>LOGIN POS</title>

        <link rel="icon" type="image/x-icon" href="assets/CPALL1.png" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <!-- เมนู (Navigator) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="col-md-6"><a class="navbar-brand" href="#!">LOGIN POS</a> </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_user.php">ลงชื่อเข้างาน</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_leave.php">ลาป่วย/ลากิจ</a></li>
                    <li class="nav-item"><a class="nav-link" href="add.php">เพิ่มพนักงาน</a></li>
			        <li class="nav-item"><a class="nav-link active" aria-current="page" href="employee.php">รายชื่อพนักงาน</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <div class="container">
                        <div class="text-center my-1"><br><br><br><br><br><br><br><br><br>
                                <a href="#!"><img  src="https://www.gosoft.co.th/wp-content/uploads/2019/01/cropped-LOGO-gosoft.png" height="100" width="480"/></a><br><br/> 
                                <p class="lead mb-0">Welcome to Login System.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4" ><br><br>
                <div class="card mb-4">
                <center><div class="card-header">Register POS</div></center>
<!-- แบบฟอร์มการเพิ่มพนักงาน -->
<div class="card-body">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
                    <div class="form-group">
						<label for="name">รหัสพนักงาน</label>
						<input type="text" name="user-id" placeholder="ป้อนรหัสพนักงาน" required class="form-control" />
					</div>

                    <div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" name="user-name" placeholder="ป้อนชื่อ" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">ชื่อผู้ใช้งาน</label>
						<input type="text" name="user-email" placeholder="ป้อนชื่อผู้ใช้งาน" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">รหัสผ่าน</label>
						<input type="password" name="user-password" placeholder="ป้อนรหัสผ่าน" required class="form-control" />
					</div>
                    
					<!--ปุ่มเพิ่มข้อมูลพนักงา่น-->
                    <div class="form-group text-center">
						<input type="submit" name="signup" value="เพิ่มข้อมูลพนักงาน" class="btn btn-dark" onclick="alert('บันทึกข้อมูลการลาสำเร็จ');"/>
					</div>
                    
				</fieldset>
			</form>

			<span class="text-danger">
				                <?php 
					                if (isset($error_mrg)) { //แจ้ง error เมื่อกรอกข้อมูลไม่ครบ
						                echo $error_mrg; 
					                }
				                ?>
			                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><br>

		   <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>