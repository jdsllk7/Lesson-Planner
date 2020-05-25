<?php include 'header.php'; ?>
<?php
if (isset($_COOKIE["userId"])) {
  header('Location:index.php');
}
?>

<br />
<br />

<section class="site-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="form-wrap">
          <h2 class="mb-4">Login into your account</h2>

          <!-- Login Form -->
          <?php include 'db/login_db.php'; ?>
          <form method="post" id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Employee No.</label>
                <input type="number" name="eNumber" class="form-control py-2" />
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12 form-group">
                <label for="name">Password</label>
                <input type="password" name="password" class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input id="loginSubmitBtn" type="button" value="Login" class="btn btn-primary px-5 py-2" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>