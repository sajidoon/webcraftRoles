//~~ Ajax calls to save settings and other things
jQuery(document).ready(function () {

    //SA~~ Saving admin settings with ajax call
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


    jQuery(document).on('submit', '.wpur_general_settings_seo', function (e) {
        e.preventDefault();
        let $form = jQuery(this);
        let data = $form.serializeArray();
        let save_btn = $form.find('.save_gen');
        let response_area = jQuery(document).find('.settings_response');


        //~~ preparing ajax data
        data.push({'name': 'action', 'value': 'wpur_request_processor'});
        data.push({'name': 'wpur_what', 'value': 'save_general_settings_seo'});

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


    //SA~~ Saving admin settings with ajax call
    jQuery(document).on('submit', '.wpur_general_settings_j_editor', function (e) {
        e.preventDefault();
        let $form = jQuery(this);
        let data = $form.serializeArray();
        let save_btn = $form.find('.save_gen');
        let response_area = jQuery(document).find('.settings_response');


        //~~ preparing ajax data
        data.push({'name': 'action', 'value': 'wpur_request_processor'});
        data.push({'name': 'wpur_what', 'value': 'save_general_settings_j_edito'});

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


    //SA~~ post related check box disable
    jQuery(document).ready(function () {
        var $post_checked = jQuery(".wpur_post_user_option").val();
        if ($post_checked == 1) {
            jQuery(document).find('.wpur_post_other_option').removeClass('post_option_active');
        }else {
            jQuery(document).find('.wpur_post_other_option').addClass('post_option_active');
        }
        jQuery('#wpur_user_post').change( function(){
            jQuery(document).find('.wpur_post_other_option').toggleClass('post_option_active');
        })
    });

    //SA~~ page related check box disable
    jQuery(document).ready(function () {
        var $page_checked = jQuery(".wpur_page_user_option").val();
        if ($page_checked == 1) {
            jQuery(document).find('.wpur_page_other_option').removeClass('page_option_active');
        }else {
            jQuery(document).find('.wpur_page_other_option').addClass('page_option_active');
        }
        jQuery('#wpur_user_page').change( function(){
            jQuery(document).find('.wpur_page_other_option').toggleClass('page_option_active');
        })
    });



    //SA~~ post seo related check box disable
    jQuery(document).ready(function () {
        var $post_checked = jQuery(".wpur_post_user_option_seo").val();
        if ($post_checked == 1) {
            jQuery(document).find('.wpur_post_other_option_seo').removeClass('post_option_active');
        }else {
            jQuery(document).find('.wpur_post_other_option_seo').addClass('post_option_active');
        }
        jQuery('#wpur_user_post_seo').change( function(){
            jQuery(document).find('.wpur_post_other_option_seo').toggleClass('post_option_active');
        })
    });

    //SA~~ page seo related check box disable
    jQuery(document).ready(function () {
        var $page_checked = jQuery(".wpur_page_user_option_seo").val();
        if ($page_checked == 1) {
            jQuery(document).find('.wpur_page_other_option_seo').removeClass('page_option_active');
        }else {
            jQuery(document).find('.wpur_page_other_option_seo').addClass('page_option_active');
        }
        jQuery('#wpur_user_page_seo').change( function(){
            jQuery(document).find('.wpur_page_other_option_seo').toggleClass('page_option_active');
        })
    });

    //SA~~ post related check box disable
    jQuery(document).ready(function () {
        var $post_checked = jQuery(".wpur_post_user_option_j_editor").val();
        if ($post_checked == 1) {
            jQuery(document).find('.wpur_post_other_option_j_editor').removeClass('post_option_active');
        }else {
            jQuery(document).find('.wpur_post_other_option_j_editor').addClass('post_option_active');
        }
        jQuery('#wpur_user_post_j_editor').change( function(){
            jQuery(document).find('.wpur_post_other_option_j_editor').toggleClass('post_option_active');
        })
    });

    //SA~~ page related check box disable
    jQuery(document).ready(function () {
        var $page_checked = jQuery(".wpur_page_user_option_j_editor").val();
        if ($page_checked == 1) {
            jQuery(document).find('.wpur_page_other_option_j_editor').removeClass('page_option_active');
        }else {
            jQuery(document).find('.wpur_page_other_option_j_editor').addClass('page_option_active');
        }
        jQuery('#wpur_user_page_j_editor').change( function(){
            jQuery(document).find('.wpur_page_other_option_j_editor').toggleClass('page_option_active');
        })
    });


});