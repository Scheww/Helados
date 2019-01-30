/**
 * Created by Tomas on 29/9/16.
 */
function contact (object) {
    var contact = $(object);
    var form = $(object).find('form').first();

    $(form)
        .submit(function (event) {
            event.preventDefault();

            var self = this;

            if (!validateInputsForm ($(self), 'name', 'email', 'subject', 'message')) {
                return false;
            }

            if (!validateEmailsForm ($(self), 'email')) {
                return false;
            }

            objectLoader ('start', $(contact));

            var data = $(self).serialize();

            $.ajax({
                type: 'POST',
                url: 'ajax/contact.php',
                data: data,
                dataType: 'json'
            })
                .done(function (doneCallbacks) {
                    if (doneCallbacks.status === false) {
                        $(contact).addClass('error');
                    } else if (doneCallbacks.status === true) {
                        $(contact).addClass('success');
                    };

                    $(self)[0].reset();

                    setTimeout(function () {
                        $(contact).removeClass('error');
                        $(contact).removeClass('success');
                    }, 10000);
                })
                .fail(function (failCallbacks) {})
                .always(function (alwaysCallbacks) {
                    objectLoader ('stop');
                });
        });
}

var lastScroll = 0;

function headerScroll() {
    var newScroll = $(document).scrollTop();

    if (newScroll >= 50) {
        $("header#header")
            .addClass("fixed");
    } else {
        $("header#header")
            .removeClass("fixed");
    }

    lastScroll = newScroll;
}

$(document).ready(function () {
    $('header#header button.header-menu').click(function (event) {
        event.preventDefault();

        $('nav#nav').addClass('open');
    });


    $('nav#nav button.nav-close').click(function (event) {
        event.preventDefault();

        $('nav#nav').removeClass('open');
    });


    $('nav#nav ul li a').click(function (event) {
        $('nav#nav').removeClass('open');
    });


    contact($("#form"));

    headerScroll();

    $(document).on("scroll", function () {
        headerScroll();
    })
});