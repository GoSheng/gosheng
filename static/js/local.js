const GoSheng_href = window.location.href;
const GoSheng_origin = window.location.origin;
const GoSheng_Body_clientWidth = document.body.clientWidth;//网页可见区域宽
const GoSheng_Body_clientHeight = document.body.clientHeight;//网页可见区域高
const GoSheng_Body_offsetWidth = document.body.offsetWidth;//网页可见区域宽（包括边线的宽）
const GoSheng_Body_offsetHeight = document.body.offsetHeight;//网页可见区域高（包括边线的高）
const GoSheng_Body_scrollWidth = document.body.scrollWidth;//网页正文全文宽
const GoSheng_Body_scrollHeight = document.body.scrollHeight;//网页正文全文高
const GoSheng_Body_scrollTop = document.body.scrollTop;//网页被卷去的高
const GoSheng_Body_scrollLeft = document.body.scrollLeft;//网页被卷去的左
const GoSheng_Window_screenTop = window.screenTop;//网页正文部分上
const GoSheng_Window_screenLeft = window.screenLeft;//网页正文部分左
const GoSheng_Window_Screen_Width = window.screen.width;//屏幕分辨率的宽
const GoSheng_Window_Screen_Heigth = window.screen.height;//屏幕分辨率的高
const GoSheng_Window_Screen_availWidth = window.screen.availWidth;//屏幕可用工作区高度
const GoSheng_Window_Screen_availHeight = window.screen.availHeight;//屏幕可用工作区宽度
let notyf = new Notyf({
    delay: 7000,
    alertIcon: 'fas fa-exclamation-circle',
    confirmIcon: 'fas fa-check-circle'
});
//登录模态框动画
(function () {
    let modalLogin = document.querySelector("#modalLogin");
    let reward_modal = document.querySelector("#reward_modal");

    function modalTabData(e) {
        let getModalTabData = e.relatedTarget.dataset.modaltab;
        if (getModalTabData) $("#modalTab_" + getModalTabData).tab('show');
    }

    function modalShow(modal) {
        modal.classList.remove('zoomOut');
        modal.classList.add('animated', 'zoomIn');
    }

    function modalHide(modal) {
        modal.classList.remove('zoomIn');
        modal.classList.add('zoomOut');
    }

    if (modalLogin) {
        "use strict";
        $('#modalLogin').on('show.bs.modal', function (e) {
            modalShow(modalLogin);
            modalTabData(e);
        });
        $('#modalLogin').on('hide.bs.modal', function (e) {
            modalHide(modalLogin);
        });
    } else if (reward_modal) {
        "use strict";
        $('#reward_modal').on('show.bs.modal', function (e) {
            modalShow(reward_modal);
            modalTabData(e);
        });
        $('#reward_modal').on('hide.bs.modal', function (e) {
            modalHide(reward_modal);
        });
    }

})();

