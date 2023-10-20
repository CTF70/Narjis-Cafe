<?php
// Handle user login
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $conn = mysqli_connect('localhost', 'root', '', 'task_manager');
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);


    if (!$user) {
        echo "Invalid username or password";
    } else {
        header("Location: index.html");
        exit();
    }
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
            style="width: 300px;height: 300px;padding: 40px;position: absolute;border: 1px solid;position: absolute;top: 10%;left: 30%;">
            <form method="POST">
                <label style="color:#fff;font-size:5rem;" for="username">Username:</label>
                <input style="color:#000;font-size:5rem;" type="text" name="username" required>
                <br><br><br><br>
                <label style="color:#fff;font-size:5rem;" for="password">Password:</label>
                <input style="color:#000;font-size:5rem;" type="password" name="password" required>
                <br><br><br><br>
                <input
                    style="color:#000;font-size:5rem;background:burlywood;border-radius: 30px;margin-top: 1rem;padding: .9rem 3rem;cursor:pointer"
                    type="submit" value="Login">
            </form>
        </section>
    </div>
</body>

</html>