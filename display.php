<?php 

include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Optional: Add custom styles here */
    </style>
</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-danger my-5"><a href="user.php">Add User</a></button>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>SL NO</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="select * from `crud`";
                $result=mysqli_query($conn,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $password=$row['password'];
                        echo '<tr>
                            <th>'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                                <button class="btn btn-info"><a href="update.php?updateid='.$id.'">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                            </td> 
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