//搜索框
(function () {
    if (document.body.querySelector("#Gosheng_searchForm")) {
        let Gosheng_search = document.body.querySelector("#Gosheng_searchForm");
        let search = Gosheng_search.querySelector("#s");
        let search_history = Gosheng_search.querySelector("#search_history");
        let searchSubmit = Gosheng_search.querySelector("#searchSubmit");
        let search_history_width = function () {
            search_history.style.minWidth = search.offsetWidth + "px";
            window.addEventListener("resize", search_history_width);
        };
        search_history_width();

        search.addEventListener("focus", function () {
            if (search.value.length == 0) {
                foreach_history();
                GoSheng_selection_value();
                GoSheng_delete_value();
            }
        });
        search.addEventListener("blur", function () {
            search_history.style.display = "none";
            GoSheng_del_history_list();
        });
        searchSubmit.addEventListener("click", GoSheng_search_value);
        searchSubmit.addEventListener("click", function () {
            search.placeholder = "";
        });

        function GoSheng_search_value() {
            GoSheng_set_history();
        }

        function GoSheng_set_history() {
            let gosheng_search_history = search.value;
            if (gosheng_search_history.length > 0) {
                if (GoSheng_GetCookie("gosheng_search_history")) {
                    let search_history_array_old = JSON.parse(GoSheng_GetCookie("gosheng_search_history"));
                    if (search_history_array_old.indexOf(gosheng_search_history)) {
                        search_history_array_old.unshift(gosheng_search_history);
                        GoSheng_SetCookie("gosheng_search_history", JSON.stringify(search_history_array_old), 365);
                    }
                } else {
                    if (gosheng_search_history.length > 0) {
                        let search_history_array = [];
                        search_history_array.unshift(gosheng_search_history);
                        GoSheng_SetCookie("gosheng_search_history", JSON.stringify(search_history_array), 365);
                    }
                }
            }
        }

        function foreach_history() {
            if (GoSheng_GetCookie("gosheng_search_history")) {
                let search_history_array_old = JSON.parse(GoSheng_GetCookie("gosheng_search_history"));
                if (search_history_array_old && search_history_array_old.length > 0) {
                    search_history.style.display = "block";
                    for (let i of Object.values(search_history_array_old)) {
                        GoSheng_create_history_list(i);
                    }
                }
            }
        }

        function GoSheng_create_history_list(e) {
            let history_li = document.createElement("li");
            let history_div = document.createElement("div");
            let history_span_text = document.createElement("span");
            let history_span_a = document.createElement("a");
            let history_span_tips = document.createElement("span");
            history_li.className = "history_list";
            history_div.className = "history_data";
            history_span_text.className = "history_text";
            history_span_text.innerText = e;
            history_span_a.className = "btn_delete";
            history_span_a.innerText = "删除";
            history_span_a.href = "javascript:;";
            history_span_tips.className = "history_tips";
            history_span_tips.innerText = "该记录已经删除";
            search_history.appendChild(history_li);
            history_li.appendChild(history_div);
            history_div.appendChild(history_span_text);
            history_div.appendChild(history_span_a);
            history_div.appendChild(history_span_tips);
        }

        function GoSheng_del_history_list() {
            let list = search_history.querySelectorAll(".history_list");
            for (let list_length = list.length, i = 0; i < list_length; i++) {
                list[i].parentNode.removeChild(list[i]);
            }
        }

        function GoSheng_selection_value() {
            let history_list = search_history.querySelectorAll(".history_list");
            for (let history_list_length = history_list.length, i = 0; i < history_list_length; i++) {
                history_list[i].addEventListener("mouseover", GoSheng_placeholder_value)
            }
        }

        function GoSheng_placeholder_value(e) {
            if (e.target.querySelector(".history_text")) {
                search.placeholder = e.target.querySelector(".history_text").innerText;
            }
            e.target.addEventListener("mousedown", GoSheng_set_value)
        }

        function GoSheng_set_value(e) {
            if (e.target.querySelector(".history_text")) {
                search.value = e.target.querySelector(".history_text").innerText;
            }
        }

        function GoSheng_delete_value() {
            let btn_delete = search_history.querySelectorAll(".btn_delete");
            for (let btn_delete_length = btn_delete.length, i = 0; i < btn_delete_length; i++) {
                btn_delete[i].addEventListener("mousedown", GoSheng_display_tips);
            }
        }

        function GoSheng_display_tips(e) {
            e.preventDefault();
            e.target.previousSibling.style.display = "none";
            e.target.nextSibling.style.display = "block";
            e.target.addEventListener("click", GoSheng_delete_cookie);
        }

        function GoSheng_delete_cookie(e) {
            let x = e.target.previousSibling.innerText;
            let history_array = JSON.parse(GoSheng_GetCookie("gosheng_search_history"));
            let array_index = history_array.indexOf(x);
            if (array_index >= 0) {
                history_array.splice(history_array.indexOf(x), 1);
                GoSheng_SetCookie("gosheng_search_history", JSON.stringify(history_array), 365);
            } else {
                console.log("其他情况发生");
            }
        }

    }
})();

