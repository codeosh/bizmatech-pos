<!-- resources/views/page/item_cateegory.blade.php -->
@extends('layout.main_layout')

@section('title', 'BizmaTech - Item Category - POS')

@push('subnav-title')
Item Categories
@endpush

@section('content')
@include('layout.subnav_header')
<div class="card mt-5 ms-5 me-5">
    <div class="card-body">
        <div class="row justify-content-center">
            <!-- Floating Input 1: Code -->
            <div class="col-md-4">
                <div class="form-floating mt-2">
                    <input type="text" id="tblCat_Code" name="tblCat_Code" class="form-control" autocomplete="off" />
                    <label for="tblCat_Code">Code</label>
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
    sad
</div>
@endsection