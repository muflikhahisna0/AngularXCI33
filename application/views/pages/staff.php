<script src="https://code.angularjs.org/1.6.9/angular.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<div class="row" ng-controller="StaffController">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <input type="button" value="Show Angular" ng-click="showAngular()" />
                <input type="button" value="Show Me" ng-click="showMe()" />
                <br><br>
                <div ng-show="IsAngular">Angular</div>
                <div ng-show="IsMe">Me</div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Staff Form</h4>
                <p class="card-description"> Staff form layout </p>
                <form class="forms-sample" name="staffFormAdd">
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Full Name" ng-model="name" name="name" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormAdd.name.$dirty && staffFormAdd.name.$error.required">Name is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" ng-model="email" name="email" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormAdd.email.$dirty && staffFormAdd.email.$error.required">Email is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputNumber" placeholder="Mobile number" ng-model="mobile_number" name="mobile_number" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormAdd.mobile_number.$dirty && staffFormAdd.mobile_number.$error.required">Mobile Number is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword1" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password" ng-model="password1" name="password1" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormAdd.password1.$dirty && staffFormAdd.passoword1.$error.required">Password is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password" ng-model="password2" name="password2" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormAdd.password2.$dirty && staffFormAdd.password2.$error.required">Password is required.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2" ng-click="insert()" ng-disabled="staffFormAdd.$invalid">Submit</button>
                    <button class="btn btn-light" ng-click="clearForm()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input id="inputSearch" ng-model="keyword" type="text" class="form-control bg-transparent border-0" placeholder="Search Name..">
                        </div>
                    </form>
                </div>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-show="filterData==0">
                            <th colspan="5">No Data!</th>
                        </tr>
                        <tr ng-repeat="staff in staffs | filter :{ name: keyword } as filterData">
                            <th scope="row">{{ $index+1 }}</th>
                            <td>{{ staff.name }}</td>
                            <td>{{ staff.email }}</td>
                            <td>{{ staff.mobile_number }}</td>
                            <td>{{ staff.password1 }}</td>
                            <td>
                                <button class="btn btn-sm badge-success" ng-click="edit($index)">Edit</button>
                                <button class="btn btn-gradient-primary mr-2" ng-click="update($index, name2, email2, mobile_number2, password12)" ng-disabled="staffFormUpdate.$invalid">Update</button>
                                <button class="btn btn-sm badge-danger" ng-click="delete($index)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Form</h4>
                <p class="card-description">Edit Staff Data</p>
                <form class="forms-sample" name="staffFormUpdate" action="#">
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName2" placeholder="Full Name" ng-model="name2" name="name22" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormUpdate.name2.$dirty && staffFormUpdate.name2.$error.required">Name is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" ng-model="email2" name="email2" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormUpdate.email2.$dirty && staffFormUpdate.email2.$error.required">Email is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputNumber" placeholder="Mobile number" ng-model="mobile_number2" name="mobile_number2" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormUpdate.mobile_number2.$dirty && staffFormUpdate.mobile_number2.$error.required">Mobile Number is required.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword1" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password" ng-model="password12" name="password12" required>
                            <small id="nameHelp" class="form-text text-danger" ng-show="staffFormUpdate.password12.$dirty && staffFormUpdate.passoword12.$error.required">Password is required.</small>
                        </div>
                    </div>
                    <button class="btn btn-gradient-primary mr-2" ng-click="update($index, name2, email2, mobile_number2, password12)" ng-disabled="staffFormUpdate.$invalid">Update</button>
                    <button class="btn btn-light" ng-click="clearForm2()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>