//滚动监听
(function () {
    let headerNav = document.querySelector("#headerNav");
    $("#floatTools>a").tooltip({
        placement: "left",
    });
    if (headerNav) {
        let floatTools = document.querySelector("#floatTools");
        let floatToolSidebar = document.querySelector("#floatToolSidebar");
        let floatToolQQ = document.querySelector("#floatToolQQ");
        let floatToolComment = document.querySelector("#floatToolComment");
        let floatToolBackTop = document.querySelector("#floatToolBackTop");
        let new_scroll_position = 0;
        let last_scroll_position;
        setTimeout(scrollListener, 500);

        function scrollListener() {
            document.addEventListener('scroll', scrollSlide);
        }

        function scrollSlide() {
            last_scroll_position = window.scrollY;
            if (new_scroll_position < last_scroll_position && last_scroll_position > 49) {
                headerNav.classList.remove("slideDown");
                headerNav.classList.add("slideUp", "fixed-top");
                if (new_scroll_position < last_scroll_position && last_scroll_position > 400) {
                    floatToolQQ ? floatToolQQ.classList.remove("invisible") : "";
                    floatToolComment ? floatToolComment.classList.remove("invisible") : "";
                    floatToolBackTop ? floatToolBackTop.classList.remove("invisible") : "";
                }
            } else if (new_scroll_position > last_scroll_position) {
                headerNav.classList.remove("slideUp");
                headerNav.classList.add("slideDown", "fixed-top");
                if (last_scroll_position < 400) {
                    floatToolQQ ? floatToolQQ.classList.add("invisible") : "";
                    floatToolComment ? floatToolComment.classList.add("invisible") : "";
                    floatToolBackTop ? floatToolBackTop.classList.add("invisible") : "";
                    if (last_scroll_position < 49) {
                        headerNav.classList.remove('slideDown', "fixed-top");
                    }
                }
            }
            new_scroll_position = last_scroll_position;
        }
    }
})();
//分享功能
(function () {
    let gosheng_share = document.querySelector("#gosheng_share");
    if (gosheng_share) {
        let gosheng_share_btn = document.querySelectorAll("a[id^=gosheng_share_]");
        for (let btn_length = gosheng_share_btn.length, i = 0; i < btn_length; i++) {
            gosheng_share_btn[i].addEventListener('click', gosheng_share_fun);
        }

        function gosheng_share_fun(e) {
            e.preventDefault();
            switch (e.target.id) {
                case "gosheng_share_weibo":
                    break;
                case "gosheng_share_weixin":
                    break;
                case "gosheng_share_qq":
                    break;
                case "gosheng_share_tencent-weibo":
                    break;
                case "gosheng_share_facebook":
                    break;
                case "gosheng_share_twitter":
                    break;
                case "gosheng_share_google-plus":
                    share_google_plus_fun();
                    break;
                default:
            }
        }

        function share_weibo_fun(e) {
        }

        function share_weixin_fun(e) {
        }

        function share_qq_fun(e) {
        }

        function share_tencent_weibo_fun(e) {
        }

        function share_facebook_fun(e) {
        }

        function share_twitter_fun(e) {
        }

        function share_google_plus_fun(e) {
            let googleplusShareURL = "https://plus.google.com/share?";
            let windowFeatures = "toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=400, height=978";
            window.open(googleplusShareURL + "url=" + GoSheng_href, "_blank", windowFeatures);
        }

        let gosheng_share_weixin = document.querySelector("#gosheng_share_weixin");
        if (gosheng_share_weixin) {
            gosheng_share_weixin.addEventListener('click', display_weixin_qrcode);
        }

        function display_weixin_qrcode() {
            layer.open({
                style: 'border:none; background-color:#cccccc7d; color:#fff;',
                title: "分享页面二维码",
                content: "扫一扫二维码，打开本页面。",
                success: function () {
                    weixin_qrcode();
                    qrcode_img_center();
                },
            });
        }

        function weixin_qrcode() {
            let qrcode = new QRCode(document.getElementsByClassName('layui-m-layercont')[0], {
                text: GoSheng_href,
                width: 300,
                height: 300,
                colorDark: '#000000',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.H
            });
        }

        function qrcode_img_center() {
            let qrcode_img = document.querySelector(".layui-m-layercont img");
            if (qrcode_img) {
                qrcode_img.classList.add("mx-auto", "img-thumbnail");
            }
        }
    }
})();
//侧边栏切换按钮
(function () {
    let floatToolSidebar = document.body.querySelector("#floatToolSidebar");
    let sidebar = document.body.querySelector("#sidebar");
    let content = document.body.querySelector("#content");
    if (sidebar) {
        floatToolSidebar.classList.remove('invisible');
        floatToolSidebar.addEventListener('click', sidebarToggle);
    } else {

    }

    function sidebarToggle(e) {
        e.preventDefault();
        if (sidebar.classList.contains("d-none")) {
            sidebar.classList.remove('bounceOutRight', 'd-none');
            sidebar.classList.add('bounceInRight');
            content.classList.add('rubberBand');

            setTimeout(function () {
                content.classList.remove('rubberBand');
                content.style.maxWidth = '857px';
            }, 1000);

        } else {
            sidebar.classList.remove('bounceInRight');
            sidebar.classList.add('bounceOutRight');
            content.classList.add('rubberBand');
            setTimeout(function () {
                content.style.maxWidth = '100%';
                content.classList.remove('rubberBand');
            }, 1000);
            setTimeout(function () {
                sidebar.classList.add('d-none');
            }, 400);
        }
    }
})();
//LOGO点击
(function () {
    let logo = document.body.querySelector('#logo');
    logo ? logo.addEventListener('click', topControl) : "";
})();
//返回顶部
(function () {
    let floatToolBackTop = document.querySelector("#floatToolBackTop");
    floatToolBackTop ? floatToolBackTop.addEventListener('click', topControl) : "";
})();
//评论区显示方式
(function () {
    let floatToolComment = document.querySelector("#floatToolComment");
    let GoSheng_comment = document.querySelector("#GoSheng_comment");
    floatToolComment ? floatToolComment.addEventListener("click", floatToolComment_toggle) : "";
    floatToolComment ? floatToolComment.addEventListener("click", floatToolComment_title) : "";
    GoSheng_comment ? GoSheng_comment_area_cookie() : "";

    function floatToolComment_toggle(e) {
        e.preventDefault();
        $("#GoSheng_comment").collapse("toggle");
    }

    function floatToolComment_title(e) {
        e.preventDefault();
        let x = floatToolComment.getAttribute("data-original-title");
        switch (x) {
            case "":
            case "隐藏评论区":
                floatToolComment.setAttribute("data-original-title", "显示评论区");
                GoSheng_SetCookie("GoSheng_comment_area", "hidden", 7);
                notyf.confirm("评论区已经设置为隐藏");
                break;
            case "显示评论区":
                floatToolComment.setAttribute("data-original-title", "隐藏评论区");
                GoSheng_SetCookie("GoSheng_comment_area", "show", 7);
                notyf.confirm("评论区已经设置为可见");
                break;
            default:
                floatToolComment.setAttribute("data-original-title", "显示评论区");
                GoSheng_SetCookie("GoSheng_comment_area", "hidden", 7);
                notyf.confirm("评论区已经设置为隐藏");
                break;
        }
    }

    function GoSheng_comment_area_cookie() {
        let x = GoSheng_GetCookie("GoSheng_comment_area");
        switch (x) {
            case "":
            case "show":
                floatToolComment.setAttribute("data-original-title", "隐藏评论区");
                GoSheng_comment.classList.add("show");
                break;
            case "hidden":
                floatToolComment.setAttribute("data-original-title", "显示评论区");
                GoSheng_comment.classList.remove("show");
                break;
            default:
                floatToolComment.setAttribute("data-original-title", "隐藏评论区");
                GoSheng_comment.classList.add("show");
                break;
        }
    }
})();


