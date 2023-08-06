<?php
// Establish the database connection
$connection = mysqli_connect("localhost", "root", "sakshi2608");
$db = mysqli_select_db($connection, "sms1");

// Prepare the query with placeholders
$query = "INSERT INTO students (roll_no, name, father_name, class, mobile, email, password, remark) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($connection, $query);

if ($stmt) {
    // Bind the parameters with the actual values using "bind_param"
    mysqli_stmt_bind_param(
        $stmt,
        "ississss",
        $_POST['roll_no'],
        $_POST['name'],
        $_POST['father_name'],
        $_POST['class'],
        $_POST['mobile'],
        $_POST['email'],
        $_POST['password'],
        $_POST['remark']
    );

    // Execute the statement
    $query_run = mysqli_stmt_execute($stmt);

    if ($query_run) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: Data insertion failed. " . mysqli_error($connection);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>

<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
