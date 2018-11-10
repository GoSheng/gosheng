(function () {
    const ap1 = new APlayer({
        element: document.getElementById('aplayer'),
        mini: false,
        autoplay: false,
        lrcType: false,
        mutex: true,
        preload: 'metadata',
        audio: [{
            name: '光るなら',
            artist: 'Goose house',
            url: 'https://moeplayer.b0.upaiyun.com/aplayer/hikarunara.mp3',
            cover: 'https://moeplayer.b0.upaiyun.com/aplayer/hikarunara.jpg',
            theme: '#ebd0c2'
        }]
    });
})();