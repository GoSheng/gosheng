function GoSheng_SetCookie(cname, cvalue, exdays) {
    let d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 3600 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires;
}

function GoSheng_GetCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let ca_length = ca.length, i = 0; i < ca_length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return false;
}

//todo:待修改
function GoSheng_DelCookie(cname) {
    let d = new Date();
    d.setTime(d.getTime() + (-1 * 24 * 3600 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + expires;
}
