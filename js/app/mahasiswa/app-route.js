app.config(function ($routeProvider) {
    $routeProvider.when("/", {
        //route ke folder
        templateUrl: baseViewApiUrl + "mahasiswa",
    })
        .when("/add", {
            //route ke folder
            templateUrl: baseViewApiUrl + "add",
        })
        .when("/edit", {
            //route ke folder
            templateUrl: baseViewApiUrl + "edit",
        });
});
