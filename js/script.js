$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
  //toggle textarea
  $(document).on("click", ".add_text", function () {
    let element = $(this).parentsUntil(".lesson_div");
    element.siblings(".add_text_cover").toggle();
  });

  $(document).on("click", ".delete_file", function () {
    //reset fileUpload
    let element1 = $(this).parent();
    element1.children("input.fileUpload").val(null);

    //empty textarea
    let element2 = $(this).parentsUntil(".lesson_div");
    let element3 = element2.siblings(".add_text_cover");
    element3.children("textarea.add_text_field").val("");

    //hide textarea
    let element5 = $(this).parentsUntil(".lesson_div");
    element5.siblings(".add_text_cover").hide();

    //Hide lesson
    let element6 = $(this).parent().parent().parent();
    element6.hide();
  });

  let x = 1;
  $(".addNewFile").on("click", function () {
    x++;
    $(this).before(`
    <div class="row home_link p-2 lesson_div">
        <div class="form-group col-md-12 lesson_div_second">
            <div class="input-group lesson_div_first">
            <input
                type="file"
                name="file${x}"
                class="form-control p-2 pt-2 bg-light fileUpload"
            />
            <span
                class="input-group-addon pl-3 pr-3 text-white hand bg-info ml-1 add_text"
                data-toggle="tooltip"
                title="Add Text"
            >
                <span class="mdi mdi-file-edit-outline mdi-24px"></span>
            </span>
            <span
                class="input-group-addon pl-3 pr-3 text-white hand bg-danger ml-1 delete_file"
                data-toggle="tooltip"
                title="Delete"
            >
                <span class="mdi mdi-delete-outline mdi-24px"></span>
            </span>
            </div>
        </div>
        <div class="form-group col-md-12 add_text_cover hide">
            <textarea
            class="form-control add_text_field"
            rows="3"
            name="text${x}"
            placeholder="Type here..."
            ></textarea>
        </div>
        </div>
  `);
  });

});
