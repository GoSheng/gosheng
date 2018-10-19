$(document).ready(function () {
    if (navigator.geolocation) {
        // navigator.geolocation.getCurrentPosition(showPosition);
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        console.log('该用户的浏览器不支持地理位置!');
    }

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        console.log('纬度' + lat + " , " + "经度" + lng);
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                console.log("用户拒绝获取地理位置的请求。");
                break;
            case error.POSITION_UNAVAILABLE:
                console.log("位置信息是不可用的。");
                break;
            case error.TIMEOUT:
                console.log("请求用户地理位置超时。");
                break;
            case error.UNKNOWN_ERROR:
                console.log("未知错误。");
                break;
        }
    }
});