app.controller("StaffController", [
    "$scope",
    "$location",
    "$timeout",

    function ($scope, $location, $timeout) {
        $scope.IsAngular = true;
        $scope.IsMe = false;

        $scope.showAngular = function () {
            $scope.IsAngular = true;
            $scope.IsMe = false;
        }
        $scope.showMe = function () {
            $scope.IsMe = true;
            $scope.IsAngular = false;
        }

        $scope.staffs = [
            { name: "isna", email: "isna@gmail.com", mobile_number: 212, password1: 111, password2: 111 }
        ];
        $scope.insert = function () {
            $scope.staffs.push({
                name: $scope.name,
                email: $scope.email,
                mobile_number: $scope.mobile_number,
                password1: $scope.password1,
                password2: $scope.password2
            });
            $scope.clearForm();
        }

        $scope.clearForm = function () {
            $scope.name = ""; $scope.email = ""; $scope.mobile_number = ""; $scope.password1 = ""; $scope.password2 = "";
        }

        $scope.delete = function ($index) {
            $scope.staffs.splice($index, 1);
        }
        $scope.edit = function ($index) {
            $scope.name2 = $scope.staffs[$index].name;
            $scope.email2 = $scope.staffs[$index].email;
            $scope.mobile_number2 = $scope.staffs[$index].mobile_number;
            $scope.password12 = $scope.staffs[$index].password1;
        }

        $scope.update = function ($index, name2, email2, mobile_number2, password12) {
            $scope.staffs[$index] = {
                name: $scope.name2,
                email: $scope.email2,
                mobile_number: $scope.mobile_number2,
                password1: $scope.password12
            }
            $scope.clearForm2();
        }
        $scope.clearForm2 = function () {
            $scope.name2 = ""; $scope.email2 = ""; $scope.mobile_number2 = ""; $scope.password12 = ""; $scope.password22 = "";
        }


    },
]);
