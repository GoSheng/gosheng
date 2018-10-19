$(document).ready(function () {

    initMobileMenu();

    function initMobileMenu() {
        const sidebar_left = document.querySelector('#mobile_sidebar_left');
        const sidebar_right = document.querySelector('#mobile_sidebar_right');
        const menuButton_left = document.querySelector('#mobile_sidebar_left-button');
        const menuButton_right = document.querySelector('#mobile_sidebar_right-button');
        const mainBody = document.querySelector('main');

        if (menuButton_left) {
            menuButton_left.addEventListener('click', function () {
                sidebar_left.classList.toggle('open')
            });
        }
        if (menuButton_right) {
            menuButton_right.addEventListener('click', function () {
                sidebar_right.classList.toggle('open')
            });
        }

        if (sidebar_left) {
            mainBody.addEventListener('click', function (e) {
                if (e.target !== menuButton_left && !sidebar_left.contains(e.target)) {
                    sidebar_left.classList.remove('open')
                }
            });
        }
        if (sidebar_right) {
            mainBody.addEventListener('click', function (e) {
                if (e.target !== menuButton_right && !sidebar_right.contains(e.target)) {
                    sidebar_right.classList.remove('open')
                }
            });
        }


        let cStart = {}, cEnd = {};
        let ScreenWidth = document.body.scrollWidth;
        let ScreenHeight = document.body.scrollHeight;
        const ScreenX = ScreenWidth / 2;
        const ScreenY = ScreenHeight / 2;

        mainBody.addEventListener('touchstart', function (e) {
            cStart.x = e.changedTouches[0].clientX;
            cStart.y = e.changedTouches[0].clientY;
            console.log(e.changedTouches[0])
        });

        mainBody.addEventListener('touchend', function (e) {
            cEnd.x = e.changedTouches[0].clientX;
            cEnd.y = e.changedTouches[0].clientY;

            let xDiff = cEnd.x - cStart.x;
            let yDiff = cEnd.y - cStart.y;

            if (Math.abs(xDiff) > Math.abs(yDiff)) {
                if (xDiff > 0 && cStart.x <= ScreenX) {
                    sidebar_left.classList.add('open');
                }
                else {
                    sidebar_left.classList.remove('open');
                }
            }
            if (Math.abs(xDiff) > Math.abs(yDiff)) {
                if (xDiff < 0 && cStart.x >= ScreenX) {
                    sidebar_right.classList.add('open');
                } else {
                    sidebar_right.classList.remove('open');
                }
            }
        })
    }
});
