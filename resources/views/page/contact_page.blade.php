<!-- resources\views\page\contact_page.blade.php -->
@extends('layout.main_layout')

@section('title', 'BizmaTech - Contacts - POS')

@push('subnav-title')
Contact Lists
@endpush

@section('content')
@include('layout.subnav_header')

<!-- Search Bar with Two Dropdowns -->
<div class="container mt-4">
    <!-- Add some margin-top for spacing -->
    <div class="row">
        <div class="col-md-8">
            <!-- Adjusted column width for search and dropdowns -->
            <form action="#" method="GET">
                <!-- Replace # with your search route -->
                <div class="input-group">
                    <!-- First Dropdown Input -->
                    <select class="form-select" aria-label="Filter options">
                        <option selected>All Entry</option>
                        <option value="1">Customer</option>
                        <option value="2">Supplier</option>
                        <option value="3">VIP</option>
                        <option value="4">Friends</option>
                        <option value="5">Unspecified</option>
                        <option value="6">Address</option>
                        <option value="7">Contact No</option>
                    </select>
                    <!-- Second Dropdown Input -->
                    <select class="form-select" aria-label="Additional filter options">
                        <option selected>Sort By</option>
                        <option value="1">Default</option>
                        <option value="2">Alphabetical</option>
                        <option value="3">Ascending</option>
                        <option value="4">Descending</option>
                    </select>
                    <!-- Search Input -->
                    <input type="text" class="form-control" placeholder="Search contacts..."
                        aria-label="Search contacts" aria-describedby="search-button">
                    <!-- Search Button -->
                    <button class="btn btn-primary" type="submit" id="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i> <!-- Font Awesome search icon -->
                    </button>
                </div>
            </form>
        </div>
        <!-- Buttons for Add New and Print -->
        <div class="col-md-4 d-flex justify-content-end align-items-center">
            <!-- Add New Button -->
            <button class="btn btn-success me-2" type="button" id="add-new-button" data-bs-toggle="modal"
                data-bs-target="#addNewModal">
                <i class="fa-solid fa-plus"></i> Add New
            </button>
            <!-- Print Button -->
            <button class="btn btn-secondary" type="button" id="print-button">
                <i class="fa-solid fa-print"></i> Print
            </button>
        </div>
    </div>
</div>
<!-- Table -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row mt-4">
                <!-- Add margin-top for spacing -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID's</th>
                                    <th>Name</th>
                                    <th style="width: 200px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>John Doe</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Jane Smith</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Alice Johnson</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Bob Brown</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Charlie Davis</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Record Count -->
                    <div class="mt-3">
                        <strong>Total Records:</strong> 5
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewModalLabel">Add New Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form inside the modal -->
                    <form id="addNewForm">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="seqCode" class="form-label">SeQ-Code</label>
                                    <input type="text" class="form-control" id="seqCode" required>
                                </div>
                                <div class="mb-3">
                                    <label for="f1IdNumber" class="form-label">[F1] ID Number</label>
                                    <input type="text" class="form-control" id="f1IdNumber" required>
                                </div>
                                <div class="mb-3">
                                    <label for="f2Id" class="form-label">[F2] ID</label>
                                    <input type="text" class="form-control" id="f2Id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="customerName" class="form-label">[F3] Customer/Consignee Name</label>
                                    <input type="text" class="form-control" id="customerName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contactPerson" class="form-label">Contact Person</label>
                                    <input type="text" class="form-control" id="contactPerson" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="group" class="form-label">Group</label>
                                    <select class="form-select" id="group" required>
                                        <option value="" disabled selected>Select a group</option>
                                        <option value="Customer">Customer</option>
                                        <option value="Supplier">Supplier</option>
                                        <option value="VIP">VIP</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Unspecified">Unspecified</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="vatTin" class="form-label">VAT TIN (NOS.)</label>
                                    <input type="text" class="form-control" id="vatTin" required>
                                </div>
                                <div class="mb-3">
                                    <label for="termsOfPayment" class="form-label">Terms of Payment</label>
                                    <input type="text" class="form-control" id="termsOfPayment" required>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contactNo" class="form-label">Contact No.</label>
                                    <input type="text" class="form-control" id="contactNo" required>
                                </div>
                            </div>
                        </div>

                        <!-- Full-width Row for Note/Comment -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="noteComment" class="form-label">Note/Comment</label>
                                    <textarea class="form-control" id="noteComment" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="addNewForm" class="btn btn-primary btn-glow">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection