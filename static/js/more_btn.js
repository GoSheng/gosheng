(function () {

    tinymce.create('tinymce.plugins.alert_primary', {
        init: function (ed, url) {
            ed.addButton('alert_primary', {
                title: '深蓝色背景栏',
                image: url + '/button/alert_primary.png',
                onclick: function () {
                    ed.selection.setContent('[alert_primary]' + ed.selection.getContent() + '[/alert_primary]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_primary', tinymce.plugins.alert_primary);

    tinymce.create('tinymce.plugins.alert_secondary', {
        init: function (ed, url) {
            ed.addButton('alert_secondary', {
                title: '浅灰色背景栏',
                image: url + '/button/alert_secondary.png',
                onclick: function () {
                    ed.selection.setContent('[alert_secondary]' + ed.selection.getContent() + '[/alert_secondary]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_secondary', tinymce.plugins.alert_secondary);

    tinymce.create('tinymce.plugins.alert_success', {
        init: function (ed, url) {
            ed.addButton('alert_success', {
                title: '绿色背景栏',
                image: url + '/button/alert_success.png',
                onclick: function () {
                    ed.selection.setContent('[alert_success]' + ed.selection.getContent() + '[/alert_success]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_success', tinymce.plugins.alert_success);

    tinymce.create('tinymce.plugins.alert_warning', {
        init: function (ed, url) {
            ed.addButton('alert_warning', {
                title: '黄色背景栏',
                image: url + '/button/alert_warning.png',
                onclick: function () {
                    ed.selection.setContent('[alert_warning]' + ed.selection.getContent() + '[/alert_warning]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_warning', tinymce.plugins.alert_warning);

    tinymce.create('tinymce.plugins.alert_danger', {
        init: function (ed, url) {
            ed.addButton('alert_danger', {
                title: '粉红色背景栏',
                image: url + '/button/alert_danger.png',
                onclick: function () {
                    ed.selection.setContent('[alert_danger]' + ed.selection.getContent() + '[/alert_danger]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_danger', tinymce.plugins.alert_danger);

    tinymce.create('tinymce.plugins.alert_info', {
        init: function (ed, url) {
            ed.addButton('alert_info', {
                title: '浅蓝背景栏',
                image: url + '/button/alert_info.png',
                onclick: function () {
                    ed.selection.setContent('[alert_info]' + ed.selection.getContent() + '[/alert_info]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_info', tinymce.plugins.alert_info);

    tinymce.create('tinymce.plugins.alert_light', {
        init: function (ed, url) {
            ed.addButton('alert_light', {
                title: '白色背景栏',
                image: url + '/button/alert_light.png',
                onclick: function () {
                    ed.selection.setContent('[alert_light]' + ed.selection.getContent() + '[/alert_light]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_light', tinymce.plugins.alert_light);

    tinymce.create('tinymce.plugins.alert_dark', {
        init: function (ed, url) {
            ed.addButton('alert_dark', {
                title: '深灰色背景栏',
                image: url + '/button/alert_dark.png',
                onclick: function () {
                    ed.selection.setContent('[alert_dark]' + ed.selection.getContent() + '[/alert_dark]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('alert_dark', tinymce.plugins.alert_dark);

    tinymce.create('tinymce.plugins.card_primary', {
        init: function (ed, url) {
            ed.addButton('card_primary', {
                title: '深蓝色面板',
                image: url + '/button/card_primary.png',
                onclick: function () {
                    ed.selection.setContent('[card_primary title="标题内容"]' + ed.selection.getContent() + '[/card_primary]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_primary', tinymce.plugins.card_primary);

    tinymce.create('tinymce.plugins.card_secondary', {
        init: function (ed, url) {
            ed.addButton('card_secondary', {
                title: '深灰色面板',
                image: url + '/button/card_secondary.png',
                onclick: function () {
                    ed.selection.setContent('[card_secondary title="标题内容"]' + ed.selection.getContent() + '[/card_secondary]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_secondary', tinymce.plugins.card_secondary);

    tinymce.create('tinymce.plugins.card_success', {
        init: function (ed, url) {
            ed.addButton('card_success', {
                title: '绿色面板',
                image: url + '/button/card_success.png',
                onclick: function () {
                    ed.selection.setContent('[card_success title="标题内容"]' + ed.selection.getContent() + '[/card_success]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_success', tinymce.plugins.card_success);

    tinymce.create('tinymce.plugins.card_danger', {
        init: function (ed, url) {
            ed.addButton('card_danger', {
                title: '红色面板',
                image: url + '/button/card_danger.png',
                onclick: function () {
                    ed.selection.setContent('[card_danger title="标题内容"]' + ed.selection.getContent() + '[/card_danger]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_danger', tinymce.plugins.card_danger);

    tinymce.create('tinymce.plugins.card_warning', {
        init: function (ed, url) {
            ed.addButton('card_warning', {
                title: '黄色面板',
                image: url + '/button/card_warning.png',
                onclick: function () {
                    ed.selection.setContent('[card_warning title="标题内容"]' + ed.selection.getContent() + '[/card_warning]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_warning', tinymce.plugins.card_warning);

    tinymce.create('tinymce.plugins.card_info', {
        init: function (ed, url) {
            ed.addButton('card_info', {
                title: '青色面板',
                image: url + '/button/card_info.png',
                onclick: function () {
                    ed.selection.setContent('[card_info title="标题内容"]' + ed.selection.getContent() + '[/card_info]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_info', tinymce.plugins.card_info);

    tinymce.create('tinymce.plugins.card_light', {
        init: function (ed, url) {
            ed.addButton('card_light', {
                title: '白色面板',
                image: url + '/button/card_light.png',
                onclick: function () {
                    ed.selection.setContent('[card_light title="标题内容"]' + ed.selection.getContent() + '[/card_light]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_light', tinymce.plugins.card_light);

    tinymce.create('tinymce.plugins.card_dark', {
        init: function (ed, url) {
            ed.addButton('card_dark', {
                title: '黑色面板',
                image: url + '/button/card_dark.png',
                onclick: function () {
                    ed.selection.setContent('[card_dark title="标题内容"]' + ed.selection.getContent() + '[/card_dark]');
                }
            });
        },
        createControl: function (n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('card_dark', tinymce.plugins.card_dark);

})();