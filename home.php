<?php
session_start();
include('session.php');
?>
<?php
include("connection.php");

$no_of_classes = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `stream`"));
$no_of_students = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `students`"));
$no_of_result = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `result`"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ATHARVA || RMS || DASHBOARD</title>
    <link rel="stylesheet" href="Stylesheets/style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            
            <div class="info">
                <div class="welcome">
                    <h1>Atharva for Technical Education</h1>
                </div>
                <div class="add-class">
                    <?php
                    echo '<p>Number of Classes: ' . $no_of_classes[0] . '</p>';
                    echo '<p>Number of Students: ' . $no_of_students[0] . '</p>';
                    echo '<p>Number of Results: ' . $no_of_result[0] . '</p>';
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>