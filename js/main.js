var app = {};
app.Site = function () {
    this.init = function () {
        this.setEvents();
    };

    this.setEvents = function () {
        //bind tab menu click events
        $('.menu-item a').click(function (e) {
            e.preventDefault();
            $('.menu-item.active').removeClass('active');
            $(this).parent().addClass('active');
            $('.menu-item-content').hide();
            $($(this).attr('href')).show();
        });

        $('#hit')
            .mousedown(function (e) {
                $(this).addClass('clicking');
            })
            .mouseup(function (e) {
                $(this).removeClass('clicking');
            })
            .click(function (e) {
                e.preventDefault();
            });

        setInterval('appSite.render()', 300);
        appSite.render();
    };

    this.render = function () {
        this.renderStoreItems();
    };

    this.renderStoreItems = function () {
        var item_template = $('#tpl-store-item').html();
        Mustache.parse(item_template);

        var energy = $('#store-energy').html('');
        for (var i in app.Game.store_items.energy) {
            var item = app.Game.store_items.energy[i];
            var rendered = $(Mustache.render(item_template, item));
            if (item.canBuy()) {
                rendered.find('.unavailable').removeClass('unavailable');
            }
            energy.append(rendered);
        }

        var upgrade = $('#store-upgrade').html('');
        for (var i in app.Game.store_items.upgrade) {
            var item = app.Game.store_items.upgrade[i];
            var rendered = $(Mustache.render(item_template, item));
            if (item.canBuy()) {
                rendered.find('.unavailable').removeClass('unavailable');
            }
            upgrade.append(rendered);
        }
    };
};
app.Game = new Game();

var appSite = new app.Site();
appSite.init();