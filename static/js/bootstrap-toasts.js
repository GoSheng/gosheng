/*
 * Name: bootstrap-toasts
 * author: 张成林<469946668@qq.com>
 * Github: https://github.com/zhangchenglin/bootstrap-toasts
 * Copyright (C) 2019 张成林
 * Licenses: MIT
 * Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
 *
*/

function bootstrapToasts(title, content, titleColor, delay, position, releaseTime, icon, eventType, eventFunction, ariaType) {
    title = title ? title : "";
    content = content ? content : "";
    titleColor = titleColor ? titleColor : "";
    delay = delay ? delay * 1e3 : 1e4;
    position = position ? position : "";
    releaseTime = releaseTime ? releaseTime : "";
    icon = icon ? icon : "";
    ariaType = ariaType ? ariaType : "alert";

    bootstrapToastsContainer();
    toasts_style();
    let TimeID = new Date().getTime();
    let toastsID = "toasts_" + TimeID;
    let toasts_area_ID = "toasts_area_" + TimeID;
    let toastsContainer = document.querySelector("#bootstrapToastsContainer");
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
        case "topLeft":
            toasts_area.className = "m-1 position-absolute toasts-topLeft";
            break;
        case "topCenter":
            toasts_area.className = "m-1 position-absolute toasts-topCenter";
            break;
        case "topRight":
            toasts_area.className = "m-1 position-absolute toasts-topRight";
            break;
        case "bottomLeft":
            toasts_area.className = "m-1 position-absolute toasts-bottomLeft";
            break;
        case "bottomCenter":
            toasts_area.className = "m-1 position-absolute toasts-bottomCenter";
            break;
        case "bottomRight":
            toasts_area.className = "m-1 position-absolute toasts-bottomRight";
            break;
        case "center":
        default:
            toasts_area.className = "m-1 position-absolute toasts-center";
    }

    toasts_area.id = toasts_area_ID;
    toasts.className = "toast";
    toasts.id = toastsID;
    switch (ariaType) {
        case "status":
            toasts.setAttribute("role", "status");
            toasts.setAttribute("aria-live", "polite");
            break;
        case "alert":
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
    switch (icon) {
        case "success":
            toasts_header_icon.className = "toasts-icons toasts-iconSuccess";
            break;
        case "danger":
            toasts_header_icon.className = "toasts-icons toasts-iconDanger";
            break;
        case "warning":
            toasts_header_icon.className = "toasts-icons toasts-iconWarning";
            break;
        case "info":
            toasts_header_icon.className = "toasts-icons toasts-iconInfo";
            break;
        default:
            toasts_header_icon.className = "toasts-icons";
    }

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
    toastsContainer.appendChild(toasts_area);

    let jQuery_toastsID = $("#" + toastsID);
    jQuery_toastsID.toast({
        animation: true,
        autohide: true,
        delay: delay,
    });
    if (eventType && eventFunction) bootstrap_events(toastsID, eventType, eventFunction);
    jQuery_toastsID.on("hidden.bs.toast", function () {
        hide_bootstrap_toasts_container();
    });
    jQuery_toastsID.toast("show");

    remove_bootstrap_toasts(toastsID, delay);
    remove_bootstrap_toasts_area(toasts_area_ID, delay);
    remove_bootstrap_toasts_container(delay);
}

function hide_bootstrap_toasts_container() {
    let toasts_container = document.querySelector("#bootstrapToastsContainer");
    toasts_container.classList.add("d-none");
}

function remove_bootstrap_toasts(toasts_id, delay) {
    let toasts = document.querySelector("#" + toasts_id);
    setTimeout(function () {
        toasts.parentElement.removeChild(toasts);
    }, delay + 1e3)
}

function remove_bootstrap_toasts_area(toasts_area_id, delay) {
    let toasts_area = document.querySelector("#" + toasts_area_id);
    setTimeout(function () {
        toasts_area.parentElement.removeChild(toasts_area);
    }, delay + 1e3)
}

function remove_bootstrap_toasts_container(delay) {
    let toasts_container = document.querySelector("#bootstrapToastsContainer");
    setTimeout(function () {
        toasts_container.parentElement.removeChild(toasts_container);
    }, delay + 1e3);
}

function bootstrap_events(toastsID, eventType, eventFunction) {
    let toasts = $("#" + toastsID);
    switch (eventType) {
        case "show":
            toasts.on("show.bs.toast", function () {
                return eventFunction();
            });
            break;
        case "shown":
            toasts.on("shown.bs.toast", function () {
                return eventFunction();
            });
            break;
        case "hide":
            toasts.on("hide.bs.toast", function () {
                return eventFunction();
            });
            break;
        case "hidden":
            toasts.on("hidden.bs.toast", function () {
                return eventFunction();
            });
            break;
        default:
    }
}

function bootstrapToastsContainer() {
    let container = document.createElement("div");
    let toastsContainer = document.querySelector("#bootstrapToastsContainer");

    if (toastsContainer) return toastsContainer.classList.remove("d-none");
    container.id = "bootstrapToastsContainer";
    container.className = "position-fixed w-100 h-100";
    container.style.top = "0";
    document.body.insertBefore(container, document.body.firstChild);
}

