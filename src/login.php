<!-- navbar -->
<?php
session_start();
session_unset();
session_destroy();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include(__DIR__ . "/includes/db.php");
    session_start();
    $name = $_POST["username"];
    $password = $_POST["password"];
    if ($name == "admin" or $password == "admin") {
        header("Location:admin.php");
    }
    $hashpassword = sha1($password);
    echo $hashpassword;
    if (isset($name) && isset($password)) {
        $stmt = $conaction->prepare("SELECT CustomerID , FirstName , password FROM customers WHERE FirstName='$name' AND password='$hashpassword'");
        $stmt->execute();
        $row = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count > 0) {
            $_SESSION["CustomerID"] = $row["CustomerID"];
            $_SESSION["name"] = $row["FirstName"];
            $_SESSION["password"] = $row["password"];
            header("Location: Menu.php");
        } else {
            echo "<script>alert('Invalid UserName or Password!')</script>";
        }
    }
}
?>

<body class="container mt-5">
    <?php include(__DIR__ . "/includes/header.php") ?>

    <!-- Navbar -->
    <script>
        function validateForm() {
            let email = document.forms["myform"]["username"].value;
            let password = document.forms["myform"]["password"].value;
            if (email === "" || password === "") {
                alert("Username and password must be filled out!");
                return false;
            }
        }
    </script>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="myform" onsubmit="return validateForm()">
        <h4 class="display-4 mt-5" style="text-align: center; color: #000000 ;">Log In</h4>
        <p style="color: #000000;"> Log in for a faster checkout</p>
        <div class="mt-3">
            <label for="exampleInputEmail1" class="form-label mt-5">Username</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="d-grid gap-2 m-3">
            <button name="login" id="btn1" type="submit" value="Log In" class="btn w-100"
                style="background: #000000; color:white;">Log In</button>
        </div>
        <div id="sign" class="form-text">Don't have an account? <a href="signup.php">
                Sign Up </a></div>
    </form>
    <?php
    include(__DIR__ . "/includes/footer.php")
        ?>
</body>

</html>