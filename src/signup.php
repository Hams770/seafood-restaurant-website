<body class="container mt-5">
    <!-- Navbar -->
    <?php
    include(__DIR__ . "/includes/header.php");
    ini_set('display_errors', 1);
    include(__DIR__ . "/includes/db.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // SERVER SIDE Variables
        if (isset($_POST['signup']) and !empty($_POST['firstname'] and !empty($_POST['lastname']) and !empty($_POST['phonenumber']) and !empty($_POST['email']))) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $PhoneNumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $query = $conaction->prepare("INSERT INTO customers(FirstName, LastName, Email , Phone, password) VALUES ( '$firstname', '$lastname', '$email', '$PhoneNumber', SHA1('$password'))");
            $query->execute();
            echo "dona";
        } else {
            echo '<div class="alert alert-danger" role="alert">
            PLS MAKE SURE YOU FILL ALL INPUT</div>';
        }
    }
    ?>
    <script>
        function validateform() {
            // Variables
            let fname = document.forms["myform"]["firstname"].value;
            let lname = document.forms["myform"]["lastname"].value;
            let email = document.forms["myform"]["email"].value;
            let phone = document.forms["myform"]["phonenumber"].value;
            let password = document.forms["myform"]["password"].value;
            // If statements
            if (fname == "") {
                alert("First name must be filled out!");
                return false;
            } else if (lname == "") {
                alert("Last name must be filled out!");
                return false;
            } else if (email == "") {
                alert("Email must be filled out!");
                return false;
            } else if (phone == "") {
                alert("Phone Number must be filled out!");
                return false;
            } else if (password == "") {
            }
        }  
    </script>
    <h4 class="display-4" style="text-align: center;">Sign Up</h4>
    <p style="color: #000000;"> Sign up if you're a new user!</p>
    <!-- Sign Up Form -->
    <form method='POST' action='<?php echo $_SERVER["PHP_SELF"] ?>' class="row g-3" style="color: #000000;"
        name="myform" action="abc.jsp" onsubmit="return validateform()">
        <!-- First Name -->
        <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" name="firstname">
            <label for="floatingInput">First Name</label>
        </div>
        <!-- Last Name -->
        <div class="form-floating mb-3 col-md-6">
            <input type="text" class="form-control" name="lastname">
            <label for="floatingInput">Last Name</label>
        </div>
        <!-- Email -->
        <div class="form-floating mb-3 col-md-12">
            <input type="email" class="form-control" name="email">
            <label for="floatingInput">Email</label>
        </div>
        <!-- Phone Number -->
        <div class="form-floating mb-3 col-md-12">
            <input type="number" class="form-control" name="phonenumber">
            <label for="floatingInput">Phone Number</label>
        </div>
        <!-- Password -->
        <div class="form-floating mb-3 col-md-12">
            <input type="password" class="form-control" name="password">
            <label for="floatingInput">Password</label>
        </div>
        <!-- Submit Button -->
        <div class="d-grid gap-2">
            <button class="btn btn-md" name="signup" id="btn1" type="submit" value="Sign Up"
                style="background: #000000; color:white;">Sign
                Up</button>
        </div>
        <div id="sign" class="form-text">Already have an account? <a href="login.php">
                Log In </a></div>
    </form>
    <?php
    include(__DIR__ . "/includes/footer.php") ?>
</body>