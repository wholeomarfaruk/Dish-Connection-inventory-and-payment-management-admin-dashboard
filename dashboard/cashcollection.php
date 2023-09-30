<?php
// Checking Authentication Start
// session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
//   header('location: login.php');
//   exit;
// }
//Chacking Authentication End

// page title 
$pagetitle = "Dashborad"; 
$currentpage = "dashborad"; 

//  Header inluding 

require('header.php');
?>
<!-- Header inluding end -->

<div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>PURCHASE LIST</h4>
                        <h6>Manage your purchases</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addpurchase.html" class="btn btn-added">
                            <img src="assets/img/icons/plus.svg" alt="img">Add New Purchases
                        </a>
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
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="datetimepicker cal-icon"
                                                placeholder="Choose Date">
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Reference">
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Supplier</option>
                                                <option>Supplier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Status</option>
                                                <option>Inprogress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Choose Payment Status</option>
                                                <option>Payment Status</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="assets/img/icons/search-whites.svg" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Client Name</th>
                                        <th>Client ID</th>
                                        <th>Bill Month</th>
                                        <th>Status</th>
                                        <th>Grand Total</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Payment Status</th>
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
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="text-bolds">Afsar Vai</td>
                                        <td>PT001</td>
                                        <td>Nov 2022</td>
                                        <td><span class="badges bg-lightred">Pending</span></td>
                                        <td>550</td>
                                        <td>120</td>
                                        <td>550</td>
                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                        <td class="text-center">
                                            <a class="btn btn-success text-white" href="javascript:void(0);">
                                            Paid
                                            </a>
                                            <a class=" btn btn-warning text-white" href="javascript:void(0);">
                                            Partial
                                            </a>
                                                                                        <a class=" btn btn-secondary text-white " href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                        Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                        Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
                                                            src="assets/img/icons/plus-circle.svg" class="me-2"
                                                            alt="img">Create Payment</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"><img
                                                            src="assets/img/icons/download.svg" class="me-2"
                                                            alt="img">Download pdf</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item confirm-text"><img
                                                            src="assets/img/icons/delete1.svg" class="me-2"
                                                            alt="img">Delete Sale</a>
                                                </li>
                                            </ul>
                                           
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

<!-- footer including  -->
<?php
require('footer.php');
?>