<?php
$is=FALSE;

if(isset($_POST['submit']))
{

    $s="localhost";
    $u="root";
    $p="";

    $connection=mysqli_connect($s,$u,$p);

    if (!$connection) {
    echo "Not connect...". mysqli_connect_error();
    }
    else
    {
    echo "connect.......";
    }

    $rno=$_POST['rno'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $que="INSERT INTO `student_info`(`rollno`, `name`, `gender`, `age`, `email`, `address`) VALUES ('$rno','$name','$gender','$age','$email','$address');";

    if($connection->query($que)==TRUE)
    {
        echo "<br>Insertion successfull..!!!!!";
    }
    else
    {
        echo "<br>Error!!!!!!!!!!";
    }
    $connection->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Details</title>
</head>

<body>
    <center>
        <h1>Registration form</h1>
        <form action="database.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="">Roll No: </label>
                    </td>
                    <td>
                        <input type="number" name="rno" id="rno">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Gender:</label>
                    </td>
                    <td>
                        <input type="text" name="gender" id="gender">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Age:</label>
                    </td>
                    <td>
                        <input type="number" name="age" id="age">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Email:</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email">
                        <!-- <input type="email" name="" id=""> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Address:</label>
                    </td>
                    <td>
                        <textarea name="address" id="address" cols="30" rows="6" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button class="submit" name="submit">submit</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>