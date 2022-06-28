(() => {
  const forms = document.querySelectorAll(".form__contact");

  function paramsToObject(entries) {
    const result = {};
    for (const [key, value] of entries) {
      // each 'entry' is a [key, value] tupple
      result[key] = value;
    }
    return result;
  }

  forms.forEach((form) => {
    form.addEventListener("submit", async (event) => {
      console.log("form send");
      event.preventDefault();

      let params = new FormData(form);
      // let params2 = new URLSearchParams(new FormData(form));
      let body = paramsToObject(params);
      body["action"] = "send_contact";
      let ajaxUrl = window.location.origin + "/wp-admin/admin-ajax.php";

      $.ajax({
        url: ajaxUrl,
        method: "POST",
        data: body,
        // dataType: 'json',
        beforeSend: function () {
          // console.log('Отправляем')
          // $(".callback").text("Отправляем...");
        },
        success: function (response) {
          // $('#submit-ajax').html(response);
          console.log(response);
        },
        error: function (error) {
          console.log("error; ", error);
        },
      });
    });
  });
})();
