<?php
session_start();
if (isset($_SESSION["CustomerID"])) {
  include(__DIR__ . "/includes/db.php");
  $CustomerID = $_SESSION['CustomerID'];
  echo $CustomerID;
  $stmt = $conaction->prepare("SELECT * FROM customers WHERE CustomerID='$CustomerID'");
  $stmt->execute();
  $data_coustomer = $stmt->fetch();
  $_SESSION["FirstName"] = $data_coustomer["FirstName"];
  $_SESSION["LastName"] = $data_coustomer["LastName"];
  $_SESSION["Email"] = $data_coustomer["Email"];
  $_SESSION["Phone"] = $data_coustomer["Phone"];
} else {
  header("location: login.php");
}
?>

<body class="container mt-5">

  <!-- navbar -->
  <?php include(__DIR__ . "/includes/header.php") ?>
  <section class=" container py-5">
    <div class="info-coustomer">
      <h5>Welcame
        <?php echo $_SESSION["FirstName"] . " " . $_SESSION["LastName"]; ?>
      </h5>
      <h5>Email:
        <?php echo $_SESSION["Email"]; ?>
      </h5>
      <h5>Phone Number :
        <?php echo $_SESSION["Phone"]; ?>
      </h5>
    </div>
    <div class="form-group mt-5 p-2 row d-flex  justify-content-between">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        Preferred Time: <input type="time" name="preferredTime" class="col-4 m-3" />
        <label for="numberOfPeople">Number of People:</label>
        <select name="numberOfPeople" id="numberOfPeople" class="col-4 m-3">
          <option selected>Choose...</option>
          <option value="1">1-4</option>
          <option value="2">4-6</option>
          <option value="3">6-10</option>
          <option value="4">Above 10</option>
        </select>
        <p>Do you want a copy of your booking sent to your email?</p>
        <label>
          <input type="radio" name="emailPreference" value="Yes"> Yes
        </label>
        <label>
          <input type="radio" name="emailPreference" value="No" checked> No
        </label>
        <input type="submit" name="submit" class="btn btn-dark" />
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD'] == "GET" and isset($_GET["submit"]) and isset($_GET["preferredTime"]) and !empty($_GET["preferredTime"]) and isset($_GET["numberOfPeople"])) {
        if ($_GET["emailPreference"] == "Yes") {
          echo '<p class=" text-bg-success rounded p-2">You Will recive Massage in Email</p>';
        } else {
          echo '<p class=" text-bg-warning rounded p-2">You Will not recive Massage in Email</p>';
        }
      } else {
        echo '<p class="  text-bg-danger rounded p-2">PLS MAKE SURE YOU CHOSE EVRYTHENG</p>';
      }
      ?>
    </div>
  </section>

  <?php
  include(__DIR__ . "/includes/footer.php") ?>
</body>

</html>