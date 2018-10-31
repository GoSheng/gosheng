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
    let footTools = document.querySelector("#footTools");

    if (headerNav) {
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
                    footTools.children['1'].classList.remove("invisible");
                    footTools.children['2'].classList.remove("invisible");
                }
            } else if (new_scroll_position > last_scroll_position) {
                headerNav.classList.remove("slideUp");
                headerNav.classList.add("slideDown", "fixed-top");
                if (last_scroll_position < 400) {
                    footTools.children['1'].classList.add("invisible");
                    footTools.children['2'].classList.add("invisible");
                    if (last_scroll_position < 49) {
                        headerNav.classList.remove('slideDown', "fixed-top");
                    }
                }
            }
            new_scroll_position = last_scroll_position;
        }
    }
})();

//返回顶部
(function () {
    let footToolBackTop = document.querySelector("#footToolBackTop");
    if (footToolBackTop) {
        footToolBackTop.addEventListener('click', topControl);
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
        let share_weixin = document.querySelector("#share_weixin");
        if (gosheng_share_weixin) {
            weixin_qrcode();
            gosheng_share_weixin.addEventListener('click', display_weixin_qrcode);
        }

        function display_weixin_qrcode() {
            share_weixin.classList.toggle("d-none");
        }

        function weixin_qrcode() {
            let qrcode = new QRCode(document.querySelector('#share_weixin_img'), {
                text: GoSheng_href,
                width: 200,
                height: 200,
                colorDark: '#000000',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.H
            });
        }
    }
})();
//侧边栏切换按钮
(function () {
    let footToolSidebar = document.body.querySelector("#footToolSidebar");
    let sidebar = document.body.querySelector("#sidebar");
    let content = document.body.querySelector("#content");
    if (sidebar) {
        footToolSidebar.classList.remove('invisible');
        footToolSidebar.addEventListener('click', sidebarToggle);
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
    if (logo) {
        logo.addEventListener('click', topControl);
    }
})();

function topControl(e) {
    e.preventDefault();
    $('html,body').animate({scrollTop: '0px'}, 800);
}

//tooltip提示
(function () {
    $("input[id^='modal_']").tooltip();
    $("a[id^='oauth_']").tooltip();
    $("main a").tooltip();
    $("#footTools>a").tooltip();
})();
//tab切换
// $(document).ready(function () {
//     $('#v-pills-tab a').on('click', function (e) {
//         e.preventDefault();
//         $(this).tab('show');
//     })
// });
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
(function () {
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
                break;
            default:
                display_gosheng_cookie();
        }
    }
    if (gosheng_cookie_agree) {
        gosheng_cookie_agree.addEventListener('click', hidden_gosheng_cookie);
        gosheng_cookie_agree.addEventListener('click', set_cookie_agree);
    }
    if (gosheng_cookie_disagree) {
        gosheng_cookie_disagree.addEventListener('click', display_gosheng_cookie);
        gosheng_cookie_disagree.addEventListener('click', set_cookie_disagreer);
        gosheng_cookie_disagree.addEventListener('click', custom_content);
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

    function set_cookie_disagreer() {
        GoSheng_SetCookie("gosheng_cookie_agree", "no", 30);
    }

    function custom_content() {
        layer.open({
            content: '您已经拒绝本站使用Cookie技术获取浏览信息，请关闭本站即可。',
        });
    }
})();
// 文章点赞功能
(function () {
    $.fn.postLike = function () {
        if ($(this).hasClass('done')) {
            layer.open({
                content: '一小时只能赞一次哦',
                skin: 'msg',
                time: 3,
            });
            return false;
        } else {
            layer.open({
                content: '感谢您的赞！',
                skin: 'msg',
                time: 3,
            });
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
            layer.open({
                content: "您已关闭公告信息，12小时内不会再出现。",
                skin: "msg",
                time: 5,
            });
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
                error: function () {
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