function toasts_style() {
    let document_head = document.querySelector("head");
    let bootstrap_toasts_css = document.querySelector("#bootstrap_toasts_css");
    let style = document.createElement("style");

    if (bootstrap_toasts_css) return;

    style.type = "text/css";
    style.id = "bootstrap_toasts_css";
    style.innerHTML = "" +
        ".toasts-topLeft {\n" +
        "    top: 0;\n" +
        "    left: 0;\n" +
        "}\n" +
        ".toasts-topCenter {\n" +
        "}\n" +
        ".toasts-topRight {\n" +
        "    top: 0;\n" +
        "    right: 0;\n" +
        "}\n" +
        ".toasts-bottomLeft {\n" +
        "    bottom: 0;\n" +
        "    left: 0;\n" +
        "}\n" +
        ".toasts-bottomCenter {\n" +
        "}\n" +
        ".toasts-bottomRight {\n" +
        "    bottom: 0;\n" +
        "    right: 0;\n" +
        "}\n" +
        ".toasts-center {\n" +
        "}\n" +
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
        ".toasts-iconSuccess {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 52 52\"%3E%3Cg fill=\"%23ffffff\"%3E%3Cpath d=\"M26 0C11.664 0 0 11.663 0 26s11.664 26 26 26 26-11.663 26-26S40.336 0 26 0zm0 50C12.767 50 2 39.233 2 26S12.767 2 26 2s24 10.767 24 24-10.767 24-24 24z\"/%3E%3Cpath d=\"M38.252 15.336l-15.369 17.29-9.259-7.407a1 1 0 0 0-1.249 1.562l10 8a.999.999 0 0 0 1.373-.117l16-18a1 1 0 1 0-1.496-1.328z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-iconDanger {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 475.2 475.2\"%3E%3Cg fill=\"%23ffffff\"%3E%3Cpath d=\"M405.6 69.6C360.7 24.7 301.1 0 237.6 0s-123.1 24.7-168 69.6S0 174.1 0 237.6s24.7 123.1 69.6 168 104.5 69.6 168 69.6 123.1-24.7 168-69.6 69.6-104.5 69.6-168-24.7-123.1-69.6-168zm-19.1 316.9c-39.8 39.8-92.7 61.7-148.9 61.7s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7 0-297.8C128.5 48.9 181.4 27 237.6 27s109.1 21.9 148.9 61.7c82.1 82.1 82.1 215.7 0 297.8z\"/%3E%3Cpath d=\"M342.3 132.9c-5.3-5.3-13.8-5.3-19.1 0l-85.6 85.6-85.6-85.6c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l85.6 85.6-85.6 85.6c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.6-85.6 85.6 85.6c2.6 2.6 6.1 4 9.5 4 3.5 0 6.9-1.3 9.5-4 5.3-5.3 5.3-13.8 0-19.1l-85.4-85.6 85.6-85.6c5.3-5.3 5.3-13.8 0-19.1z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-iconWarning {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 78.561 78.561\"%3E%3Cg fill=\"%23ffffff\"%3E%3Ccircle cx=\"39.28\" cy=\"57.772\" r=\"3.632\"/%3E%3Cpath d=\"M38.792 48.347a2 2 0 0 0 2-2v-19a2 2 0 0 0-4 0v19a2 2 0 0 0 2 2z\"/%3E%3Cpath d=\"M46.57 11.542l-.091-.141c-1.852-2.854-3.766-5.806-7.199-5.806-3.578 0-5.45 2.994-7.26 5.891l-.074.119L.278 65.266c-.182.308-.278.469-.278.826 0 3.896 3.135 6.874 6.988 6.874h64.585c3.854 0 6.988-2.979 6.988-6.874 0-.357-.096-.614-.277-.921L46.57 11.542zm25.003 57.424H6.988c-1.461 0-2.717-.951-2.95-2.394l31.374-53.061c1.554-2.487 2.572-3.963 3.868-3.963 1.261 0 2.457 1.87 3.843 4.006l31.399 53.007c-.232 1.442-1.488 2.405-2.949 2.405z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}\n" +
        ".toasts-iconInfo {\n" +
        "    background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 65 65\"%3E%3Cg fill=\"%23ffffff\"%3E%3Cpath d=\"M32.5 0C14.58 0 0 14.579 0 32.5S14.58 65 32.5 65 65 50.421 65 32.5 50.42 0 32.5 0zm0 61C16.785 61 4 48.215 4 32.5S16.785 4 32.5 4 61 16.785 61 32.5 48.215 61 32.5 61z\"/%3E%3Ccircle cx=\"33.018\" cy=\"19.541\" r=\"3.345\"/%3E%3Cpath d=\"M32.137 28.342a2 2 0 0 0-2 2v17a2 2 0 0 0 4 0v-17a2 2 0 0 0-2-2z\"/%3E%3C/g%3E%3C/svg%3E');\n" +
        "}";
    document_head.appendChild(style);
}
