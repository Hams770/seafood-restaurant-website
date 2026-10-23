<?php
session_start();
if (isset($_SESSION["CustomerID"])) {
    $CustomerID = $_SESSION["CustomerID"];
    include(__DIR__ . "/includes/db.php");

    $sql = $conaction->prepare("SELECT item_name, TotalAmount, OrderDate FROM orders WHERE CustomerID='$CustomerID';");
    $sql->execute();
    $items_coustomer = $sql->fetchAll();
    $count = $sql->rowCount();
    if ($count > 0) {

    } else {
        echo '<div class="alert alert-danger" role="alert">
        NO DATA FOUND!</div>';
    }
} else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include(__DIR__ . "/includes/header.php") ?>

<body class="container mt-5">
    <div class=" p-5 mt-5 m-auto">
        <table class="table w-75 mt-5 p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">ORDER TIME</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items_coustomer as $items_coustomer) {

                    ?>
                    <tr>
                        <td>
                            <?php echo $items_coustomer[0] ?>
                        </td>
                        <td>
                            <?php echo $items_coustomer[1] ?>
                        </td>
                        <td>
                            <?php echo $items_coustomer[2] ?>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>
<?php include(__DIR__ . "/includes/footer.php") ?>

</html>