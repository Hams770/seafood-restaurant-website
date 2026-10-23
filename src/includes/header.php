<?php
include(__DIR__ . "/links.php");
?>

<body>
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <i class='fas fa-fish' style='font-size:24px;color:white'></i>
                <a class="navbar-brand" href="#">SEA DEAL</a>
                <div class="container">
                    <li class="nav-item"><a href="seafood.php" class="navbar-brand" href="#">Home</a></li>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <ul>
                </ul>
                <button type="button" class="btn dropdown-toggle" style="color:#fffffe; " data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user"></i>
                </button>
                <ul class="dropdown-menu  ">
                    <li class=" border-bottom ">
                        <a class="p-6 text-decoration-none" href="login.php"> Login</a>
                    </li>
                    <li class=" border-bottom ">
                        <a class="p-6 text-decoration-none" href="signup.php">Signup</a>
                    </li>
                    <li class=" border-bottom ">
                        <a class="p-6 text-decoration-none" href="Menu.php">Menu</a>
                    </li>
                    <li class=" border-bottom ">
                        <a class="p-6 text-decoration-none" href="book.php">Boking</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>