$(".admin_status")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admin_status_desc")
            .removeClass("hide_text");
        $(e.currentTarget).parent().find(".admin_status_text")
            .addClass("show_text");
    }, function (e) {
        $(e.currentTarget).parent().find(".admin_status_desc")
            .addClass("hide_text");
        $(e.currentTarget).parent().find(".admin_status_text")
            .removeClass("show_text");
    });

$(".admin_group")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admin_group_desc")
            .removeClass("hide_text");
        $(e.currentTarget).parent().find(".admin_group_text")
            .addClass("show_text");
    }, function (e) {
        $(e.currentTarget).parent().find(".admin_group_desc")
            .addClass("hide_text");
        $(e.currentTarget).parent().find(".admin_group_text")
            .removeClass("show_text");
    });

$(".admin_term")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admin_term_desc")
            .removeClass("hide_text");
        $(e.currentTarget).parent().find(".admin_term_text")
            .addClass("show_text");
    }, function (e) {
        $(e.currentTarget).parent().find(".admin_term_desc")
            .addClass("hide_text");
        $(e.currentTarget).parent().find(".admin_term_text")
            .removeClass("show_text");
    });

$(".admins_bans")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admins_bans_count")
            .removeClass("hide_info");
        $(e.currentTarget).parent().find(".admins_bans_desc")
            .addClass("hide_info");
    }, function (e) {
        $(e.currentTarget).parent().find(".admins_bans_count")
            .addClass("hide_info");
        $(e.currentTarget).parent().find(".admins_bans_desc")
            .removeClass("hide_info");
    });

$(".admins_comms")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admins_comms_count")
            .removeClass("hide_info");
        $(e.currentTarget).parent().find(".admins_comms_desc")
            .addClass("hide_info");
    }, function (e) {
        $(e.currentTarget).parent().find(".admins_comms_count")
            .addClass("hide_info");
        $(e.currentTarget).parent().find(".admins_comms_desc")
            .removeClass("hide_info");
    });

$(".admins_warns")
    .hover(function (e) {
        $(e.currentTarget).parent().find(".admins_warns_count")
            .removeClass("hide_info");
        $(e.currentTarget).parent().find(".admins_warns_desc")
            .addClass("hide_info");
    }, function (e) {
        $(e.currentTarget).parent().find(".admins_warns_count")
            .addClass("hide_info");
        $(e.currentTarget).parent().find(".admins_warns_desc")
            .removeClass("hide_info");
    });