var app = angular.module("AppAdmin", ["ngRoute", "ngSanitize"]);

app.service("growlService", function () {
    var gs = {};

    gs.notify = function (message, status) {
        var type = "";

        if (status == 200) {
            type = "success";
        } else if (status == 400 || status == 403) {
            type = "warning";
        } else if (status == 500) {
            type = "danger";
        } else if (status == 401) {
            type = "danger";
        } else {
            type = "info";
        }
    };
    return gs;

});