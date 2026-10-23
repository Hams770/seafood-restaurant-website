<?php
session_start();
if (isset($_SESSION["CustomerID"])) {

} else {
    header("Location: login.php");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include(__DIR__ . "/includes/db.php");
    $CustomerID = $_SESSION["CustomerID"];
    $item_name = $_POST['item'];
    $item_price = $_POST['price'];
    $stmt = $conaction->prepare("INSERT INTO `orders` (`CustomerID`, `OrderDate`, `TotalAmount` ,`item_name`)
    VALUES 
    ('$CustomerID ', CURRENT_TIMESTAMP, '$item_price','$item_name');");
    $stmt->execute();
    echo "<div class=' mt-5 alert alert-success' role='alert'>
    Order Placed Successfully
  </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restaurant Menu</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container mt-5">
    <?php
    include(__DIR__ . "/includes/header.php")
        ?>
    <div class="container my-5">
        <div class=" d-flex justify-content-around align-items-center">
            <h1 class="mb-4">Resta urant Menu</h1>
            <a href="bill.php" class="btn-bill btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                    <path
                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                    <path
                        d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                </svg> Bill</a>
        </div>
        <div class="card">
            <div class="card-header">
                OUR ITEMS
            </div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="row">
                        <?php
                        include(__DIR__ . "/includes/db.php");
                        // Display Appetizers with images
                        $food_table = $conaction->prepare("SELECT * FROM foods");
                        $food_table->execute();
                        $data_food_table = $food_table->fetchAll();
                        foreach ($data_food_table as $item) { ?>
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo $item[2] ?>" class="card-img-top img-fluid  h-50">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $item[0] ?>
                                    </h5>
                                    <p class="card-text">Price:$
                                        <?php echo $item[1] ?> <input type="hidden" name="price"
                                            value="<?php echo $item[1] ?>">
                                    </p>
                                    <p>Add to Order <i class="bi bi-plus-circle-fill"></i></p>
                                    <input type="submit" name="item" value="<?php echo $item[0] ?>" class="btn btn-primary">
                                </div>
                                <div class="card">
                                </div>
                            </div>
                    </form>
                <?php }
                        ; ?>
            </div>
        </div>
    </div>
    </div>
    <?php include(__DIR__ . "/includes/footer.php") ?>
    <!-- Bootstrap JS and Popper.js scripts (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>