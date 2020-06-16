<?php include 'header.php'; ?>

<section class="site-section element-animate p-4" id="section-counter">
  <div class="container">
    <!-- start row -->
    <div class="row">
      <div class="col-lg-8 mt-3">
        <div class="media-body">

          <?php
          if (isset($_GET["lessonId"])) {

            $data = mysqli_query($conn, "SELECT * FROM lesson where lessonId = " . $_GET["lessonId"]);
            $result = mysqli_fetch_assoc($data);

            echo '
            <h4 class="heading">Lesson: ' . $result["lessonsName"] . '</h4>
            <p class="m-0">Grade: ' . $result["grade"] . '</p>
            <p class="m-0">Subject: ' . $result["subject"] . '</p>
            <p class="m-0">Topic: ' . $result["topic"] . '</p>
            ';
          } else {
            header('Location:index.php');
          }
          ?>

        </div>
      </div>
      <div class="col-lg-4">
        <figure>
          <img style="height: 200px;" src="images/books2.png" alt="Image placeholder" class="img-fluid" />
        </figure>
      </div>
    </div>
    <hr class="p-4" />

    <!--------------------------- start item --------------------------->
    <?php
    $result = mysqli_query($conn, "SELECT * FROM lessonFiles where lessonId = " . $_GET["lessonId"]);

    if (mysqli_num_rows($result) > 0) {
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        $fileType = '';

        if ($row["fileType"] == 'video') {
          $fileType = '
          <div class="embed-responsive embed-responsive-16by9">
            <video controls>
              <source type="video/mp4" class="embed-responsive-item" style="height: 500px;" src="' . $row["filePath"] . '">
            </video>
          </div>
          ';
        } elseif ($row["fileType"] == 'pdf') {
          $fileType = '
          <embed style="height: 400px; width: 500px" src="' . $row["filePath"] . '" />
          ';
        } elseif ($row["fileType"] == 'image') {
          $fileType = '
          <figure style="height: 500px; width: 500px;">
            <img width="500" height="600" src="' . $row["filePath"] . '" alt="Image placeholder" class="img-fluid" />
          </figure>
          ';
        }

        echo '
        <div class="row">
          <div class="col-lg-6">
            <div class="media-body">
              <h4 class="heading">
                <i class="mdi mdi-arrow-right-bold-circle mdi-24px"></i>
                Item: ' . $count . '
              </h4>
              <br />
            </div>
            ' . $fileType . '
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="text mb-5">
                <div class="form-group">
                  <h5 class="inline">Notes...</h5>
                  <span onclick="playStopAudio(\'' . $row["fileText"] . '\')" data-toggle="tooltip" title="Click to Play Audio Notes" class="btn mdi mdi-speaker-wireless mdi-24px speaker m-1"></span>
                  <span onclick="playStopAudio(\'stop\')" data-toggle="tooltip" title="Stop Playing Audio Notes" class="btn mdi mdi-speaker-off mdi-24px speaker m-1"></span>
                  <textarea class="form-control bg-white" rows="15" placeholder="Notes..." disabled>' . $row["fileText"] . '</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="p-4" />
        ';
      }
    } else {
      echo "<p>No lessons file attached</p>";
    }
    ?>
    <!--------------------------- end item --------------------------->



    <!--------------------------- start item template --------------------------->
    <!-- <div class="row">
      <div class="col-lg-6">
        <div class="media-body">
          <h4 class="heading">
            <i class="mdi mdi-arrow-right-bold-circle mdi-24px"></i>
            Item: 2
          </h4>
          <br />
        </div>
        <figure>
          <img style="max-height: 500px;" src="images/books1.png" alt="Image placeholder" class="img-fluid" />
        </figure>
      </div>
      <div class="col-lg-5 ml-auto">
        <div class="block-15">
          <div class="text mb-5">
            <div class="form-group">
              <h5 class="inline">Notes...</h5>
              <span onclick="playStopAudio('<?php echo $dummy ?>')" data-toggle="tooltip" title="Click to Play Audio Notes" class="btn mdi mdi-speaker-wireless mdi-24px speaker m-1"></span>
              <span onclick="playStopAudio('stop')" data-toggle="tooltip" title="Stop Playing Audio Notes" class="btn mdi mdi-speaker-off mdi-24px speaker m-1"></span>
              <textarea class="form-control bg-white" rows="15" name="text1" placeholder="Notes..." disabled><?php echo $dummy ?></textarea>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--------------------------- end item template ----------------------------->

  </div>
</section>
<!-- END section -->

<?php include 'footer.php'; ?>