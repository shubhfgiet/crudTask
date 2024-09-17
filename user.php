<?php

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       // echo 'Data Inserted Successfully';
       header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            color: #333333;
            margin-bottom: 40px;
        }

        #outer {
            background-color: #3CB371;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            color: #333333;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="tel"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="email"]:focus,
        .form-container input[type="tel"]:focus,
        .form-container input[type="password"]:focus {
            border-color: #4CAF50;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container input[type="submit"]:focus {
            outline: none;
        }

        .form-container .input-icon {
            position: absolute;
            top: 12px;
            left: 10px;
            color: #999999;
        }

        @media screen and (max-width: 600px) {
            .form-container {
                width: 90%;
            }
        }
    </style>
</head>

<body>


    <div id="outer">
        <div class="form-container">
            <h1><i style="color:black;">Register</i> <b style="color:blue;">Form</b></h1>
            <form id="myForm" action="#" method="POST">
                <label for="name">Name:</label>
                <div style="position: relative;">

                    <input type="text" id="name" name="name" required>
                </div>

                <label for="email">Email:</label>
                <div style="position: relative;">

                    <input type="email" id="email" name="email" required>
                </div>

                <label for="mobile">Mobile:</label>
                <div style="position: relative;">

                    <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required>
                </div>

                <label for="password">Password:</label>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" required>
                </div>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>

</body>

</html>

