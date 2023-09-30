<?php
// Checking Authentication Start
// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
//   header('location: login.php');
//   exit;
// }
//Chacking Authentication End

// page title 
$pagetitle = "Add Client - Dashboard :: Dish inventory";
$currentpage = "addnewroute";

//  Header inluding 

require('header.php');
?>
<!-- Header inluding end -->

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Add New Route</h4>
            <h6>Add/Update Route</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-6">
            <div class="form-group">
                <select class="select">
                    <option>Noyapara mosjid road</option>
                    <option>kodal doya</option>
                    <option>Green city</option>
                    <option>chowdhury market-boardmill road</option>
                </select>

            </div>

        </div>

        <div class="col-lg-3 col-sm-6 col-12">

            <div class="page-btn">
                <a href="javascript:void(0);" class="btn btn-added addnewarea" id="addnewarea">
                    <img src="assets/img/icons/plus.svg" alt="img" class="me-2">Add New Road
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">



            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>SL No</th>
                            <th>Road</th>
                            <th>Locality</th>
                            <th>Village</th>
                            <th>Police Station</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="text-bolds">1</td>
                            <td>Noyapara mosjid road</td>
                            <td>Noyapara</td>
                            <td>Dogair East Para</td>
                            <td>Demra</td>


                            <td class="text-center">
                                <a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="text-bolds">2</td>
                            <td>Noyapara mosjid road</td>
                            <td>Noyapara</td>
                            <td>Dogair East Para</td>
                            <td>Demra</td>


                            <td class="text-center">
                                <a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="text-bolds">3</td>
                            <td>Noyapara mosjid road</td>
                            <td>Noyapara</td>
                            <td>Dogair East Para</td>
                            <td>Demra</td>


                            <td class="text-center">
                                <a class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>

                            </td>
                        </tr>


  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Route Name</label>
                        <input type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Police Station</label>
                        <select class="select">
                            <option>Choose Road</option>
                            <option>Demra</option>
                            <option>Jatrabari</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Assign Collector</label>
                        <select class="select">
                            <option>Choose Collector</option>
                            <option>Akash (01)</option>
                            <option>Miraz (02)</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-lg-12">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- footer including  -->
<?php
require('footer.php');
?>
<!-- footer including end  -->