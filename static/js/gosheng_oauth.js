(function () {
    let oauth_login_list=document.querySelector("#oauth_login_list");
    let oauth_all = oauth_login_list.querySelectorAll("[id^=oauth_]");
    let ajax_url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
    if (oauth_all) {
        for (let oauth_all_length = oauth_all.length, i = 0; i < oauth_all_length; i++) {
            oauth_all[i].addEventListener("click", function (e) {
                switch (e.target.parentElement.id) {
                    case "oauth_github":
                        gosheng_oatuth_github();
                        break;
                    case "oauth_qq":
                    case "oauth_weibo":
                    case "oauth_weixin":
                    case "oauth_alipay":
                    case "oauth_google":
                    case "oauth_facebook":
                    case "oauth_twitter":
                    case "oauth_linkedin":
                    default:
                        let e_dataset_val = e.target.parentElement.dataset["originalTitle"];
                        layer.open({
                            content: e_dataset_val + '正在开发中。',
                            time: 5,
                        });
                        break;
                }
            })
        }

        function gosheng_oatuth_github() {
            let data = {
                action: "GoSheng_oauth",
                type: "github",
            };
            $.ajax({
                type: "post",
                url: ajax_url,
                data: data,
                dataType: "text",
                success: function (data) {
                    window.location.href = data;
                    // window.open(data, "_blank", "toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=500")
                },
                error: function (data) {
                    console.log("github登录出错");
                    console.log(data);
                }
            })
        }
    }
})();
//更多登录方式
(function () {
    let collapse_oauth_login = document.querySelector("#collapse_oauth_login");
    let oauth_login_list = document.querySelector("#oauth_login_list");
    if (collapse_oauth_login) {
        collapse_oauth_login.addEventListener("click", collapse_oauth_login_toggle);
        collapse_oauth_login.addEventListener("click", collapse_oauth_login_toggle_icon);
    }

    function collapse_oauth_login_toggle() {
        if (oauth_login_list) {
            $("#oauth_login_list").collapse("toggle");
        }
    }

    function collapse_oauth_login_toggle_icon() {
        let i = collapse_oauth_login.querySelector("i");
        $("#oauth_login_list").on('hidden.bs.collapse', function () {
            i.classList.remove("fa-chevron-down");
            i.classList.add("fa-chevron-up");
        });
        $("#oauth_login_list").on('shown.bs.collapse', function () {
            i.classList.remove("fa-chevron-up");
            i.classList.add("fa-chevron-down");
        });
    }
})();