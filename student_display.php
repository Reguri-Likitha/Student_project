<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$dept = $_POST['dept'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h2>Submitted Student Information</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Roll Number:</strong> <?php echo $roll; ?></p>
    <p><strong>Department:</strong> <?php echo $dept; ?></p>
</body>
</html>
