<?php $tab = TAB_PROJECT ?>
@extends("components.main.main")

@section("header_content")
    <button id="btShowModal" class="btn btn-sm btn-neutral">Add Project</button>
@endsection

@section("content")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="table-responsive py-4">
                    @include("components.table.project")
                </div>
            </div>
        </div>
    </div>
    @include("components.modal.project")
@endsection

@section("script")

    {{--  Add Edit project  --}}
    <script type="application/javascript">
        const btShowModal = $("#btShowModal");
        const title = $("#title");
        const description = $("#description");
        const link = $("#link");
        const image = $("#project");
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
            title.val('')

            $(".dz-message").find("span").html("Click or drop files here to add image")

            $("#project-modal").modal('show')
        })

        btSubmit.on("click", function () {
            const titleVal = title.val()
            const descVal = description.val()
            const linkVal = link.val()
            const imageVal = image.attr("data-uri")

            if (isAdd) {
                if (titleVal === "") return danger("Title can't be null")
                if (descVal === "") return danger("Description can't be null")
                if (linkVal === "") return danger("Link can't be null")
                if (imageVal === undefined) return danger("Image can't be null")

                services.project.store(titleVal, descVal, linkVal, imageVal,
                    (_) => {
                        success(`Success add project ${titleVal}`, () => location.reload());
                    },
                    () => danger(`Failed add project ${titleVal}`)
                );
            } else {
                if (titleVal === "") return danger("Title can't be null")
                if (linkVal === "") return danger("Link can't be null")
                if (descVal === "") return danger("Description can't be null")

                services.project.edit(id, titleVal, descVal, linkVal, imageVal,
                    (_) => {
                        success(`Success edit project ${titleVal}`, () => location.reload());
                    },
                    () => danger(`Failed edit project ${titleVal}`)
                );
            }
        })

        function editProject(data) {
            data = JSON.parse(data)
            modalTitle.html(modalTitle.html().replace("Add", "Edit"))
            btSubmit.html(btSubmit.html().replace("Add", "Edit"))
            title.val(data.title)
            description.html(data.description)
            isAdd = false;
            id = data.id;

            $(".dz-message").find("span").html("Click or drop files here to edit image")
            $("#project-modal").modal('show')
        }
    </script>

    {{--  Delete project  --}}
    <script type="application/javascript">
        function deleteProject(id) {
            const tr = $(`#item-${id}`);
            const td = tr.find(".item-title");
            const title = td.html();

            simplePrompt(`Are you sure want to delete project ${title}?`, function () {
                services.project.delete(id,
                    (_) => {
                        $("#project-table").DataTable().row(tr).remove().draw();
                        success(`Success delete project ${title}`);
                    },
                    () => danger(`Failed delete project ${title}`));
            });
        }
    </script>

    {{--  Data Table  --}}
    <script type="application/javascript">
        $(function () {
            const table = $("#project-table")
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
                            targets: [0, 1, 2],
                            width: '5%'
                        },
                        {
                            targets: [3],
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
