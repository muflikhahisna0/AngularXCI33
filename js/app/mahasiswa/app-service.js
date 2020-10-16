app.service("MahasiswaServices", [
    "$http",
    "growlService",
    "sharedData",
    function ($http, growlService, sharedData) {
        let self = this;

        self.Mahasiswa = [];

        self.get = function (index) {
            self.Mahasiswa[index];
        }

        self.add = function (param) {
            self.Mahasiswa.push(param);
        }

        self.edit = function (param) {
            console.log(`MahasiswaServices edit function called: ${index}`);
            self.Mahasiswa.push(param);
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