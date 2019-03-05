/*
 * Name:bootstrap-toasts
 * author:张成林<469946668@qq.com>
 * Github:https://github.com/zhangchenglin/bootstrap-toasts
 * Copyright (C) 张成林 2019
 * Licenses:MIT
 * Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
 *
*/

function bootstrapToasts(title, content, titleColor, delay, position, releaseTime, messageType) {
    let Time = new Date().getTime();
    let toastsID = "toasts_" + Time;
    let toasts_area_ID = "toasts_area_" + Time;
    let document_body = document.querySelector("body");
    let toasts_area = document.createElement("div");
    let toasts = document.createElement("div");
    let toasts_header = document.createElement("div");
    let toasts_header_icon = document.createElement("i");
    let toasts_header_strong = document.createElement("strong");
    let toasts_header_small = document.createElement("small");
    let toasts_header_button = document.createElement("button");
    let toasts_header_span = document.createElement("span");
    let toasts_body = document.createElement("div");

    switch (position) {
        case "left":
            toasts_area.className = "mb-1 d-flex justify-content-start align-items-center";
            break;
        case "right":
            toasts_area.className = "mb-1 d-flex justify-content-end align-items-center";
            break;
        case "center":
        default:
            toasts_area.className = "mb-1 d-flex justify-content-center align-items-center";
    }
    toasts_style();
    delay = delay ? delay * 1e3 : 10e3;
    title = title ? title : "";
    releaseTime = releaseTime ? releaseTime : "";
    content = content ? content : "";

    toasts_area.id = toasts_area_ID;
    toasts.className = "toast";
    toasts.id = toastsID;
    toasts.setAttribute("data-animation", "true");
    toasts.setAttribute("data-autohide", "true");
    toasts.setAttribute("data-delay", delay);
    switch (messageType) {
        case 0:
            toasts.setAttribute("role", "status");
            toasts.setAttribute("aria-live", "polite");
            break;
        case 1:
        default:
            toasts.setAttribute("role", "alert");
            toasts.setAttribute("aria-live", "assertive");
    }

    toasts.setAttribute("aria-atomic", "true");
    toasts_header.className = "toast_header";
    switch (titleColor) {
        case "primary":
            toasts_header.className += " bg-primary text-white";
            break;
        case "secondary":
            toasts_header.className += " bg-secondary text-white";
            break;
        case "success":
            toasts_header.className += " bg-success text-white";
            break;
        case "danger":
            toasts_header.className += " bg-danger text-white";
            break;
        case "warning":
            toasts_header.className += " bg-warning text-white";
            break;
        case "info":
            toasts_header.className += " bg-info text-white";
            break;
        case "dark":
            toasts_header.className += " bg-dark text-white";
            break;
        default:
    }
    toasts_header_icon.className = "toasts-icons toasts-icon-success";
    toasts_header_strong.className = "ml-2 mr-auto toastsTitle";
    toasts_header_small.className = "text-muted";
    toasts_header_button.className = "ml-2 mb-1 close";
    toasts_header_button.setAttribute("data-dismiss", "toast");
    toasts_header_button.setAttribute("aria-label", "Close");
    toasts_header_span.setAttribute("aria-hidden", "true");
    toasts_header_span.innerHTML = "&times;";
    toasts_header_strong.innerHTML = title;
    toasts_header_small.innerHTML = releaseTime;
    toasts_body.className = "toast-body";
    toasts_body.innerHTML = content;
    toasts_header_button.appendChild(toasts_header_span);
    toasts_header.appendChild(toasts_header_icon);
    toasts_header.appendChild(toasts_header_strong);
    toasts_header.appendChild(toasts_header_small);
    toasts_header.appendChild(toasts_header_button);
    toasts.appendChild(toasts_header);
    toasts.appendChild(toasts_body);
    toasts_area.appendChild(toasts);
    document_body.appendChild(toasts_area);
    $("#" + toastsID).toast("show");
    romove_bootstrapToasts(toastsID, delay);
    remove_bootstrapToasts_area(toasts_area_ID, delay);
}

function remove_bootstrapToasts_area(id, delay) {
    let toasts_area = document.querySelector("#" + id);
    delay = delay ? delay + 2e0 : 12e0;
    setTimeout(function () {
        toasts_area.parentElement.removeChild(toasts_area);
    }, delay)
}

function romove_bootstrapToasts(id, delay) {
    let toasts = document.querySelector("#" + id);
    delay = delay ? delay + 2e0 : 12e0;
    setTimeout(function () {
        toasts.parentElement.removeChild(toasts);
    }, delay)
}

