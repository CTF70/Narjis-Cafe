<?php

// Handle user registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Save user data to the database
    $conn = mysqli_connect('localhost', 'root', '', 'task_manager');
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $query);


    // Redirect to login page
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Narjis Cafe</title>
    <!-- font awesome cdn link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- custom css file link -->
    <link href="style.css" rel="stylesheet">
    <link href="Narjis_Cafe_Images\icon_Of_Narjis_Ali_Atiya.png.png" rel="icon" type="image/x-icon">
</head>

<body>
    <div class="form-reg-container" style="background:burlywood;background-size:cover">
        <section class="form-reg"
            style="width: 500px;height: 500px;padding: 40px;position: absolute;border: 1px solid;position: absolute;top: 10%;left: 30%;">
            <form method="POST" action="">
                <label style="color:#fff;font-size:4rem;" for="username">Username: </label>
                <input style="color:#000;font-size:4rem;cursor:30rem" type="text" name="username" required>
                <br><br><br><br><br><br>
                <label style="color:#fff;font-size:4rem;" for="email">Email of user: </label>
                <input style="color:#000;font-size:4rem;" type="email" name="email" required>
                <br><br><br><br><br><br>
                <label style="color:#fff;font-size:4rem;" for="password">Password of user: </label>
                <input style="color:#000;font-size:4rem;" type="password" name="password" required>
                <br><br><br><br><br><br>
                <input
                    style="color:#000;font-size:4rem;background:burlywood;border-radius: 30px;margin-top: 1rem;padding: .9rem 3rem;cursor:pointer"
                    type="submit" value="Register">
            </form>
        </section>
    </div>
</body>

</html>