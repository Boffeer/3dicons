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

      // window.location.origin + "/wp-content/themes/c21/send.php",
      // let response = await fetch(ajaxUrl, {
      //   method: "POST",
      //   body: body,
      // });
      // let result = await response.text();
      // console.log(result);

      // let response = await fetch("http://3dicons.loc/wp-admin/admin-ajax.php", {
      //   headers: {
      //     accept: "*/*",
      //     "accept-language": "ru,en-US;q=0.9,en;q=0.8,fr;q=0.7",
      //     "cache-control": "no-cache",
      //     "content-type": "application/x-www-form-urlencoded; charset=UTF-8",
      //     pragma: "no-cache",
      //     "x-requested-with": "XMLHttpRequest",
      //   },
      //   referrer: "http://3dicons.loc/contact/",
      //   referrerPolicy: "strict-origin-when-cross-origin",
      //   body: body,
      //   method: "POST",
      //   mode: "cors",
      //   credentials: "include",
      // });

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
