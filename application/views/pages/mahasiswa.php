<div class="content-wrapper" ng-controller="MahasiswaController">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
            </span> Mahasiswa </h3>
    </div>
    <div class="row" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup page-title-icon text-white">
                <p>Students List</p>
                <a href="" ng-click="add()" class=" btn download-button purchase-button ml-auto "> <i class="mdi mdi-account-plus"></i> Add Data</a>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Number </th>
                                    <th> Name </th>
                                    <th> NIM </th>
                                    <th> Status </th>
                                    <th> Email </th>
                                    <th> Major </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="mhs in Mahasiswa">
                                    <td>
                                        {{ $index + 1 }}</td>
                                    <td>{{ mhs.name }}</td>
                                    <td>{{ mhs.nim }}</td>
                                    <td>
                                        <label class="badge badge-gradient-success">{{ mhs.status }}</label>
                                    </td>
                                    <td> {{ mhs.email }} </td>
                                    <td> {{ mhs.major }} </td>
                                    <td>
                                        <label ng-click="edit()" class="badge badge-gradient-info">Edit</label>
                                        <label ng-click="delete($index)" class="badge badge-gradient-danger">Delete</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>