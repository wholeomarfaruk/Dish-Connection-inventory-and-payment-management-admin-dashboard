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
$currentpage = "addclient"; 

//  Header inluding 

require('header.php');
?>
<!-- Header inluding end -->

<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Customer Management</h4>
                        <h6>Add/Update Customer</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Monthly Bill</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Police Station</label>
                                    <select class="select">
                                        <option>Choose P.S</option>
                                        <option>Demra</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Village</label>
                                    <select class="select">
                                        <option>Choose Village</option>
                                        <option>Dogair East Para</option>
                                        <option>Village 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Locality</label>
                                    <select class="select">
                                        <option>Choose Locality</option>
                                        <option>Noaya Para</option>
                                        <option>Locality 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Road</label>
                                    <select class="select">
                                        <option>Choose Road</option>
                                        <option>Noyapara Mosjid Road</option>
                                        <option>Road 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="form-group">
                                    <label>Address</label>
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
                                <div class="form-group">
                                    <label> Avatar</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
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