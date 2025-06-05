<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form action="student_display.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Roll Number:</label><br>
        <input type="text" name="roll" required><br><br>

        <label>Department:</label><br>
        <input type="text" name="dept" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
