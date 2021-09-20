<?php $tab = TAB_SPECIALIZATION ?>
@extends("components.main.main")

@section("header_content")
    <button id="btShowModal" class="btn btn-sm btn-neutral">Add Specialization</button>
@endsection

@section("content")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="table-responsive py-4">
                    @include("components.table.specialization")
                </div>
            </div>
        </div>
    </div>
    @include("components.modal.specialization")
@endsection

@section("script")

    {{--  Add Edit Specialization  --}}
    <script type="application/javascript">
        const btShowModal = $("#btShowModal");
        const title = $("#title");
        const description = $("#description");
        const icon = $("#icon");
        const modalTitle = $("#modal-title");
        const btSubmit = $("#btSubmit")
        let isAdd = true;
        let id = null;

        btShowModal.on("click", function () {
            id = null;
            modalTitle.html(modalTitle.html().replace("Edit", "Add"))
            btSubmit.html(btSubmit.html().replace("Edit", "Add"))
            title.val('')
            description.html('')
            $(".dz-message").find("span").html("Click or drop files here to add icon")

            $("#specialization-modal").modal('show')
        })

        btSubmit.on("click", function () {
            const titleVal = title.val()
            const descVal = description.val()
            const iconVal = icon.attr("data-uri")

            if (isAdd) {
                if (titleVal === "") return danger("Title can't be null")
                if (descVal === "") return danger("Description can't be null")
                if (iconVal === undefined) return danger("Icon can't be null")

                services.specialization.store(titleVal, descVal, iconVal,
                    (_) => {
                        success(`Success add specialization ${titleVal}`, () => location.reload());
                    },
                    () => danger(`Failed add specialization ${titleVal}`)
                );
            } else {
                if (titleVal === "") return danger("Title can't be null")
                if (descVal === "") return danger("Description can't be null")

                services.specialization.edit(id, titleVal, descVal, iconVal,
                    (_) => {
                        success(`Success edit specialization ${titleVal}`, () => location.reload());
                    },
                    () => danger(`Failed edit specialization ${titleVal}`)
                );
            }
        })

        function editSpecialization(data) {
            data = JSON.parse(data)
            modalTitle.html(modalTitle.html().replace("Add", "Edit"))
            btSubmit.html(btSubmit.html().replace("Add", "Edit"))
            title.val(data.title)
            description.html(data.description)
            isAdd = false;
            id = data.id;

            $(".dz-message").find("span").html("Click or drop files here to edit icon")
            $("#specialization-modal").modal('show')
        }
    </script>

    {{--  Delete Specialization  --}}
    <script type="application/javascript">
        function deleteSpecialization(id) {
            const tr = $(`#item-${id}`);
            const td = tr.find(".item-title");
            const title = td.html();

            simplePrompt(`Are you sure want to delete specialization ${title}?`, function () {
                services.specialization.delete(id,
                    (_) => {
                        $("#specialization-table").DataTable().row(tr).remove().draw();
                        success(`Success delete specialization ${title}`);
                    },
                    () => danger(`Failed delete specialization ${title}`));
            });
        }
    </script>

    {{--  Data Table  --}}
    <script type="application/javascript">
        $(function () {
            const table = $("#specialization-table")
                .DataTable({
                    lengthChange: false,
                    autoWidth: false,
                    scrollX: true,
                    pageLength: 5,
                    language: {
                        paginate: {
                            next: '<i class="fas fa-angle-right"></i>',
                            previous: '<i class="fas fa-angle-left"></i>'
                        }
                    },
                    columnDefs: [
                        {
                            targets: [1, 4],
                            orderable: false
                        },
                        {
                            targets: [0, 1, 3],
                            width: '5%'
                        },
                        {
                            targets: [2],
                            width: '25%'
                        }
                    ]
                });

            table.on('order.dt search.dt', function () {
                table.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes()
                    .each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
            }).draw();
        });
    </script>
@endsection
