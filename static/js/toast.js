function toast(title, body, time, delay, position, messageType) {
    let Time = new Date().getTime();
    let toastID = "toast_" + Time;
    let toast_area_ID = "toast_area_" + Time;
    let document_body = document.querySelector("body");
    let toast_area = document.createElement("div");
    let toast = document.createElement("div");
    let toast_header = document.createElement("div");
    let toast_header_strong = document.createElement("strong");
    let toast_header_small = document.createElement("small");
    let toast_header_button = document.createElement("button");
    let toast_header_span = document.createElement("span");
    let toast_body = document.createElement("div");

    switch (position) {
        case "left":
            toast_area.className = "mb-1 d-flex justify-content-start align-items-center";
            break;
        case "right":
            toast_area.className = "mb-1 d-flex justify-content-end align-items-center";
            break;
        case "center":
        default:
            toast_area.className = "mb-1 d-flex justify-content-center align-items-center";
    }
    toast_area.id = toast_area_ID;
    toast.className = "toast";
    toast.id = toastID;
    toast.setAttribute("data-animation", "true");
    toast.setAttribute("data-autohide", "true");
    delay = delay ? delay * 1e3 : 10e3;
    toast.setAttribute("data-delay", delay);
    switch (messageType) {
        case 0:
            toast.setAttribute("role", "status");
            toast.setAttribute("aria-live", "polite");
            break;
        case 1:
        default:
            toast.setAttribute("role", "alert");
            toast.setAttribute("aria-live", "assertive");
    }

    toast.setAttribute("aria-atomic", "true");
    toast_header.className = "toast_header";
    toast_header_strong.className = "mr-auto";
    toast_header_small.className = "text-muted";
    toast_header_button.className = "ml-2 mb-1 close";
    toast_header_button.setAttribute("data-dismiss", "toast");
    toast_header_button.setAttribute("aria-label", "Close");
    toast_header_span.setAttribute("aria-hidden", "true");
    toast_header_span.innerHTML = "&times;";
    toast_header_strong.innerHTML = title ? title : "空白的标题";
    toast_header_small.innerHTML = time ? time : "";
    toast_header_button.appendChild(toast_header_span);
    toast_header.appendChild(toast_header_strong);
    toast_header.appendChild(toast_header_small);
    toast_header.appendChild(toast_header_button);
    toast_body.className = "toast-body";
    toast_body.innerHTML = body ? body : "空白的内容";
    toast.appendChild(toast_header);
    toast.appendChild(toast_body);
    toast_area.appendChild(toast);
    document_body.appendChild(toast_area);
    $("#" + toastID).toast("show");
    romove_toast(toastID, delay);
    remove_toast_area(toast_area_ID, delay);
}

function remove_toast_area(id, delay) {
    let toast_area = document.querySelector("#" + id);
    setTimeout(function () {
        toast_area.parentElement.removeChild(toast_area);
    }, delay + 2000)
}

function romove_toast(id, delay) {
    let toast = document.querySelector("#" + id);
    setTimeout(function () {
        toast.parentElement.removeChild(toast);
    }, delay + 2000)
}
