<!-- resources/views/page/item_cateegory.blade.php -->
@extends('layout.main_layout')

@section('title', 'BizmaTech - Item Category - POS')

@push('subnav-title')
Item Categories
@endpush

@section('content')
@include('layout.subnav_header')
<style>
    /* Apply Poppins font to the entire page */
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Optional: Customize table font size or weight */
    .table {
        font-size: 16px;
        /* Adjust as needed */
    }

    .table thead th {
        font-weight: 600;
        /* Bold headers */
    }

    /* Button styling */
    .btn-custom {
        width: 100%;
        /* Full width for buttons */
        margin-bottom: 10px;
        /* Space between buttons */
    }
</style>

<!-- table -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <!-- Form for Code and Description -->
            <form>
                <div class="row">
                    <!-- Grouped Inputs with Input Group -->
                    <div class="col-md-10">
                        <div class="input-group">
                            <!-- Code Input -->
                            <div class="form-floating">
                                <input type="text" class="form-control" id="code" placeholder="Enter Code">
                                <label for="code">Code</label>
                            </div>
                            <!-- Description Input -->
                            <div class="form-floating">
                                <input type="text" class="form-control" id="description"
                                    placeholder="Enter Description">
                                <label for="description">Description</label>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons Column -->
                    <div class="col-md-2">
                        <!-- Add NewButton -->
                        <button type="add" class="btn btn-primary btn-glow w-70 mb-2">Add New</button>
                        <!-- Reset Button -->
                        <button type="reset" class="btn btn-secondary w-95 mb-2">Reset</button>
                    </div>
            </form>

            <!-- Table Column -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th style="width: 200px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>C001</td>
                                    <td>Others</td>
                                    <td style="width: auto;">
                                        <!-- Set width to auto -->
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C002</td>
                                    <td>Pi Stocks</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C003</td>
                                    <td>Services</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C004</td>
                                    <td>Groceries</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C005</td>
                                    <td>Hardware</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C006</td>
                                    <td>Tshirt</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C007</td>
                                    <td>Food</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C008</td>
                                    <td>Drinks</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @endsection