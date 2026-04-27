<?php
session_start();


if(isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}

$error = "";


$users = [
    [
        "username" => "admin",
        "email" => "admin@mail.com",
        "password" => "123",
        "role" => "admin"
    ],
    [
        "username" => "user",
        "email" => "user@mail.com",
        "password" => "123",
        "role" => "user"
    ]
];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input = trim($_POST['identifier']);
    $password = trim($_POST['password']);

    foreach($users as $u){
        if(
            ($u['username'] === $input || $u['email'] === $input) &&
            $u['password'] === $password
        ){

            $_SESSION['user'] = $u['username'];
            $_SESSION['role'] = $u['role'];

       
            setcookie("last_user", $u['username'], time() + 3600);

            header("Location: index.php");
            exit();
        }
    }

    $error = "Wrong credentials";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body{
            margin:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial;
            background:#f4f4f4;
        }

        .box{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            width:250px;
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            width:100%;
            padding:10px;
            background:black;
            color:white;
            border:none;
            cursor:pointer;
        }

        .error{
            color:red;
        }

        .last-user{
            color:green;
            font-size:14px;
            margin-bottom:10px;
        }
    </style>
</head>

<body>

<div class="box">
    <form method="POST">

        <h3>Login</h3>

        <?php
        if(isset($_COOKIE['last_user'])){
            echo "<p class='last-user'>Last login: " . $_COOKIE['last_user'] . "</p>";
        }
        ?>

        <input type="text" name="identifier" placeholder="Username or Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>

        <?php if($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

    </form>
</div>

</body>
</html>
