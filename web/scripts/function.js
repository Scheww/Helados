/**
 * Created by Tomas on 21/9/16.
 */
function isEmail (email) {
    var filter = /^([a-zA-Z0-9!#$%&'*+/=?^_{|}~-]+(?:\.[a-zA-Z0-9!#$%&*+/=?^_{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?)$/;

    return filter.test(email);
}

function objectResponse (status, message) {
    console.log(message);

    return;

    function showResponse () {
        var response = $('<div class="response' + ' ' + status + '" id="response"></div>');

        $(response)
            .append('<div class="response-left"></div>')
            .append('<div class="response-right"> <p>' + message + '</p> <input type="button"> </div>')
            .appendTo('body')
            .show('slide', { direction: 'up' });

        $(response)
            .find('input[type="button"]')
            .click(function () {
                $(response).fadeOut('fast', function () {
                    $(this).remove();
                });
            });

        setTimeout(function () {
            $(response).fadeOut('fast', function () {
                $(this).remove();
            });
        }, 5000);
    }

    if ($('.response').length > 0) {
        $('.response').fadeOut('fast', function () {
            $('.response').remove();

            showResponse ();
        });
    } else {
        showResponse ();
    };
}

function validateEmailsForm () {
    var form = $(arguments[0]);

    var f = 0;
    var r = 0;

    for (var i = 1; i < arguments.length; i++) {
        var input = $(form).find('[name="' + arguments[i] + '"]')[0];
        var value = $(input).val();

        if (value.length === 0) {
            $(input).css('border-color', '');

            r++;
        } else {
            if (isEmail (value)) {
                $(input).css('border-color', '');

                r++;
            } else {
                $(input).css('border-color', 'rgba(235, 20, 0, 1)');

                if (f === 0) {
                    $(input).focus();

                    f++;
                };
            };
        };
    };

    if (r === (arguments.length - 1)) {
        return true;
    } else {
        objectResponse ('error', 'Hay uno o mas emails incorrectos');

        return false;
    };
}

function validateInputsForm () {
    var form = $(arguments[0]);

    var f = 0;
    var r = 0;

    for (var i = 1; i < arguments.length; i++) {
        var input = $(form).find('[name="' + arguments[i] + '"]')[0];
        var value = $(input).val();

        if (value.length === 0) {
            $(input).css('border-color', 'rgba(235, 20, 0, 1)');

            if (f === 0) {
                $(input).focus();

                f++;
            };
        } else {
            $(input).css('border-color', '');

            r++;
        };
    };

    if (r === (arguments.length - 1)) {
        return true;
    } else {
        objectResponse ('error', 'Falta completar uno o mas campos (*)');

        return false;
    };
}

function objectLoader (event, append) {
    function startLoader () {
        if ($('.loader').length === 0) {
            var loader = $('<div class="loader" id="loader"></div>');

            if ($(append).length === 0) {
                append = $('body');
            };

            $(loader)
                .appendTo($(append));

            var options = {
                lines: 11,
                length: 0,
                width: 5,
                radius: 10,
                corners: 1,
                rotate: 0,
                direction: 1,
                color: '#000000',
                speed: 1,
                trail: 75,
                shadow: false,
                className: 'loader-spinner',
                zIndex: 6500,
                top: '50%',
                left: '50%'
            };
            var target  = document.getElementById('loader');
            var spinner = new Spinner(options).spin(target);

            $(loader)
                .fadeIn(100);
        };
    }

    function stopLoader () {
        $('.loader')
            .fadeOut(100, function () {
                $(this).remove();
            });
    }

    if (event === 'start') {
        startLoader ();
    } else if (event === 'stop') {
        stopLoader ();
    };
}