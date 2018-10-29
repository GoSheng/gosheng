(function () {
    let oauth_all = document.querySelectorAll("[id^=oauth_]");
    if (oauth_all) {
        for (let oauth_all_length = oauth_all.length, i = 0; i < oauth_all_length; i++) {
            oauth_all[i].addEventListener("click", function (e) {
                let e_dataset_val = e.target.parentElement.dataset["originalTitle"];
                layer.open({
                    content: e_dataset_val + '正在开发中。',
                    time: 5,
                });
            })

        }
    }
})();