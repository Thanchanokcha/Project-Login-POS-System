<?php
    session_start();

    include_once 'dbconnect.php';

    $sql = "SELECT * FROM project ORDER BY user_id ASC";
    $result = mysqli_query($con, $sql);

    $cnt = 1;

    if (isset($_GET['user_id'])) {
        $sql = "DELETE FROM project where user_id = " . $_GET['user_id'];
        mysqli_query($con, $sql);
        header("location: member.php");
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="col-md-6"><a class="navbar-brand" href="#!">LOGIN POS</a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-8 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_user.php">ลงชื่อเข้างาน</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="show_user1.php">ลาป่วย/ลากิจ</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="add.php">เพิ่มพนักงาน</a></li>
			        <li class="nav-item"><a class="nav-link" href="member.php">รายชื่อพนักงาน</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Logout</a></li>
                </ul>
                </div>
            </div>
        </nav>

 <header><br>
 <div class="container">
            <h1 class="text-center">ตารางรายชื่อพนังาน</h1>	
            <div class="table-responsive">
                <table class="table table-bordered  bg-white ">
                    <thead>
                     <tr class="text-nowrap text-center">
                         <th>รหัสพนักงาน</th>
                         <th>ชื่อ</th>
                         <th>ชื่อผู้ใช้งาน</th>
                         <th>รหัสผ่าน</th>
                         <th colspan="2" style="text-align:center">กิจกรรม</th>
                     </tr>
                </thead>
            <tbody>

                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr class="text-nowrap text-center">
                        <td><?php echo $row['user_id'];?></td>
                        <td><?php echo $row['user_name'];?></td>
                        <td><?php echo $row['user_email'];?></td>
                        <td><?php echo $row['user_passwd'];?></td>
                        <td><input type="button" value="แก้ไข" name="btn-edit" class="btn btn-dark" onclick = "update_user (<?php echo $row['user_id']; ?>);"></td>
                        <td><input type="button" value="ลบ" name="btn-delete" class="btn btn-danger" onclick ="delete_user (<?php echo $row['user_id']; ?>);"></td>
                    </tr>
                <?php } ?>
                </tbody>
             </table>
            </div>
            <center><div>มีข้อมูลทั้งหมด <?php echo mysqli_num_rows($result) . " ข้อมูล"; ?></div></center><br>
     </div>
 </div>
     <script>
        function delete_user(id) {
            if (confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) {
                window.location.href = "member.php?user_id=" + id;
            }
        }
        function update_user(id) {
            window.location.href = "update_user.php?user_id=" + id;
        }
    </script>
</header>

      <footer class="py-1 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Thankyou</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>