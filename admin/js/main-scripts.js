//~~ Ajax calls to save settings and other things
jQuery(document).ready(function () {

    //~~ Saving admin settings with ajax call
    jQuery(document).on('submit', '.wpur_general_settings', function (e) {
        e.preventDefault();
        let $form = jQuery(this);
        let data = $form.serializeArray();
        let save_btn = $form.find('.save_gen');
        let response_area = jQuery(document).find('.settings_response');


        //~~ preparing ajax data
        data.push({'name': 'action', 'value': 'wpur_request_processor'});
        data.push({'name': 'wpur_what', 'value': 'save_general_settings'});

        console.log(data);
        save_btn.text('Saving...');
        jQuery.post(
            ajaxurl,
            data,
            function (response) {
                let res = JSON.parse(response);
                if (res.status === 'OK') {
                    setTimeout(function () {
                        response_area.addClass(' wpur_alert wpur_alert_success wpur_icon wpur_icon_thumbs-up');
                        response_area.text(res.message);
                        jQuery('html, body').animate({scrollTop: 0}, 'slow');
                        save_btn.text('Save Settings');
                    }, 1000);
                } else {
                    response_area.addClass(' wpur_alert wpur_alert_danger wpur_icon wpur_icon_thumbs-down');
                    response_area.text(" Something Went wrong, Please try again");
                }

            });
    });

});