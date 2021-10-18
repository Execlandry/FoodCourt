<?php
require_once("config.php");

$name = $_POST['name'];
$dob = $_POST['date'];
$gen = $_POST['gender'];
$email = $_POST['email'];
$ad = $_POST['add'];
$sch = $_POST['school'];
$dep = $_POST['department'];
$course = $_POST['course'];
$rno = $_POST['rno'];
$cont = $_POST['number'];

if (isset($_POST["insert"])) {
    $sql = "INSERT INTO Form(Name, Email, Address, School, Rollnum, Contact, Gender, Department, Course, DOB) 
values ('$name','$email','$ad','$sch','$rno','$cont','$gen','$dep','$course','$dob')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Entry was created');
    window.location.href='form.php';
    </script>";
    }
}

if (isset($_POST["update"])) {
    $sql = "UPDATE Form SET Name='$name',Gender='$gen',Email='$email',Address='$ad',
    School='$sch',Contact='$cont',Department='$dep',Course='$course',DOB='$dob' WHERE Rollnum='$rno'";

    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Updated successfully');
    window.location.href='form.php';
    </script>";
    }
    else{
        echo "Error" .mysqli_error($conn);
    }
}

if (isset($_POST["display"])) {

    $sql = "SELECT * FROM Form";
    $d = mysqli_query($conn, $sql);

    echo "<table border=1>";
    echo "<tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>School</th>
                    <th>Department</th>
                    <th>Course</th>
                    <th>Contact</th>
            </tr>";
            
    while ($row = mysqli_fetch_array($d)) {
        echo "<tr>";
            echo "<td>";
            echo $row["Rollnum"];
            echo "</td>";

            echo "<td>";
                echo $row["Name"];
            echo "</td>";

            echo "<td>";
                    echo $row["DOB"];
            echo "</td>";

            echo "<td>";
                echo $row["Gender"];
            echo "</td>";

            echo "<td>";
                echo $row["Email"];
            echo "</td>";

            echo "<td>";
                echo $row["Address"];
            echo "</td>";

            echo "<td>";
                echo $row["School"];
            echo "</td>";

            echo "<td>";
                echo $row["Department"];
            echo "</td>";

            echo "<td>";
                echo $row["Course"];
            echo "</td>";

            echo "<td>";
                echo $row["Contact"];
            echo "</td>";

        echo "</tr>";
    }
}

if (isset($_POST["delete"])) {
    $sql = "DELETE FROM `Form` WHERE Rollnum ='$rno'";
    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Deleted successfully');
        window.location.href='form.php';
        </script>";
    }
}

if(isset($_POST["logout"])){
    header("Location: logout.php");
}


?>