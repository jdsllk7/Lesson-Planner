<?php include 'header.php'; ?>
<?php
if (!isset($_COOKIE["userId"])) {
  header('Location:login.php');
}
?>

<main class="my-5">
  <?php include 'db/createLesson_db.php'; ?>
  <form class="container" id="lessonForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on" enctype="multipart/form-data">
    <div id="wizard">
      <!---------------------- First view ------------------------>
      <h3>
        <div class="media">
          <div class="bd-wizard-step-icon bg-white text-dark">
            <i class="mdi mdi-file-edit"></i>
          </div>
          <div class="media-body">
            <div class="bd-wizard-step-title pt-2">Start</div>
          </div>
        </div>
      </h3>
      <section>
        <div class="content-wrapper">
          <h4 class="section-heading">Select Grade, Subject, Topic & Lesson Name</h4>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="firstName">Grade</label>
              <div class="form-group">
                <select class="form-control p-0 pl-3 bg-light" name="grade">
                  <option value="">- Select -</option>
                  <option value="8">Eight</option>
                  <option value="9">Nine</option>
                  <option value="10">Ten</option>
                </select>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="firstName">Subject</label>
              <div class="form-group">
                <select class="form-control p-0 pl-3 bg-light" name="subject">
                  <option value="">- Select -</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="English">English</option>
                  <option value="Science">Science</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6">
              <label for="firstName">Topic</label>
              <div class="form-group">
                <input type="text" class="form-control bg-light" name="topic" placeholder="Type here..." />
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="firstName">Lesson Name</label>
              <div class="form-group">
                <input type="text" class="form-control bg-light" name="lessonsName" placeholder="Type here..." />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!---------------------- Second view ------------------------>
      <h3>
        <div class="media">
          <div class="bd-wizard-step-icon bg-white text-dark">
            <i class="mdi mdi-file-edit"></i>
          </div>
          <div class="media-body">
            <div class="bd-wizard-step-title pt-2">Prepare Lesson</div>
          </div>
        </div>
      </h3>
      <section>
        <div class="content-wrapper lesson_cover">
          <h4 class="section-heading">Upload Lesson Files</h4>

          <div class="row home_link p-2 lesson_div">
            <div class="form-group col-md-12 lesson_div_second">
              <div class="input-group lesson_div_first lesson_div_og">
                <input type="file" name="file1" class="form-control p-2 pt-2 bg-light fileUpload" accept=".jpg,.mp4,.png,.pdf,.jpeg,.gif,.mkv,.avi,.webm,.wmv,.3gp"/>
                <span class="input-group-addon pl-3 pr-3 text-white hand bg-info ml-1 add_text" data-toggle="tooltip" title="Add Text">
                  <span class="mdi mdi-file-edit-outline mdi-24px"></span>
                </span>
                <span class="input-group-addon pl-3 pr-3 text-white hand bg-danger ml-1 delete_file" data-toggle="tooltip" title="Delete">
                  <span class="mdi mdi-delete-outline mdi-24px"></span>
                </span>
              </div>
            </div>
            <div class="form-group col-md-12 add_text_cover hide">
              <textarea class="form-control add_text_field" rows="3" name="fileText1" placeholder="Type here..."></textarea>
            </div>
          </div>

          <input type="hidden" name="fileCount" class="fileCount" value="1">
          <button type="button" class="btn btn-light text-dark m-2 align-right addNewFile" data-toggle="tooltip" title="Add New Upload">
            <span class="mdi mdi-plus mdi-24px"></span>
          </button>
        </div>
      </section>

      <!---------------------- Third view ------------------------>
      <h3>
        <div class="media">
          <div class="bd-wizard-step-icon bg-white text-dark">
            <i class="mdi mdi-file-edit"></i>
          </div>
          <div class="media-body">
            <div class="bd-wizard-step-title pt-2">Finish</div>
          </div>
        </div>
      </h3>
      <section>
        <div class="content-wrapper row">
          <div class="col-md-8">
            <h4 class="section-heading mb-5">Are you done?</h4>
            <h5 class="section-heading mb-5">
              If you are, please click 'Finish' below to save your lesson.
            </h5>
          </div>
          <div class="col-md-4">
            <figure>
              <img src="images/lady41.jpg" alt="Image placeholder" class="img-fluid" />
            </figure>
          </div>
        </div>
      </section>
    </div>
  </form>
</main>

<?php include 'footer.php'; ?>