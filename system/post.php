<?php
	session_start();
	
	include_once "dbconnect.php";
		if (isset($_POST['send'])) {
			$type =$_POST['user_type'];
			$name = $_POST['user_name'];
			$id = $_POST['user_id'];
			$date =$_POST['user_date'];
			$time =$_POST['user_time'];
			$note =$_POST['user_note'];

		$validate_error = false;

		$validate_msg = "";

		if (!$validate_error){
			$sql = "INSERT INTO post(user_type, user_name, user_id, user_date, user_time, user_note )
			VALUE('" . $type . "'  , '" . $name . "'  , '" . $id . "'  , '" . $date . "' , '" . $time . "' , '" . $note . "')"; 
	
			if (mysqli_query($con, $sql));
		} else {
		}
	}	
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LOGIN POS</title>

        <link rel="icon" type="image/x-icon" href="assets/CPALL1.png" />
        <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">LOGIN POS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
					<?php if (isset($_SESSION['id'])) { ?>
                    <li class="nav-item"><a class="nav-link"> รหัสพนักงาน&nbsp;<?php echo $_SESSION['id']; ?>&nbsp;คุณ<?php echo $_SESSION['name']; ?></a></li>
		            <?php }  ?>
			        <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
<header>

<header>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data" name="sendform">
				<fieldset><br>
				<div class="form-group">
						<label for="name">รหัสพนักงาน</label>
						<?php echo $_SESSION['id']; ?>
					</div>

					<div class="form-group">
						<label for="name">ชื่อ</label>
						<?php echo $_SESSION['name']; ?>
					</div>
				

					<div class="form-group">
						<label for="name">ประเภท</label>
						<label for="name">ลากิจ</label>
						<input type="radio" name="user_type" value="ลากิจ">
						<label for="name">ลาป่วย</label>
						<input type="radio" name="user_type" value="ลาป่วย">
					</div>

					 <div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="text" name="user_name" placeholder="" required value="<?php echo $_SESSION['name']; ?>" class="form-control" />
					</div>
			
					<div class="form-group">
						<label for="name">ชื่อ</label>
						<input type="id" name="user_id" placeholder="" required value="<?php echo $_SESSION['id']; ?>" class="form-control" />
					</div>

                    <div class="form-group">
						<label for="name">วันที่</label>
						<input type="date" name="user_date" required class="form-control" />
					</div>

                    <div class="form-group">
						<label for="name">เวลา</label>
						<input type="time" name="user_time"  required class="form-control" />
					</div>

                    <div class="form-group">
						<label for="name">หมายเหตุ</label>
						<input type="text" name="user_note" required class="form-control" />
					</div>
					
					<center>
					<div class="form-group">
						<input type="submit" name="send" value="ยืนยัน" class="btn btn-dark"/>
					</div>
					<button onclick="document.location='index.php'" class="btn btn-dark">ย้อนกลับ</button><br><br>
					</center>
				</fieldset>
			</form>

			<?php
				if (isset($validate_error)){
					if($validate_error){
						echo $validate_msg;
					}
				}
			?>
		</div>
	</div>
</div>
</header>

  <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>