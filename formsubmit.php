<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1;URL=tables.php" />
	<title>Form Sumbit</title>
</head>
<body>
<?php
$dbFile = '/var/www/html/std.db';
$conn = new SQLite3($dbFile);
if (!$conn) {
	die("Connection failed: " . $conn->lastErrorMsg());
}
$sql = "insert into student values('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['caddress'] . "','" . $_POST['paddress'] . "','" . $_POST['contact'] . "','" . $_POST['email'] . "','" . $_POST['roll_no'] . "','" . $_POST['enroll'] . "','" . $_POST['branch'] . "','" . $_POST['eyear'] . "','" . $_POST['section'] . "','" . $_POST['pemail'] . "','" . $_POST['father_name'] . "','" . $_POST['mother_name'] . "','" . $_POST['father_code'] . $_POST['fcontact'] . "','" . $_POST['mother_code'] . $_POST['mcontact'] . "');";
if ($conn->query($sql)) {
	echo "<script>alert('Data Submitted Successfully. Redirecting...')</script>";
} else {
	echo "<script>alert('Data Not Submitted Successfully')</script>";
}
?>

</body>
</html>