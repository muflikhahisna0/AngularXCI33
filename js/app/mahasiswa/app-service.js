app.service("MahasiswaServices", [
    "$http",
    "growlService",
    "sharedData",
    function ($http, growlService, sharedData) {
        let self = this;

        self.Mahasiswa = [];

        self.add = function (param) {
            self.Mahasiswa.push(param);
        }

        self.edit = function (index, data) {
            self.Mahasiswa[index] = data;
        }

        self.delete = function (param) {
            let index = self.Mahasiswa.indexOf(param);
            self.Mahasiswa.splice(index, 1);
        }
    }
]);

app.factory("sharedData", [
    function () {
        var data = {};
        return data;
    }
])