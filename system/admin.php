<?php
	session_start();

	if (isset($_POST['admin-login'])){
		$admin_name = $_POST['admin-name'];
		$admin_passwd = $_POST['admin-password'];
			
		if ($admin_name == 'admin' && $admin_passwd == 'admin1234') {
			$_SESSION['id'] = 0 ;
			$_SESSION['name'] = "Admin";
			header("location: show_user.php");
		} else {
			$error_msg = "Incorrect e-mail or password.";
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="col-md-10"><a class="navbar-brand" href="#!">LOGIN POS</a> </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto"> 
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>
         <div class="container">
            <div class="row">
                <div class="col-lg-6">
                        <div class="container">
                            <div class="text-center my-1"><br>
                                <a href="#!"><img  src="https://upload.wikimedia.org/wikipedia/th/3/39/CPALL2015.png" height="200" width="300"/></a><br><br/>
                                <p class="lead mb-0">Welcome to Login System.</p>
                            </div>
                        </div>
                 </div>
                 
                 <div class="col-lg-4" ><br>
                <div class="card mb-4">
            <center><div class="card-header">Login System for Admin</div></center>
                    
        <div class="card-body">
	        <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<div class="form-group">
						<label for="name">ชื่อผู้ใช้งาน</label>
						<input type="text" name="admin-name" placeholder="ป้อนชื่อผู้ใช้งาน" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">รหัสผ่าน</label>
						<input type="password" name="admin-password" placeholder="ป้อนรหัสผ่าน" required class="form-control" />
					</div>
					<center><div class="form-group">
						<input type="submit" name="admin-login" value="Login" class="btn btn-dark" />
					</center>
					<span class="text-danger text-center">
						<?php if (isset($error_msg)) { echo $error_msg; } ?>
					</span>
                </div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</div><br><br><br>

   <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>