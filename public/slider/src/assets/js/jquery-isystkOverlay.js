(function ($) {
    /*
     * オーバーレイ表示
     * 
     * Copyright (c) 2024 iseyoshitaka
     */
    $.fn.isystkOverlay = function (options) {

        // 引数に値が存在する場合、デフォルト値を上書きする
        const settings = $.extend({}, $.fn.isystkOverlay.defaults, options);

        const init = function (panel) {

            panel.find('.js-close').click(function (e) {
                e.preventDefault();
                closeModal();
            });

            // ダイアログ非表示
            const showModal = this.showModal = function () {
                $('body').append('<div id="overlay-background"></div>');
                $('#overlay-background').click(function () {
                    closeModal();
                });

                panel.addClass('open');
                $('#overlay-background').show();

                if (settings.openCallback) {
                    settings.openCallback();
                }
            }

            // ダイアログ非表示
            const closeModal = function () {
                panel.removeClass('open');
                $('#overlay-background').fadeOut(500, function () {
                    $(this).remove();
                });
                if (settings.closeCallback) {
                    settings.closeCallback();
                }
            }

            return this;
        }

        $(this).each(function () {
            const self = $(this),
                panel = $(self.data('panel'));

            // パネルの表示位置を調整します。
            const adjustPanelPosition = function () {
                const h = $(window).height();
                const w = $(window).width();
                const ph = panel.height();
                const pw = panel.width();
                let top = $(window).scrollTop() + Math.floor((h - ph) / 2);
                if ($(window).height() < panel.height()) {
                    top = $(window).scrollTop();
                }
                let left = $(window).scrollLeft() + Math.floor((w - pw) / 2);
                if ($(window).width() < panel.width()) {
                    left = 0;
                }
                panel.css('top', top + 'px');
                panel.css('left', left + 'px');
            }
            $(window).resize(function () {
                adjustPanelPosition();
            });

            // ボタン押下時にパネル表示
            self.click(function (e) {
                e.preventDefault();
                const obj = new init(panel);
                obj.showModal();
                // 表示位置の調整
                adjustPanelPosition();
            });
        });

        return this;
    }

    $.fn.isystkOverlay.defaults = {
        closeCallback: null, // 画面を閉じた際のコールバック
        openCallback: null // 画面を開いた際のコールバック
    };

})(jQuery);


