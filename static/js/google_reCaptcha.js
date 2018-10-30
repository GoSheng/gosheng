(function () {
    if (gosheng_google_reCaptcha_site_key) {
        let body = document.querySelector("body");
        grecaptcha.ready(function () {
            switch (body.classList.contains("home")) {
                case true:
                    var action_type = "homepage";
                    break;
                default:
                    var action_type = "other";
                    break;
            }
            grecaptcha.execute(gosheng_google_reCaptcha_site_key, {action: action_type})
                .then(function (token) {
                    let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
                    let data = {
                        action: "GoSheng_recaptcha",
                        token: token,
                    };
                    $.ajax({
                        type: "post",
                        url: url,
                        data: data,
                        dataType: "text",
                        success: function (data) {
                            GoSheng_reCaptcha_score(data);
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    })
                });
        });

        function GoSheng_reCaptcha_score(data) {
            let results = JSON.parse(data);
            if (results.success === true) {
                let num_pow = Math.pow(10, 17);
                // console.log(1 - results.score);
                // console.log((1 - results.score) * num_pow);
                let num = (1 - results.score) * num_pow;
                let num_1 = 1 * num_pow;
                let num_2 = 2 * num_pow;
                let num_3 = 3 * num_pow;
                let num_4 = 4 * num_pow;
                let num_5 = 5 * num_pow;
                let num_6 = 6 * num_pow;
                let num_7 = 7 * num_pow;
                let num_8 = 8 * num_pow;
                let num_9 = 9 * num_pow;
                let number_value = num > num_1 ? (num > num_2 ? (num > num_3 ? (num > num_4 ? (num > num_5 ? (num > num_6 ? (num > num_7 ? (num > num_8 ? (num > num_9 ? 9 : 9) : 8) : 7) : 6) : 5) : 4) : 3) : 2) : 1;
                switch (number_value) {
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                        break;
                    default:
                        layer.open({
                            content: "建站不易，请手下留情。",
                        });
                        break;
                }
            } else {
                layer.open({
                    content: "页面加载出错，请刷新本页面。",
                    time: 8,
                });
            }
        }
    }
})();