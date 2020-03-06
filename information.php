<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Student</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">
  <script>
  function f1() 
{  
   var x=document.forms["myForm"]["contact"].value 
   return /^[A-z ]+$/.test(x);
}
  </script>
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
		
		 <li class="nav-item active-list">
          <a class="nav-link" href="information.php">
             <i class="fas fa-fw fa-user"></i>
            <span>Add Student</span></a>
        </li>
		
           <li class="nav-item">
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
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Student Inforamtion</li>
          </ol>

          <div class="container">
          <h3 class="text-center">Student Inforamtion</h3><hr>
        
          <div class="form-group">
		    <form id="myForm" name="myForm" action="formsubmit.php" method="POST">
          <div class="row">
   <div class="col-6">  <input pattern="[A-Za-z ]+" type="text" class="form-control" placeholder="FIRST NAME" name="fname" required><br></div>
   <div class="col-6">  <input pattern="[A-Za-z ]+" type="text" class="form-control" placeholder="LAST NAME" name="lname" required><br></div>
  </div>
  
    <input type="text" class="form-control" placeholder="CURRENT ADDRESS" name="caddress" required><br>

<input type="number" class="form-control" id="contactid"  placeholder="CONTACT NO." name="contact" required><br>

<input type="email" class="form-control" placeholder="EMAIL" name="email"><br>

 <div class="row">
   <div class="col-6">   <input type="text" class="form-control" placeholder="ROLL NO." name="roll_no" required></div>
   <div class="col-6">   <input type="number" class="form-control" placeholder="ENROLLMENT YEAR" name="eyear" required><br></div>
  </div>

<input type="number" class="form-control" placeholder="ENROLLMENT NO." name="enroll" required>
  <br>
      <div class="row">
   <div class="col-6">  
   <select class="form-control" name="branch">
      <option selected>SELECT BRANCH</option>
      <option value="CSE">COMPUTER SCIENCE ENGINEERING</option>
      <option value="ME">MECHANICAL ENGINEERING</option>
      <option value="CE">CIVIL ENGINEERING</option>
      <option value="AE">AUTOMOBILE ENGINEERING</option>
    </select><br>
   
   <br></div>
   <div class="col-6">  
   <select class="form-control" name="section">
      <option>SELECT SECTION</option>
      <option name="A" value="A">Section A</option>
      <option name="B" value="B">Section B</option>
      <option name="C" value="C">Section C</option>
      <option name="D" value="D">Section D</option>
    </select>
   
   <br></div>
  </div>       
        </div>
          <!-- Page Content -->
          <h3 class="text-center">PARENT'S INFORMATION</h3><br><hr>
   
  <div class="form-group">
        <form action="" method="">
  <div class="row">
   <div class="col-6">
   
    <input type="TEXT" pattern="[A-Za-z ]+"  class="form-control"  placeholder="FATHER'S NAME" name="father_name" required><br>
   </div>
      <div class="col-6">
	        
<div class="row">
<div class="col-3">
<select id="inputState" class="form-control" name="father_code">
        <option selected>CODE</option>
		<option value="+91">+91</option>
		<option value="+92">+92</option>
		<option value="+93">+93</option>
      </select>
</div>
<div class="col-9">
     <input type="number" class="form-control"  placeholder="PHONE NO." name="fcontact" ><br>
</div>
</div>
	  </div>
  </div>
  
  <div class="row">
   <div class="col-6">
      <input type="TEXT" class="form-control"  pattern="[A-Za-z ]+" placeholder="MOTHER'S NAME" name="mother_name" required><br>
  </div>
  <div class="col-6">
  	       
<div class="row">
<div class="col-3">
<select id="inputState" class="form-control" name="mother_code">
        <option selected>CODE</option>
		<option value="+91">+91</option>
		<option value="+92">+92</option>
		<option value="+93">+93</option>
      </select>
</div>
<div class="col-9">
     <input type="number" class="form-control"  placeholder="PHONE NO." name="mcontact"><br>
</div>
</div>
</div>
  </div>
 
	 <input type="email" class="form-control"  placeholder="EMAIL ID" name="pemail"><br>
	 
	 
	 <input type="TEXT" class="form-control"  placeholder="PERMANENT ADDRESS" name="paddress" required><br>

 
  <div class="form-group form-check text-right">


  <input type="submit" class="btn btn-primary" name="form_submit">
</div>
</form>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </body>
</html>