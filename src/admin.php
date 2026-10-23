<?php
include(__DIR__ . "/includes/db.php");
$sql = $conaction->prepare("SELECT * FROM foods");
$sql->execute();
$items_coustomer = $sql->fetchAll();
$count = $sql->rowCount();
if ($count > 0) {
} else {


}


?>

<?php
include(__DIR__ . "/includes/header.php");
?>
<div class=" container p-5 mt-5 text-center">
    <h5 class="  text-bg-success rounded text-white mt-5  p-4 ">WELACME ADMIN</h5>
    <div class=" p-5 mt-5 m-auto">
        <div>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" class=" form-control">
                <label for="">Dleate item By item name </label> <input type="text" name="name_item" class="">
                <input type="submit" class=" btn btn-danger p-3 m-3" value="Dleate">
                <?php if (isset($_POST['name_item'])) {
                    $name_item = $_POST['name_item'];
                    $sql = $conaction->prepare("DELETE FROM foods WHERE food_name='$name_item';");
                    $sql->execute();
                    echo '<p class=" text-bg-success rounded p-2">DELATE DONE </p>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    DONT FUND !!</div>';
                } ?>
            </form>
        </div>
        <table class="table w-75 mt-5 p-4 text-center">
            <thead>
                <tr>
                    <th scope="col">ITEM NAME</th>
                    <th scope="col">PRICE </th>
                    <th scope="col">ITEM IMG</th>
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
</div>
<?php
include(__DIR__ . "/includes/footer.php")
    ?>