app.controller("MahasiswaController", [
    "$scope",
    "$location",
    "$timeout",
    "MahasiswaServices",
    "sharedData",
    function ($scope, $location, $timeout, MahasiswaServices, sharedData) {
        var self = $scope;

        self.Mahasiswa = MahasiswaServices.Mahasiswa;
        self.init = function () { };

        // self.Mahasiswa = [
        //     {
        //         name: "muflikhah",
        //         nim: "11.11.11",
        //         status: "active",
        //         email: "muflikhah@gmail.com",
        //         major: "informathic"
        //     },
        //     {
        //         name: "isna",
        //         nim: "22.22.22",
        //         status: "active",
        //         email: "isna@gmail.com",
        //         major: "information system"
        //     }
        // ]

        self.add = function () {
            sharedData.FormTitle = "Add";
            $location.path("/add");
        };
        self.edit = function (index) {
            sharedData.FormTitle = "Edit";
            sharedData.Mahasiswa = index;
            console.log(`MahasiswaController edit function called: ${index}`)
            // self.newMahasiswa = MahasiswaServices.get(index)
            $location.path("/edit");
        };
        self.delete = function (index) {
            self.Mahasiswa.splice(index, 1);
        };
        self.init();
    },
]);

app.controller("MahasiswaAddController", [
    "$scope",
    "$location",
    "$timeout",
    "MahasiswaServices",
    "sharedData",
    function ($scope, $location, $timeout, MahasiswaServices, sharedData) {
        var self = $scope;
        self.Data = [];

        self.UI = [];
        self.UI.FormTitle = "";

        self.init = function () {
            self.UI.FormTitle = sharedData.FormTitle;
        };

        self.back = function () {
            $location.path("/");
        };

        self.save = function () {
            MahasiswaServices.add(self.newMahasiswa);
            self.newMahasiswa = {};

            $location.path("/");
        }

        self.clearForm = function () {
            self.newMahasiswa = {};
        }

        self.init();
    },
]);

app.controller("MahasiswaEditController", [
    "$scope",
    "$location",
    "$timeout",
    "MahasiswaServices",
    "sharedData",
    function ($scope, $location, $timeout, MahasiswaServices, sharedData) {
        var self = $scope;
        self.Data = [];

        self.UI = [];
        self.UI.FormTitle = "";

        self.init = function () {
            self.UI.FormTitle = sharedData.FormTitle;
        };

        self.back = function () {
            $location.path("/");
        };

        self.save = function () {
            self.newMahasiswa = {};
            $location.path("/");
        }

        self.init();
    },
]);