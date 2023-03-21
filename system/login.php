<?php
	session_start();
		
		include_once 'dbconnect.php';

		if (isset($_POST['login'])){
			$email = $_POST['login-email'];
			$passwd = $_POST['login-password'];

			$sql = "SELECT * FROM employee WHERE user_email = '" . $email . "'
			AND user_passwd ='" .  ($passwd) ."'"; 

			$result = mysqli_query($con, $sql);
			if ($row = mysqli_fetch_array($result)){
				$_SESSION['id'] = $row ['user_id'];
				$_SESSION['name'] = $row ['user_name'];
				header("location: index.php");
			} else {
				$error_mrg = "Incorrect e-mail or password.";
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
                <div class="col-md-10"><a class="navbar-brand" href="#!">LOGIN POS</a> </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto"> 
                        <li class="nav-item"><a class="nav-link "  href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    
                        <div class="container">
                            <div class="text-center my-1"><br><br><br>
                                <a href="#!"><img  src="https://www.gosoft.co.th/wp-content/uploads/2019/01/cropped-LOGO-gosoft.png" height="200" width="425"/></a>
                                <br><br/>
                                <p class="lead mb-0">Welcome to Login System.</p>
                            </div>
                        </div>
                        
                </div>

                <div class="col-lg-4" ><br><br><br>
                    <div class="card mb-4">
                        <center><div class="card-header">Login System</div></center>

<div class="card-body">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<div class="form-group">
						<label for="name">ชื่อผู้ใช้งาน</label>
						<input type="text" name="login-email" placeholder="ป้อนชื่อผู้ใช้งาน" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">รหัสผ่าน</label>
						<input type="password" name="login-password" placeholder="ป้อนรหัสผ่าน" required class="form-control" />
					</div>

					<center>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-dark"/>
					</div>
					</center>
				</fieldset>
			</form>

			<span class="text-danger">
				                <?php 
					                if (isset($error_mrg)) {
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
        </div><br><br><br><br><br>

		   <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>