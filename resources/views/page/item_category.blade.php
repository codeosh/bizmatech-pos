<!-- resources/views/page/item_cateegory.blade.php -->
@extends('layout.main_layout')

@section('title', 'BizmaTech - Item Category - POS')

@push('subnav-title')
Item Categories
@endpush

@section('content')
@include('layout.subnav_header')
<<<<<<< HEAD
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
                        <button type="add" class="btn btn-primary btn-glow w-70 mb-2">
                        <i class="fa-solid fa-plus"></i>Add New</button>
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
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C002</td>
                                    <td>Pi Stocks</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C003</td>
                                    <td>Services</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C004</td>
                                    <td>Groceries</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C005</td>
                                    <td>Hardware</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C006</td>
                                    <td>Tshirt</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C007</td>
                                    <td>Food</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>C008</td>
                                    <td>Drinks</td>
                                    <td style="width: auto;">
                                        <button class="btn btn-primary btn-glow btn-sm">
                                        <i class="fa-solid fa-pencil"></i> Update</button>
                                        <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
=======
<div class="card mt-5 ms-5 me-5">
    <div class="card-body">
        <div class="row justify-content-center">
            <!-- Floating Input 1: Code -->
            <div class="col-md-4">
                <div class="form-floating mt-2">
                    <input type="text" id="tblCat_Code" name="tblCat_Code" class="form-control" autocomplete="off" />
                    <label for="tblCat_Code">Code</label>
>>>>>>> c0428cb39c2db964db2c160f6a30154f783c0f76
                </div>
            </div>

            <!-- Floating Input 2: Description -->
            <div class="col-md-4">
                <div class="form-floating mt-2">
                    <input type="text" class="form-control" id="tblCat_Description" name="tblCat_Description" />
                    <label for="tblCat_Description">Description</label>
                </div>
            </div>

            <!-- Buttons Column -->
            <div class="col-md-3 d-flex flex-column mb-3">
                <button type="button" class="btn btn-primary btn-sm w-75 mb-2" id="addCategoryBtn">
                    <i class="fas fa-plus"></i> Add</button>
                <button type="button" class="btn btn-secondary w-75 btn-sm">Reset</button>
            </div>
        </div>
    </div>

    @include('partials.tblitem_category', ['categories' => $categories])
</div>
@endsection