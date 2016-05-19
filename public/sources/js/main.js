$(document).ready(function () {
    //делает не кликабельным выбор райнов, если не выбран город
    $('.slct-area').addClass('disabled');

    $('.search-item:last').css('border-bottom', 'none');
    //показывает текущую дату на главной странице
    $('.date').text(moment().format('DD.MM.YYYY'));
    //скрывает выпадающие списки поиска
    var ifDrop = function () {
        if (!$('.drop').is('hidden')) {
            $('.drop').slideUp(100);
            var active = $('.form-border').find('.active');
            active.removeClass('active');
        }
    };
    //присваевает значение соответствующим input в форме поиска
    $('.search-form').find('a').click(function () {
        var link = $(this);
        ifDrop();
        var drop = link.parent().find('.drop');
        if (drop.is(':hidden')) {
            drop.slideDown(100);
            $(this).addClass('active');
            $(this).next('ul').find('li').click(function () {
                var data = $(this).text();
                $(this).parent().parent().find('input').val(data);
                link.removeClass('active').html(data);
                drop.slideUp(100);
            });

        } else {
            link.removeClass('active');
            drop.slideUp(100);
        }
        return false;
    });
    //отменяет введение не цифр в форме поиска
    $('input').on('input', function () {
        this.value = this.value.replace(/^\.|[^\d\.]|\.(?=.*\.)|^0+(?=\d)/g, '');
    });

    //Сортировать по цене площади дате  на странице search.blade.php
    $('.search-active').click(function (e) {
        e.preventDefault();
        var linkActive = $('.search-active-span').find('.link-active');
        linkActive.removeClass('link-active');
        $(this).addClass('link-active');
    });
    //показывать по 30 50 100 на странице search.blade.php
    $('.search-active-sum').click(function (e) {
        e.preventDefault();
        var linkActive = $('.search-active-sum-active').find('.link-active');
        linkActive.removeClass('link-active');
        $(this).addClass('link-active');
    });
    //показывает цену в долларах, евро и грн
    $('.value').click(function (e) {
        e.preventDefault();
        console.log('===price===');
        var parent = $(this).parent().parent('.price-info');
        var price = parent.find('div.item-price').data('price');
        var find = parent.find('.price-box-left .item-price');
        if(parent.length === 0) {
            parent = $(this).parent().parent('.card-title-right');
            price = parent.find('.price-box').data('price');
            find = parent.find('.price-box');
        }
        var curs = $(this).data('curs');
        var dollar = accounting.formatNumber(price, 0, " ", ",");
        var euro = accounting.formatNumber((price * 0.86), 0, " ", ",");
        var grn = accounting.formatNumber((price * 24.87), 0, " ", ",");
        switch (curs) {
            case 'dollar':
                find.text(dollar);
                parent.find('.show-dollar').show();
                parent.find('.show-grn').hide();
                parent.find('.show-euro').hide();
                break;
            case 'euro':
                find.text(euro);
                parent.find('.show-euro').show();
                parent.find('.show-grn').hide();
                parent.find('.show-dollar').hide();
                break;
            case 'grn':
                find.text(grn);
                parent.find('.show-grn').show();
                parent.find('.show-dollar').hide();
                parent.find('.show-euro').hide();
                break;
        }
        if($('.value').hasClass('value-active')) {
            $('.value').removeClass('value-active');
        } else {
        }
        $(this).addClass('value-active');
    });
    
});


