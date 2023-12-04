<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP CRUD</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #eff5f8;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #004080; /* Warna biru tua yang serasi dengan latar belakang */
            color: #fff;
            text-align: center;
            font-size: 1.5em;
            padding: 10px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .gender-label {
            margin: 10px 0;
        }

        .gender-options {
            display: flex;
            margin-bottom: 15px;
        }

        .gender-options label {
            margin-right: 15px;
        }

        button,
        a {
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
        }

        button {
            background-color: #28a745;
        }

        a {
            margin-top : 5px;
            background-color: #FF4433;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">Form</nav>

    <div class="container">
        <div style="text-align: center; margin-bottom: 20px;">
            <h3>Add New User</h3>
        </div>

        <form action="" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" placeholder="First Name">

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" placeholder="Last Name">

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="name@example.com">

            <div class="gender-label">Gender:</div>
            <div class="gender-options">
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>

                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
            </div>

            <button type="submit" name="submit">Save</button>
            <a href="index.php">Cancel</a>
        </form>
    </div>

</body>

</html>
