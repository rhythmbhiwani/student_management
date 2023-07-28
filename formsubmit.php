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
$sql = "INSERT INTO student (fname, lname, caddress, paddress, contact, email, roll_no, enroll, branch, eyear, section, parent_email, father_name, mother_name, father_mobile, mother_mobile) VALUES (:fname, :lname, :caddress, :paddress, :contact, :email, :roll_no, :enroll, :branch, :eyear, :section, :parent_email, :father_name, :mother_name, :father_mobile, :mother_mobile)";
$stmt = $conn->prepare($sql);
// Bind the parameters with values from $_POST
$stmt->bindParam(':fname', $_POST['fname']);
$stmt->bindParam(':lname', $_POST['lname']);
$stmt->bindParam(':caddress', $_POST['caddress']);
$stmt->bindParam(':paddress', $_POST['paddress']);
$stmt->bindParam(':contact', $_POST['contact']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':roll_no', $_POST['roll_no']);
$stmt->bindParam(':enroll', $_POST['enroll']);
$stmt->bindParam(':branch', $_POST['branch']);
$stmt->bindParam(':eyear', $_POST['eyear']);
$stmt->bindParam(':section', $_POST['section']);
$stmt->bindParam(':parent_email', $_POST['pemail']);
$stmt->bindParam(':father_name', $_POST['father_name']);
$stmt->bindParam(':mother_name', $_POST['mother_name']);
$stmt->bindParam(':father_mobile', $_POST['father_code'] . $_POST['fcontact']);
$stmt->bindParam(':mother_mobile', $_POST['mother_code'] . $_POST['mcontact']);

if ($stmt->execute()) {
	echo "<script>alert('Data Submitted Successfully. Redirecting...')</script>";
} else {
	echo "<script>alert('Error inserting data: " . $conn->lastErrorMsg() . "')</script>";
}
?>

</body>
</html>