app.controller("MahasiswaController", [
    "$scope",
    "$location",
    "$timeout",
    function ($scope, $location, $timeout) {
        var self = $scope;
        self.init = function () { };

        self.Mahasiswa = [
            {
                name: "muflikhah",
                nim: "11.11.11",
                status: "active",
                email: "muflikhah@gmail.com",
                major: "informathic"
            },
            {
                name: "isna",
                nim: "22.22.22",
                status: "active",
                email: "isna@gmail.com",
                major: "information system"
            }
        ]

        self.add = function () {
            $location.path("/add");
        };
        self.edit = function () {
            $location.path("/edit");
        };
        self.delete = function ($index) {
            self.Mahasiswa.splice($index, 1);
        };

        self.init();
    },
]);

app.controller("MahasiswaAddController", [
    "$scope",
    "$location",
    "$timeout",
    function ($scope, $location, $timeout) {
        var self = $scope;
        self.firstname = "John";
        self.init = function () { };

        $scope.insert = function () {
            $scope.Mahasiswa.push({
                name: $scope.name,
                nim: $scope.nim,
                status: $scope.status,
                email: $scope.email,
                major: $scope.major
            });
            $location.path("/add");
            $scope.clearForm();
        }

        $scope.clearForm = function () {
            $scope.name = ""; $scope.nim = ""; $scope.status = ""; $scope.email = ""; $scope.major = "";
        }

        self.init();

        self.back = function () {
            $location.path("/");
        }
    },
]);

app.controller("MahasiswaEditController", [
    "$scope",
    "$location",
    "$timeout",
    function ($scope, $location, $timeout) {
        var self = $scope;
        self.firstname = "John";
        self.init = function () { };

        self.init();

        self.back = function () {
            $location.path("/");
        }
    },
]);