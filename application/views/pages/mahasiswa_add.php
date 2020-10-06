<div class="content-wrapper" ng-controller="MahasiswaAddController">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard </h3>
    </div>
    <div class="row" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Add Student's Data</p>
                <a href="" ng-click="back()" class="btn download-button purchase-button ml-auto text-white">Cancel</a>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" name="AddFormMahasiswa">
                        <div class="form-group">
                            <label for="InputName">Full Name</label>
                            <input type="text" class="form-control" id="InputName" name="name" placeholder="Name..">
                        </div>
                        <div class="form-group">
                            <label for="InputNim">NIM </label>
                            <input type="text" class="form-control" id="InputNim" name="nim" placeholder="Nim..">
                        </div>
                        <div class="form-group">
                            <label for="InputStatus">Status</label>
                            <input type="text" class="form-control" id="InputStatus" name="status" placeholder="Status..">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email..">
                        </div>
                        <div class="form-group">
                            <label for="InputMajor">Major</label>
                            <select class="form-control" id="InputMajor" name="major">
                                <option>IF</option>
                                <option>SI</option>
                                <option>Ilkom</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2" ng-click="insert()" ng-disabled="AddFormMahasiswa.$invalid">Submit</button>
                        <button class="btn btn-light" ng-click="clearForm()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>