function toasts_style() {
    let document_head = document.querySelector("head");
    let bootstrap_toasts_css = document.querySelector("#bootstrap_toasts_css");
    let style = document.createElement("style");

    if (bootstrap_toasts_css) return;

    style.type = "text/css";
    style.id = "bootstrap_toasts_css";
    style.innerHTML = "" +
        ".toastsTitle {\n" +
        "    display: inline-block;\n" +
        "    transform: translateY(-25%);\n" +
        "}\n" +
        ".toasts-icons {\n" +
        "    width: 22px;\n" +
        "    height: 22px;\n" +
        "    display: inline-block;\n" +
        "    margin-left: 5px;\n" +
        "    margin-top: 5px;\n" +
        "}\n" +
        ".toasts-icon-success {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 52 52\"%3E%3Cg fill=\"%234c4c4c\"%3E%3Cpath d=\"M26 0C11.664 0 0 11.663 0 26s11.664 26 26 26 26-11.663 26-26S40.336 0 26 0zm0 50C12.767 50 2 39.233 2 26S12.767 2 26 2s24 10.767 24 24-10.767 24-24 24z\"/%3E%3Cpath d=\"M38.252 15.336l-15.369 17.29-9.259-7.407a1 1 0 0 0-1.249 1.562l10 8a.999.999 0 0 0 1.373-.117l16-18a1 1 0 1 0-1.496-1.328z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-icon-danger {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 475.2 475.2\"%3E%3Cg fill=\"%234c4c4c\"%3E%3Cpath d=\"M405.6 69.6C360.7 24.7 301.1 0 237.6 0s-123.1 24.7-168 69.6S0 174.1 0 237.6s24.7 123.1 69.6 168 104.5 69.6 168 69.6 123.1-24.7 168-69.6 69.6-104.5 69.6-168-24.7-123.1-69.6-168zm-19.1 316.9c-39.8 39.8-92.7 61.7-148.9 61.7s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7 0-297.8C128.5 48.9 181.4 27 237.6 27s109.1 21.9 148.9 61.7c82.1 82.1 82.1 215.7 0 297.8z\"/%3E%3Cpath d=\"M342.3 132.9c-5.3-5.3-13.8-5.3-19.1 0l-85.6 85.6-85.6-85.6c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l85.6 85.6-85.6 85.6c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.6-85.6 85.6 85.6c2.6 2.6 6.1 4 9.5 4 3.5 0 6.9-1.3 9.5-4 5.3-5.3 5.3-13.8 0-19.1l-85.4-85.6 85.6-85.6c5.3-5.3 5.3-13.8 0-19.1z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-icon-warning {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 78.561 78.561\"%3E%3Cg fill=\"%234c4c4c\"%3E%3Ccircle cx=\"39.28\" cy=\"57.772\" r=\"3.632\"/%3E%3Cpath d=\"M38.792 48.347a2 2 0 0 0 2-2v-19a2 2 0 0 0-4 0v19a2 2 0 0 0 2 2z\"/%3E%3Cpath d=\"M46.57 11.542l-.091-.141c-1.852-2.854-3.766-5.806-7.199-5.806-3.578 0-5.45 2.994-7.26 5.891l-.074.119L.278 65.266c-.182.308-.278.469-.278.826 0 3.896 3.135 6.874 6.988 6.874h64.585c3.854 0 6.988-2.979 6.988-6.874 0-.357-.096-.614-.277-.921L46.57 11.542zm25.003 57.424H6.988c-1.461 0-2.717-.951-2.95-2.394l31.374-53.061c1.554-2.487 2.572-3.963 3.868-3.963 1.261 0 2.457 1.87 3.843 4.006l31.399 53.007c-.232 1.442-1.488 2.405-2.949 2.405z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-icon-info {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 65 65\"%3E%3Cg fill=\"%234c4c4c\"%3E%3Cpath d=\"M32.5 0C14.58 0 0 14.579 0 32.5S14.58 65 32.5 65 65 50.421 65 32.5 50.42 0 32.5 0zm0 61C16.785 61 4 48.215 4 32.5S16.785 4 32.5 4 61 16.785 61 32.5 48.215 61 32.5 61z\"/%3E%3Ccircle cx=\"33.018\" cy=\"19.541\" r=\"3.345\"/%3E%3Cpath d=\"M32.137 28.342a2 2 0 0 0-2 2v17a2 2 0 0 0 4 0v-17a2 2 0 0 0-2-2z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}";
    document_head.appendChild(style);
}
