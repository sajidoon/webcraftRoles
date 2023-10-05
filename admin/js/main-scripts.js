//~~ Ajax calls to save settings and other things
jQuery(document).ready(function () {

    //~~ Saving admin settings with ajax call
    jQuery(document).on('submit', '.ptsc_general_settings', function (e) {
        e.preventDefault();
        let $form = jQuery(this);
        let data = $form.serializeArray();
        let save_btn = $form.find('.save_gen');
        let response_area = jQuery(document).find('.settings_response');


        //~~ preparing ajax data
        data.push({'name': 'action', 'value': 'ptsc_request_processor'});
        data.push({'name': 'ptsc_what', 'value': 'save_general_settings'});

        console.log(data);
        save_btn.text('Saving...');
        jQuery.post(
            ajaxurl,
            data,
            function (response) {
                let res = JSON.parse(response);
                if (res.status === 'OK') {
                    setTimeout(function () {
                        response_area.addClass(' ptsc_alert ptsc_alert_success ptsc_icon ptsc_icon_thumbs-up');
                        response_area.text(res.message);
                        jQuery('html, body').animate({scrollTop: 0}, 'slow');
                        save_btn.text('Save Settings');
                    }, 1000);
                } else {
                    response_area.addClass(' ptsc_alert ptsc_alert_danger ptsc_icon ptsc_icon_thumbs-down');
                    response_area.text(" Something Went wrong, Please try again");
                }

            });


    });

});