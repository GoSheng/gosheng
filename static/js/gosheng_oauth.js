(function () {
    let oauth_all = document.querySelectorAll("[id^=oauth_]");
    let ajax_url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
    let url = gosheng_wp_root_directory;
    if (oauth_all) {
        for (let oauth_all_length = oauth_all.length, i = 0; i < oauth_all_length; i++) {
            oauth_all[i].addEventListener("click", function (e) {
                switch (e.target.parentElement.id) {
                    case "oauth_github":
                        gosheng_oatuth_github();
                        break;
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
                },
                error: function (data) {
                    console.log("github登录出错");
                    console.log(data);
                }
            })
        }
    }
})();