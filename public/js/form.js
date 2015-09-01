$(document).ready(function() {
    $('[data-buton=true]').click(ajax_submit);

    function ajax_submit(e)
    {
        var p;
        e.preventDefault();
        p = {
            email: $('[data-email=true]').val(),
            nume: $('[data-nume=true]').val(),
            telefon: $('[data-telefon=true]').val(),
            contact: $('[data-checkbox=true]').is(':checked') ? 1 : 0,
            optradio: $('input[type=radio]:checked').val(),
            };
        return $.ajax(
            {
                url: $('[data-form=true]').attr('action'),
                type: $('[data-form=true]').attr('method'),
                data: p,
                content: 'json',
                success: function(s)
                {
                    if(s.status === 'OK')
                    {
                        $('[data-form=true]').hide();
                        $('div.content').hide();
                        $('.invizibil').show();
                        console.log("OK");
                        _gaq.push(['_trackEvent', 'inscriere', 'succes']);
                    }
                    else
                    {
                        console.log("Error");
                    }
                },
                error: function(p)
                {
                    $('.blackline').removeClass("warning");

                    if (typeof p.responseJSON.email != 'undefined')
                    {
                        $('.email-input').addClass("warning");
                        // console.log('Nu exista email');
                    }

                    if (typeof p.responseJSON.nume != 'undefined')
                    {
                        $('.nume-input').addClass("warning");
                        // console.log('Nu exista nume');
                    }

                    if (typeof p.responseJSON.telefon != 'undefined')
                    {
                        $('.telefon-input').addClass("warning");
                        // console.log('Nu exista telefon');
                    }

                    console.log(p);
                },
            });
    }
});