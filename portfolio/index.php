<?php include('connection.php');

$sql = "SELECT * FROM my_info";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $display = $result->fetch_assoc();
} else {
    die('Data not found.');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
</head>

<body>

    <nav>
        <div class="logo">
            <h2>My Portfolio</h2>
        </div>
        <ul>
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#about-me">About Me</a></li>
        </ul>
    </nav>

    <div class="main" id="introduction">
        <div class="left">
            <h5>Hi!, I am <?php echo $display['first_name'] . ' ' . $display['last_name']; ?></h5>
            <h3>I am a student of <span><?php echo $display['university']; ?></span> <?php echo $display['campus']; ?></h3>
            <p>
                Major in <?php echo $display['major']; ?> a <?php echo $display['year_level']; ?> Student.
            </p>
        </div>
        <div class="right">
            <img src="2.jpg">
        </div>
    </div>


    <div class="about" id="about-me">
        <div class="left">
            <img src="1.jpg">
        </div>
        <div class="right">
            <h3>About Me</h3>
            <p>
            Hi there! I’m <?php echo $display['first_name'] . ' ' . $display['middle_name'] . ' ' . $display['last_name']; ?>, born on <?php echo $display['birth_date']; ?>.
            I’m <?php echo $display['gender']; ?> and I live in <?php echo $display['address']; ?>.
            Currently, I’m studying at <?php echo $display['university'] . ' ' . $display['campus']; ?> in the <?php echo $display['course']; ?> program, focusing on <?php echo $display['major']; ?>. 
            I’m in my <?php echo $display['year_level']; ?> and my student ID is <?php echo $display['student_id']; ?>.

            </p>
            <br><br><br><br>

            <h3>My Social Information</h3>
            <br>
            <h4>Facebook: <?php echo $display['facebook']; ?></h4>
            <br>
            <h4>Email : <?php echo $display['email']; ?></h4>
            <br>
            <h4>Contact Number: <?php echo $display['number']; ?></h4>
        </div>
    </div>

</body>

</html>