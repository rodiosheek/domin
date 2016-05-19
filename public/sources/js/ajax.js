$(document).ready(function () {

    //добавляет значения из базы в выпадающий список
    var getCities = function (data, items, column) {
        $.each(data, function (key, val) {
            if(val[column] !== '0' && val[column] !== ''){
                items.push('<li>' + val[column] + '</li>');
            }
        });
    };
    //при нажатии на выпадающие li поиска подгружает из базы соответствующие поля 
    $('ul#location').on('click', 'li', function () {
        $('ul#area li').remove();
        var data = {};
        data.city = $(this).text();
        console.log(data.city);
        $.get({
            url : 'get-area',
            cache: false,
            data: data,
            success: function (data) {
                var items = [];
                getCities(data, items, 'area');
                $("ul#area").append(items);
                $('.slct-area').removeClass('disabled');
            },
            error: function (error) {
                console.log(error);
            }
        })
    });
    //подгружает поля поиска при загрузке
    jQuery.fn.getInfo = function () {
        var field = $(this),
            type = $(this).data('type');
        $.get({
            url : 'get_info/' + type,
            cache: false,
            success: function (data) {
                var items = [];
                getCities(data, items, type);
                field.append(items);
            },
            error: function (error) {
                console.log(error);
            }
        })
    };
    
    $('#build-type').getInfo();
    $('#rooms').getInfo();
    $('#location').getInfo();
});