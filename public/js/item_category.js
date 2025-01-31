$(document).ready(function () {
    $("#addCategoryBtn").click(function () {
        var code = $("#tblCat_Code").val();
        var description = $("#tblCat_Description").val();
        var csrfToken = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: "/item-category/store",
            method: "POST",
            data: {
                tblCat_Code: code,
                tblCat_Description: description,
            },
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            success: function (response) {
                if (response.success) {
                    var newRow = `
                        <tr data-id="${response.category.id}">
                            <td class="text-center">${response.category.unitcode}</td>
                            <td>${response.category.item_desc}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-glow btn-sm me-1">
                                    Update
                                </button>
                                <button type="button" class="btn btn-danger btn-sm delete-category" data-id="${response.category.id}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                    `;
                    $("#categoryTableBody").append(newRow);
                    $("#tblCat_Code").val("");
                    $("#tblCat_Description").val("");

                    toastr.success("Category added successfully!");
                }
            },
            error: function () {
                toastr.error("An error occurred while adding the category.");
            },
        });
    });

    $(document).on("click", ".delete-category", function () {
        var categoryId = $(this).data("id");
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var row = $(this).closest("tr");

        toastr.clear();

        toastr.warning(
            "Are you sure you want to delete this category?",
            "Confirm Delete",
            {
                closeButton: true,
                progressBar: true,
                timeOut: 10000,
                extendedTimeOut: 0,
                tapToDismiss: true,
                positionClass: "toast-top-right",
                onShown: function () {
                    $(".toast-warning .mt-2").remove();

                    $(".toast-warning").append(`
                    <div class="mt-2">
                        <button id="confirmDeleteBtn" class="btn btn-danger btn-sm">Delete</button>
                        <button id="cancelDeleteBtn" class="btn btn-secondary btn-sm">Cancel</button>
                    </div>
                `);

                    $("#confirmDeleteBtn")
                        .off("click")
                        .on("click", function () {
                            $.ajax({
                                url: "/item-category/" + categoryId,
                                method: "DELETE",
                                headers: {
                                    "X-CSRF-TOKEN": csrfToken,
                                },
                                success: function (response) {
                                    if (response.success) {
                                        row.remove();
                                        toastr.success(
                                            "Category deleted successfully!"
                                        );
                                    } else {
                                        toastr.error(response.message);
                                    }
                                },
                                error: function () {
                                    toastr.error(
                                        "An error occurred while deleting the category."
                                    );
                                },
                            });

                            toastr.clear();
                        });

                    $("#cancelDeleteBtn")
                        .off("click")
                        .on("click", function () {
                            toastr.clear();
                        });
                },
            }
        );
    });
});
