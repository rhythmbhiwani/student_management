<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Data</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

     <nav class="navbar navbar-expand static-top shadow">

      <a class="navbar-brand mr-1" href="index.php" style="color:#000">GITS STUDENTS</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="color:#000"></i>
      </button>

    </nav>
    <div id="wrapper">
	
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg shadow">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		
		 <li class="nav-item">
          <a class="nav-link" href="information.php">
             <i class="fas fa-fw fa-user"></i>
            <span>Add Student</span></a>
        </li>
		
        <li class="nav-item active-list">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Student Data</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Student Data Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Students Record</div>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $dbname="stdmgmtsystem";
              $conn=new mysqli($servername,$username,$password,$dbname);
              if ($conn->connect_error) {
               die("connection failed:".$conn->connect_error);
              }
              else
              {
                $sql = "SELECT * FROM student";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
            echo "<div class='card-body'>
              <div class='table-responsive'>
                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                  <thead>
                    <tr>
					            <th>Roll No.</th>
                      <th>Enrollment No</th>
                      <th>Name</th>
                      <th>Student Email</th>
                      <th>Mobile No</th>
                      <th>Branch</th>
                      <th>Enrollment Year</th>
					            <th>Section</th>
                      <th>Current Address</th>
                      <th>Father's Name</th>
                      <th>Father's Mob No</th>
                      <th>Mother's Name</th>
                      <th>Mother's Mob No</th>
                      <th>Parent's Email</th>
                      <th>Parent's Address</th>
                    </tr>
                  </thead>
				  <tbody>";
                 while($row = $result->fetch_assoc()) {
                  echo "
                    <tr>
                      <td>".$row['roll_no']."</td>
                      <td>".$row['enroll']."</td>
                      <td>".$row['fname']." ".$row['lname']."</td>
                      <td>".$row['email']."</td>
                      <td>".$row['contact']."</td>
                      <td>".$row['branch']."</td>
                      <td>".$row['eyear']."</td>
                      <td>".$row['section']."</td>
					            <td>".$row['caddress']."</td>
                      <td>".$row['father_name']."</td>
                      <td>".$row['father_mobile']."</td>
                      <td>".$row['mother_name']."</td>
                      <td>".$row['mother_mobile']."</td>
                      <td>".$row['parent_email']."</td>
                      <td>".$row['paddress']."</td>
                    </tr>";
                  }
                    
                echo "</table>
				</table>
				 
              </div>
            </div>";
             }
			 else
			 {
				 echo "No Data Found";
			 }
      }

       ?>
            <div class='card-footer small text-muted'>Geetanjali Institute Of Technical Studies Dabok, Udaipur (Raj.)</div>
          </div>   
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
                 <span>Copyright © Gits student managments system 2018</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	</div>
	
	</div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
