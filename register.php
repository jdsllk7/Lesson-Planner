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
          <h2 class="mb-4">Register New Account</h2>

          <!-- Register Form -->
          <?php include 'db/register_db.php'; ?>
          <form method="post" id="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">First Name</label>
                <input type="text" name="fName" required class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Last Name</label>
                <input type="text" name="lName" required class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Employer No.</label>
                <input required type="number" name="eNumber" class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Password</label>
                <input required type="password" name="password" class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">Re-enter Password</label>
                <input required type="password" name="rePassword" class="form-control py-2" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input id="registerSubmitBtn" type="button" value="Submit" class="btn btn-primary px-5 py-2" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>