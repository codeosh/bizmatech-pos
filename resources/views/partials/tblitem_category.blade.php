{{-- resources\views\partials\tblitem_category.blade.php --}}
<div class="table-responsive ms-5 me-5">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center" style="width: 10%">Code</th>
                <th style="width: 50%;">Description</th>
                <th style="width: 15%;">Actions</th>
            </tr>
        </thead>
        <tbody id="categoryTableBody">
            @foreach ($categories as $category)
            <tr>
                <td class="text-center">{{ $category->unitcode }}</td>
                <td>{{ $category->item_desc }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-glow btn-sm me-1">
                        Update
                    </button>
                    <button type="button" class="btn btn-danger btn-sm delete-category" data-id="{{ $category->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>