function topControl(e) {
    e.preventDefault();
    $("html,body").animate({scrollTop: "0px"}, 800);
}

//tooltip提示
(function () {
    $("input[id^='modal_']").tooltip({
        placement: "bottom",
    });
    $("span[id^='oauth_']").tooltip({
        placement: "bottom",
    });
    $("#content a").tooltip({
        placement: "bottom",
    });
})();
//登录和注册
(function () {
    let redirect_to = document.querySelectorAll("input[name=redirect_to]");
    if (redirect_to) {
        for (let redirect_to_length = redirect_to.length, i = 0; i < redirect_to_length; i++) {
            redirect_to[i].value = GoSheng_href;
        }
    }
})();

//移动端导航栏按钮
(function () {
    const mainBody = document.querySelector('main');
    const navbarCollapse = document.querySelectorAll('.navbar-collapse');
    mainBody.addEventListener('click', navbarCollapseHide);

    function navbarCollapseHide(e) {
        for (let navbarCollapseLength = navbarCollapse.length, i = 0; i < navbarCollapseLength; i++) {
            navbarCollapse[i].classList.remove('show');
        }
    }
})();

//顶部日期时间
(function () {
    let timeElement = document.querySelector('#gosheng_time');
    if (timeElement) {
        timeElement.innerHTML = new Date().toLocaleString() + ' 星期' + '日一二三四五六'.charAt(new Date().getDay());
        setInterval("document.querySelector('#gosheng_time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());", 1000);
    }
})();

