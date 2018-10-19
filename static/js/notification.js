$(document).ready(function () {
    if (Notification.permission === 'granted') {
        console.log('用户已经允许通知');
    } else if (Notification.permission === 'denied') {
        console.log('用户已经拒绝通知');
    } else {
        console.log('用户还没选择，去向用户申请权限吧');
        NotificationRequestPermission();
    }

    function NotificationRequestPermission() {
        Notification.requestPermission().then(function (permission) {
            if (permission === 'granted') {
                console.log('用户允许通知');
                setTimeout(notification1(), 5000);
            } else if (permission === 'denied') {
                console.log('用户拒绝通知');
                notificationTip();
            }
        });
    }

    function notificationTip() {
        alert('您拒绝了使用本站通知功能,我们后续如有重大通知，将会再次询问您是否使用通知功能，请您确认？');
    }


    function notification1() {
        var n = new Notification('感谢', {
            body: '感谢您允许本站使用通知功能，后续如有重要信息，将会以此通知形式发送给您。',
            tag: '1',
            icon: 'https://img6.bdstatic.com/img/image/smallpic/fengjingxiaotu.jpg',
            data: {
                url: "https://www.jzeg.org"
            },
            requireInteraction: true
        });
        n.addEventListener('click', function () {
            window.open(n.data.url, '_blank');// 打开网址
            n.close();
        });
    }
});