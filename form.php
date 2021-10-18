<?php
include('config.php');

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>UNIVERSITY</title>
    <style>
        * {
            color: black;
            font-family: sans-serif;
        }
    </style>

</head>

<body>
    <?php echo "<p>Welcome you are logged as: " . $_SESSION['username'] . "</p>"; ?>
    <fieldset style="background-color: red;">
        <form action="input.php" target="_self" method="post">
            <div>
                <h1 align="center">ZZ UNIVERSITY</h1>
            </div>

            <div>
                <p align="Center">Student Registration Form</p>
            </div>

            <div>
                <label for="rno">Roll no:</label>
                <input type="text" name="rno">
            </div>
            <br>

            <div>
                <label for="name">Name:</label>
                <input type="text" name="name">
            </div>
            <br>

            <div>
                <label for="Dob">DOB:</label>
                <input style="color: black;" type="date" name="date">
            </div>
            <br>

            <div>
                <tr>
                    <td>Sex:</td>
                    <td><input type="radio" name="gender" value="male">Male</td>
                    <td><input type="radio" name="gender" value="Female">Female</td>
                </tr>
            </div>
            <br>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">

            </div>
            <br>

            <div>
                <label for="address">Address:</label>
                <input type="text" name="add">
            </div>
            <br>

            <div>
                <label for="school">School:</label>
                <input type="text" name="school">
            </div>
            <br>

            <div>
                <label for="department">Department:</label>

                <select name="department" id="department">
                    <option value="Computer">Computer</option>
                    <option value="Civil">Civil</option>
                    <option value="Physics">Physics</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Biology">Biology</option>
                </select>
            </div>
            <br>

            <div>
                <label for="course">Course:</label>

                <select name="course" id="course">
                    <option value="Computer Courses">Computer Courses</option>
                    <option value="Civil Courses">Civil Courses</option>
                    <option value="Physics Courses">Physics Courses</option>
                    <option value="Mathematics Courses">Mathematics Courses</option>
                    <option value="Chemistry Courses">Chemistry Courses</option>
                    <option value="Biology Courses">Biology Courses</option>
                </select>
            </div>
            <br>

            <div>
                <label for="Number">Mobile Number:</label>
                <input type="text" name="number">
            </div>

            <div>
                <br>
                <fieldset>
                    <div align="center">

                        <button type="insert" name="insert">Insert</button>

                        <button type="update" name="update">Update</button>

                        <button type="display" name="display">Display</button>

                        <button type="delete" name="delete">Delete</button>

                        <button type="logout" name="logout">Logout</button>


                    </div>

                </fieldset>
            </div>

        </form>



    </fieldset>
</body>

<!-- <?php

        // $name = $_POST['name'];
        // $dob = $_POST['date'];
        // $gen = $_POST['gender'];
        // $email = $_POST['email'];
        // $ad = $_POST['add'];
        // $sch = $_POST['school'];
        // $dep = $_POST['department'];
        // $course = $_POST['course'];
        // $rno = $_POST['rno'];
        // $cont = $_POST['number'];

        // if (isset($_POST["insert"])) {
        //     $sql = "INSERT INTO Form(Name, Email, Address, School, Rollnum, Contact, Gender, Department, Course, DOB) 
        // values ('$name','$email','$ad','$sch','$rno','$cont','$gen','$dep','$course','$dob')";

        //     if (mysqli_query($con, $sql)) {

        //         echo "<script>alert('Entry was created');
        //     window.location.href='form.php';
        //     </script>";
        //     }
        // }

        // if (isset($_POST["update"])) {
        //     $sql = "UPDATE `Form` SET `Name`='$name','Gender'='$gen',`Email`='$email',`Address`='$ad',
        //     `School`='$sch',`Contact`='$cont','Department'='$dep','Course'='$course','DOB'='$dob' WHERE Rollnum='$rno'";

        //     if (mysqli_query($con, $sql)) {

        //         echo "<script>alert('Updated successfully');
        //     window.location.href='form.php';
        //     </script>";
        //     }
        // }

        // if (isset($_POST["display"])) {

        //     $sql = "SELECT * FROM Form";
        //     $d = mysqli_query($con, $sql);

        //     echo "<table border=1>";
        //     echo "<tr>
        //                     <th>Roll Number</th>
        //                     <th>Name</th>
        //                     <th>DOB</th>
        //                     <th>Gender</th>
        //                     <th>Email</th>
        //                     <th>Address</th>
        //                     <th>School</th>
        //                     <th>Department</th>
        //                     <th>Course</th>
        //                     <th>Contact</th>
        //                 </tr>";
        //     while ($row = mysqli_fetch_array($d)) {
        //         echo "<tr>";
        //         echo "<td>";
        //         echo $row["Rollnum"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Name"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["DOB"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Gender"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Email"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Address"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["School"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Department"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Course"];
        //         echo "</td>";
        //         echo "<td>";
        //         echo $row["Contact"];
        //         echo "</td>";
        //         echo "</tr>";
        //     }
        // }

        // if (isset($_POST["delete"])) {
        //     $sql = "DELETE FROM `Form` WHERE Rollnum ='$rno'";
        //     if (mysqli_query($con, $sql)) {

        //         echo "<script>alert('Deleted successfully');
        //         window.location.href='form.php';
        //         </script>";
        //     }
        // }


        ?> -->

</html>