//判断用户是否同意使用cookie
$(document).ready(function () {
    let gosheng_cookie = document.querySelector("#gosheng_cookie");
    let gosheng_cookie_agree = document.querySelector("#gosheng_cookie_agree");
    let gosheng_cookie_disagree = document.querySelector("#gosheng_cookie_disagree");
    if (gosheng_cookie) {
        let cookie_status = GoSheng_GetCookie("gosheng_cookie_agree");
        switch (cookie_status) {
            case "yes":
                hidden_gosheng_cookie();
                break;
            case "no":
                display_gosheng_cookie();
                disagree_content();
                break;
            default:
                display_gosheng_cookie();
        }
    }
    if (gosheng_cookie_agree) {
        gosheng_cookie_agree.addEventListener('click', hidden_gosheng_cookie);
        gosheng_cookie_agree.addEventListener('click', set_cookie_agree);
        gosheng_cookie_agree.addEventListener('click', agree_content);
    }
    if (gosheng_cookie_disagree) {
        gosheng_cookie_disagree.addEventListener('click', display_gosheng_cookie);
        gosheng_cookie_disagree.addEventListener('click', set_cookie_disagree);
        gosheng_cookie_disagree.addEventListener('click', disagree_content);
    }

    function hidden_gosheng_cookie() {
        gosheng_cookie.classList.add("d-none");
    }

    function display_gosheng_cookie() {
        gosheng_cookie.classList.remove("d-none");
    }

    function set_cookie_agree() {
        GoSheng_SetCookie("gosheng_cookie_agree", "yes", 30);
    }

    function set_cookie_disagree() {
        GoSheng_SetCookie("gosheng_cookie_agree", "no", 30);
    }

    function agree_content() {
        notyf.confirm("感谢您同意本站使用Cookie技术获取浏览信息，我们将会为您提供更优质的浏览体验。");
    }

    function disagree_content() {
        notyf.alert("您已经拒绝本站使用Cookie技术获取浏览信息，请关闭本站即可。");
    }
});
// 文章点赞功能
(function () {
    $.fn.postLike = function () {
        if ($(this).hasClass('done')) {
            notyf.alert("一小时只能赞一次哦");
            return false;
        } else {
            notyf.confirm("感谢您的赞");
            $(this).addClass('done');
            let id = $(this).data("id"),
                action = $(this).data('action'),
                rateHolder = $(this).children('.count');
            let ajax_data = {
                action: "GoSheng_like",
                um_id: id,
                um_action: action
            };
            let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
            $.post(url, ajax_data,
                function (data) {
                    $(rateHolder).html(data);
                });
            return false;
        }
    };
    $(document).on("click", "#gosehng_thumbs_up a", function () {
        $(this).postLike();
    });
})();
// 侧边栏跟随栏
(function () {
    $("#gosheng_follow_bar").theiaStickySidebar({
        additionalMarginTop: 60
    });
})();
//通知公告
(function () {
    let gosheng_notice = document.querySelector("#gosheng_notice");
    if (gosheng_notice) {
        let close = gosheng_notice.querySelector(".close");
        close.addEventListener("click", gosheng_hidden_notice);
        close.addEventListener("click", gosheng_notice_cookie);

        function gosheng_hidden_notice() {
            $("#gosheng_notice").alert("close");
            notyf.confirm("您已关闭公告信息，12小时内不会再出现。");
        }

        function gosheng_notice_cookie() {
            GoSheng_SetCookie("gosheng_notice_closed", "yes", 0.5);
        }
    }
})();
//评论，QQ填写后自动写昵称和邮箱
(function () {
    let respond = document.querySelector("#respond");
    if (respond) {
        let comment_author = respond.querySelector("#comment_author");
        let comment_author_email = respond.querySelector("#comment_author_email");
        let comment_author_qq = respond.querySelector("#comment_author_qq");
        let comment_author_qq_avatar = respond.querySelector("#comment_author_qq_avatar");
        if (comment_author_qq) {
            comment_author_qq.addEventListener("blur", GoSheng_get_author_info);
        }

        function GoSheng_get_author_info() {
            if (comment_author_qq.value.length >= 5 && comment_author_qq.value.length < 12) {
                GoSheng_set_author_email();
                GoSheng_set_author_nickname();
                GoSheng_set_author_avatar();
            }
        }

        function GoSheng_set_author_email() {
            let qq_number = comment_author_qq.value;
            comment_author_email.value = qq_number + "@qq.com";
        }

        function GoSheng_set_author_nickname() {
            let qq_number = comment_author_qq.value;
            let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
            let data = {
                action: "nickname_form_qq_info",
                qq_number: qq_number
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "jsonp",
                jsonpCallback: "portraitCallBack",
                success: function (data) {
                    if (data[qq_number]) {
                        comment_author.value = data[qq_number][6];
                    } else {
                        comment_author_qq.value = "";
                        comment_author_qq.placeholder = "请输入正确的QQ号码";
                    }
                },
                error: function (data) {
                    console.log(data);
                    comment_author.value = "昵称获取失败";
                }
            });
        }

        function GoSheng_set_author_avatar() {
            let qq_number = comment_author_qq.value;
            let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
            let data = {
                action: "avatar_form_qq_info",
                qq_number: qq_number
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "jsonp",
                jsonpCallback: "qq_avatarCallBack",
                success: function (data) {
                    comment_author_qq_avatar.src = data[qq_number];
                },
                error: function (data) {
                    console.log("头像获取失败");
                    console.log(data);
                }
            });
        }
    }
})();
//评论内容需要验证
(function () {
    let commentform = document.querySelector("#commentform");
    if (commentform) {
        commentform.removeAttribute("novalidate");
    }
})();
//评论css修正
(function () {
    let respond = document.querySelector("#respond");
    if (respond) {
        respond.classList.add("pb-2", "mb-1");
    }
})();
//获取用户UA
(function () {
    let gosheng_user_agent = document.querySelector("#gosheng_user_agent");
    if (gosheng_user_agent) {
        gosheng_user_agent.value = navigator.userAgent;
    }
})();
//密码样式
(function () {
    let input_password_all = document.querySelectorAll("input[type=password]");
    if (input_password_all) {
        for (let input_password_all_length = input_password_all.length, i = 0; i < input_password_all_length; i++) {
            input_password_all[i].addEventListener("change", input_password_style);
            input_password_all[i].addEventListener("input", input_password_style);
        }

        function input_password_style(e) {
            switch (e.target.value.length > 0) {
                case true:
                    e.target.classList.add("letter-spacing-2");
                    break;
                default:
                    e.target.classList.remove("letter-spacing-2");
                    break;
            }
        }
    }
})();
//切换密码显示方式
(function () {
    let toggle_password = document.querySelector("#GoSheng_toggle_password");
    if (toggle_password) {
        $("#GoSheng_toggle_password").tooltip();
        toggle_password.addEventListener("click", function () {
            switch (this.classList.contains("fa-eye")) {
                case true:
                    GoSheng_show_password();
                    break;
                default:
                    GoSheng_hidden_password();
                    break;
            }
        });

        function GoSheng_show_password() {
            let modal_login_password = document.querySelector("#modal_login_password");
            modal_login_password.setAttribute("type", "text");
            toggle_password.setAttribute("data-original-title", "隐藏密码");
            toggle_password.classList.remove("fa-eye");
            toggle_password.classList.add("fa-eye-slash");
        }

        function GoSheng_hidden_password() {
            let modal_login_password = document.querySelector("#modal_login_password");
            modal_login_password.setAttribute("type", "password");
            toggle_password.setAttribute("data-original-title", "显示密码");
            toggle_password.classList.remove("fa-eye-slash");
            toggle_password.classList.add("fa-eye");
        }
    }
})();
//一言
(function () {
    let GoSheng_hitokoto = document.querySelector("#GoSheng_hitokoto");
    if (GoSheng_hitokoto) {
        let GoSheng_hitokoto_text = document.querySelector("#GoSheng_hitokoto_text");
        let get_new_hitokoto = document.querySelector("#get_new_hitokoto");
        if (get_new_hitokoto) {
            get_new_hitokoto.addEventListener("mouseenter", icon_spin);
            get_new_hitokoto.addEventListener("mouseleave", icon_spin);
            get_new_hitokoto.addEventListener("click", GoSheng_get_hitokkoto_url);
        }
        GoSheng_get_hitokkoto_url();
        $("#get_new_hitokoto").tooltip();

        function icon_spin() {
            this.classList.toggle("fa-spin");
        }

        function GoSheng_get_hitokkoto_url() {
            let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
            let data = {
                action: "GoSheng_hitokoto_url",
                type: "url"
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "text",
                success: function (url) {
                    GoSheng_get_hitokoto(url);
                },
                error: function (data) {
                    console.log("一言地址获取失败");
                    console.log(data);

                }
            });
        }


        function GoSheng_get_hitokoto(url) {
            let hitokoto_url = url;
            $.ajax({
                type: "get",
                url: hitokoto_url,
                success: function (data) {
                    GoSheng_hitokoto_text.innerText = data;
                },
                error: function (data) {
                    console.log("一言语句获取失败");
                    console.log(data);
                }
            })
        }
    }
})();
//评论表情
(function () {
    $("#simle_yan span").tooltip();
    $("#simle_emoji span").tooltip();
    let gosheng_comment_smile = document.querySelector("#gosheng_comment_smile");
    if (gosheng_comment_smile) {
        let gosheng_smile = document.querySelector("#gosheng_smile");
        gosheng_comment_smile.addEventListener("click", function () {
            $("#gosheng_smile").collapse("toggle");
        })
    }
    let gosheng_smile = document.querySelector("#gosheng_smile");
    if (gosheng_smile) {
        let gosheng_simle_yan = document.querySelector("#gosheng_simle_yan");
        let gosheng_simle_emoji = document.querySelector("#gosheng_simle_emoji");
        if (gosheng_simle_yan) {
            gosheng_simle_yan.addEventListener("click", function (e) {
                gosheng_simles(e);
            });
        }
        if (gosheng_simle_emoji) {
            gosheng_simle_emoji.addEventListener("click", function (e) {
                gosheng_simles(e);
            });
        }

        function gosheng_simles(e) {
            let gosheng_simles = e.target.parentNode.childNodes;
            for (let i = 0; i < gosheng_simles.length; i++) {
                gosheng_simles[i].classList.toggle("active");
            }
        }
    }
    let simle_yan = document.querySelector("#simle_yan");
    if (simle_yan) {
        let comment_textarea = document.getElementById("comment_textarea");
        simle_yan.addEventListener("click", input_simle);

        function input_simle(e) {
            e.preventDefault();
            let simle = e.target;
            if (simle.localName === "span" || simle.nodeName === "SPAN" || simle.tagName === "SPAN") {
                let simle_title = simle.dataset["originalTitle"];
                let input_simle = simle_title + simle.innerHTML;
                let input_old = comment_textarea.value;
                comment_textarea.value = input_old + " " + input_simle + " ";
            }
        }
    }
    let gosheng_comment_clear = document.querySelector("#gosheng_comment_clear");
    if (gosheng_comment_clear) {
        gosheng_comment_clear.addEventListener("click", comment_clear);

        function comment_clear() {
            let comment_textarea = document.getElementById("comment_textarea");
            comment_textarea.value = "";
        }
    }
})();

