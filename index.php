<?php include 'header.php'; ?>

<section class="site-section element-animate" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <figure><img src="images/teacher.png" alt="Image placeholder" class="img-fluid"></figure>
      </div>
      <div class="col-lg-5 ml-auto">
        <div class="block-15">
          <div class="heading">
            <h2>Lesson Planner</h2>
          </div>
          <div class="text mb-5">
            <p>Create lessons that are engaging and fun for you and your pupils</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6">
            <?php
            if (isset($_COOKIE["userId"])) {
              $data = mysqli_query($conn, "SELECT * FROM lesson where userId = " . $_COOKIE["userId"]);
              $noLessons = '';
              if (mysqli_num_rows($data) == 0) {
                $noLessons = 'data-toggle="tooltip" title="You have no prepared lessons at the moment"';
              }
              echo '
              <a href="#lessons" ' . $noLessons . ' class="block-18 d-flex align-items-center home_link p-4">
                <div class="icon mr-4">
                  <span class="flaticon-books text-dark"></span>
                </div>
                <div class="text">
                  <strong class="text-dark">' . mysqli_num_rows($data) . '</strong>
                  <span class="text-dark">View My Lessons</span>
                </div>
              </a>';
            } else {
              echo '
              <a href="login.php" class="block-18 d-flex align-items-center home_link p-4">
              <div class="icon mr-4">
                <span class="flaticon-books text-dark"></span>
              </div>
              <div class="text">
                <span class="text-dark">View My Lessons</span>
              </div>
            </a>';
            }
            ?>
          </div>
          <div class="col-md-6">
            <a href="createLesson.php" class="block-18 d-flex align-items-center home_link p-4">
              <div class="icon mr-4">
                <span class="flaticon-open-book text-dark"></span>
              </div>
              <div class="text">
                <strong></strong>
                <span class="text-dark">Create Lesson</span>
              </div>
            </a>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- END section -->


<?php
if (isset($_COOKIE["userId"])) {

  $data = mysqli_query($conn, "SELECT * FROM lesson where userId = " . $_COOKIE["userId"]);

  if (mysqli_num_rows($data) > 0) {

    $result = mysqli_fetch_assoc($data);

    echo '<a name="lessons"></a>';

    echo '<div class="container mt-5 mb-0 p-0">
    <h2 class="heading text-left">My Lessons</h2>
    <i>Number: ' . mysqli_num_rows($data) . '</i>
  </div>';

    echo '<section class="site-section element-animate">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="media block-6 d-block">
            <div class="icon mb-3"><span class="flaticon-open-book"></span></div>
            <div class="media-body">
              <h3 class="heading">Grade: ' . $result["grade"] . '</h3>
              <p class="m-0">Lesson Name: ' . $result["lessonsName"] . '</p>
              <p class="m-0">Subject: ' . $result["subject"] . '</p>
              <p class="m-0">Topic: ' . $result["topic"] . '</p>
              <p><a href="/viewLesson.php?lessonId=' . $result["lessonId"] . '" class="more">View Lesson <span class="ion-arrow-right-c"></span></a></p>
            </div>
          </div>
        </div>';

    echo '</div>
    </div>
  </section>';
  }
}
?>
<!-- END section -->

<?php include 'footer.php'; ?>