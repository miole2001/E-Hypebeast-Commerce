<?php

include ('../connection.php');

if(isset($_POST['submit'])){

    $staffId = $_POST['staff_id'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $job = $_POST['job'];
    $hired = $_POST['hired'];

    $sql = "INSERT INTO staff (staff_id, image, full_name, sex, address, job_type, join_date) 
            VALUES ('$staffId', '$image', '$name', '$sex', '$address', '$job', '$hired')";

    $result = mysqli_query($connforMyOnlineDb, $sql);

    if($result){

        echo "<script>
            alert('Product added successfully');
            window.location.href = 'all-staff.php';
            </script>";
    }
    else{
        echo "<script>
			alert('Product unsuccessful');
			window.location.href = 'all-staff.php';
			</script>";
    }

}

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['update'])) {

    $staffId = $_POST['staff_id'];
	$image = $_POST['image'];
	$name = $_POST['name'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $hire = $_POST['hired'];

	// Update the user's data
	$sql = "UPDATE staff SET staff_id= '$staffId', image='$image', full_name='$name', sex='$sex', address='$address', job_type='$job', join_date ='$hire' WHERE id=$id";

	if ($connforMyOnlineDb->query($sql) === TRUE) {
		echo "<script type='text/javascript'>
        alert('Updated Successful!');
        window.location = 'all-staff.php';
    </script>";
	} else {
		echo "Error updating record: " . $connforMyOnlineDb->error;
	}
}
$connforMyOnlineDb->close();

?>