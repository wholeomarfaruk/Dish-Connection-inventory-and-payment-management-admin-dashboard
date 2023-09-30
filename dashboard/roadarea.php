<?php
// Checking Authentication Start
// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
//   header('location: login.php');
//   exit;
// }
//Chacking Authentication End

// page title    
$pagetitle = "Add New Road - Dashboard"; 
$currentpage = "newroad"; 

//  Header inluding 

require('header.php');
?>
<!-- Header inluding end -->

<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Police Road List</h4>
                        <h6>Manage your Road</h6>
                    </div>
                    <div class="page-btn">
                        <a href="javascript:void(0);" class="btn btn-added addnewarea" id="addnewarea">
                            <img src="assets/img/icons/plus.svg" alt="img" class="me-2">Add New Road
                        </a>
                    </div>
                </div>
                
                <div class="card area_input" id="area_input" style="display:none;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Police Station Name</label>
                                    <input type="text">
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
                                <a href="statelist.html" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="assets/img/icons/filter.svg" alt="img">
                                        <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                    </a>
                                </div>
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                            alt="img"></a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="assets/img/icons/pdf.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="assets/img/icons/excel.svg" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="assets/img/icons/printer.svg" alt="img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Country</option>
                                                <option>USA</option>
                                                <option>India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Region</option>
                                                <option>Region</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Status</option>
                                                <option>Disable</option>
                                                <option>Enable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="assets/img/icons/search-whites.svg" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Country Name</th>
                                        <th>Region</th>
                                        <th>Status</th>
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
                                        <td>China</td>
                                        <td>Beijing </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user1" class="check">
                                                <label for="user1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>USA</td>
                                        <td>Newyork </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user2" class="check" checked="">
                                                <label for="user2" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Athens</td>
                                        <td>Greece </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user3" class="check" checked="">
                                                <label for="user3" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Thailand</td>
                                        <td>Bangkok </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user4" class="check" checked="">
                                                <label for="user4" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Phuket island</td>
                                        <td>Mueang Phuket </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user5" class="check">
                                                <label for="user5" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Germany</td>
                                        <td>Berlin</td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user6" class="check">
                                                <label for="user6" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Angola</td>
                                        <td>Luanda</td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user7" class="check">
                                                <label for="user7" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Albania</td>
                                        <td>Albania </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user8" class="check">
                                                <label for="user8" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Turkey </td>
                                        <td>Ankara </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user9" class="check" checked>
                                                <label for="user9" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Phuket island</td>
                                        <td>Mueang Phuket </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user10" class="check">
                                                <label for="user10" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Germany</td>
                                        <td>Berlin</td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user11" class="check">
                                                <label for="user11" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Angola</td>
                                        <td>Luanda</td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user12" class="check">
                                                <label for="user12" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Albania</td>
                                        <td>Albania </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user15" class="check">
                                                <label for="user15" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>Turkey </td>
                                        <td>Ankara </td>
                                        <td>
                                            <div
                                                class="status-toggle d-flex justify-content-between align-items-center">
                                                <input type="checkbox" id="user17" class="check" checked>
                                                <label for="user17" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="me-3" href="editcountry.html">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="me-3 confirm-text" href="javascript:void(0);">
                                                <img src="assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Places Management</h4>
                        <h6>Add/Update Places</h6>
                    </div>
                </div>



            </div>

<!-- footer including  -->
<?php
require('footer.php');
?>


