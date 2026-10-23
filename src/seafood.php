<body>
  <!-- navbar -->
  <?php include(__DIR__ . "/includes/header.php") ?>
  <!-- pages -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/proj2.jpg" width="1500" height="700" alt="Seafood ">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Fresh Seafood Delights</h1>
            <p>Experience the finest seafood dishes prepared with care and precision.</p>
            <input type="button" value="See the Menu" class="btn btn-success" onclick="showMenu();">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/proj2.jpg" width="1500" height="700" alt="Seafood ">
        <div class="container">
          <div class="carousel-caption">
            <h1>to contact us!</h1>
            <p> Contact us for more details </p>
            <button onclick="showCo()" class="btn btn-success text-white">Contact</button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/proj2.jpg" width="1500" height="700" alt="Seafood ">
        <div class="container">
          <div class="carousel-caption">
            <h1>Book Now!</h1>
            <p> You must book an appointment before the restaurant expands to ensure that there is space available </p>
            <button class=" btn btn-success" onclick="showBo()">Book Now!</button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </div>
  <?php include(__DIR__ . "/includes/footer.php") ?>
  </div>
  </div>

  <script>
    function showMenu() {
      window.location.href = 'Menu.php';
      return false;
    }

    function showCo() {
      window.location.href = 'Contact.php';
      return false;
    }

    function showBo() {
      window.location.href = 'book.php';
      return false;
    }
  </script>
</body>

</html>