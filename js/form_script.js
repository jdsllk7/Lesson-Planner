$(document).ready(function () {
  /************ lesson form *************/
  $(document).on("click", "a[href$='#finish']", function (e) {
    e.preventDefault();

    console.log($("select[name=grade]").val(), $("select[name=subject]").val(), $("input[name=topic]").val(), $("input[name=lessonsName]").val())
    if (!$("select[name=grade]").val() || !$("select[name=subject]").val() || !$("input[name=topic]").val() || !$("input[name=lessonsName]").val()) {
      displayAlertMsg('Fill in the form correctly before you submit', false)
    }else{
      $("#lessonForm").submit(); // Submit the form in js
    }
  });

  /************ login form *************/
  $(document).on("click", "#loginSubmitBtn", function (e) {
    e.preventDefault();
    console.log($("input[name=eNumber]").val(), $("input[name=password]").val())
    if (!$("input[name=eNumber]").val() || !$("input[name=password]").val()) {
      return displayAlertMsg("Incorrect credentials", false);
    } else {
      return $("#loginForm").submit(); // Submit the form in js
    }
  });

  /************ register form *************/
  $(document).on("click", "#registerSubmitBtn", function (e) {
    e.preventDefault();
    console.log($("input[name=eNumber]").val(), $("input[name=password]").val(), $("input[name=rePassword]").val())
    if (!$("input[name=eNumber]").val() || !$("input[name=password]").val() || !$("input[name=rePassword]").val()) {
      return displayAlertMsg("Fill in the form correctly before you submit", false);
    } else {
      return $("#registerForm").submit(); // Submit the form in js
    }
  });

  function displayAlertMsg(msg, type) {
    $(".toast-body").text(msg);
    if (type === true) {
      $(".toast-body").css("color", "green");
    } else {
      $(".toast-body").css("color", "red");
    }
    $(".toast").toast("show");
  } //end alertMsg()
});