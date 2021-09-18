<?php $tab = TAB_SKILL ?>
@extends("components.main.main")

@section("header_content")
    <div class="form-group">
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
            </div>
            <input id="add-text" class="form-control" placeholder="Add new Skills" type="text">
            <div class="input-group-append">
                <button id="add-btn" class="btn btn-success disabled">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
    </div>
@endsection

@section("content")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="table-responsive py-4">
                    @include("components.table.skills")
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    {{--  Add Skill  --}}
    <script type="application/javascript" defer>
        const addText = $("#add-text");
        const addBtn = $("#add-btn");

        function addSkill() {
            if (addText.val() !== "") {
                let name = addText.val();
                services.skill.store(name,
                    (_) => {
                        success(`Success add skill ${name}`, () => location.reload());
                    },
                    () => danger(`Failed add skill ${name}`));
            }
        }

        addText.on('keydown', function () {
            setTimeout(function () {
                if (addText.val() === "") addBtn.addClass("disabled");
                else addBtn.removeClass("disabled");
            }, 100)
        });

        addText.on('keypress', function (e) {
            if (e.which === 13) {
                addSkill();
            }
        });

        addBtn.on('click', function () {
            addSkill();
        });
    </script>

    {{--  Edit Skill  --}}
    <script type="application/javascript">
        $(function () {

            function editValue(id, value) {
                id = id.split("-")[1];
                const name = $(`#item-${id} .item-name`).html()

                services.skill.edit(id, value,
                    (_) => console.log(`Success edit skill ${name}`),
                    () => danger(`Failed edit skill ${name}`));
            }

            const sliders = document.getElementsByClassName("input-slider");

            for (let i = 0; i < sliders.length; i++) {
                let slider = sliders.item(i);
                slider.noUiSlider.updateOptions({step: 5});
                slider.noUiSlider.on("change", function (values) {
                    editValue(slider.id, values[0]);
                });
            }
        });
    </script>

    {{--  Delete Skill  --}}
    <script type="application/javascript">
        function deleteSkill(id) {
            const tr = $(`#item-${id}`);
            const td = tr.find(".item-name");
            const name = td.html();

            simplePrompt(`Are you sure want to delete skill ${name}?`, function () {
                services.skill.delete(id,
                    (_) => {
                        $("#skills-table").DataTable().row(tr).remove().draw();
                        success(`Success delete skill ${name}`);
                    },
                    () => danger(`Failed edit skill ${name}`));
            });
        }
    </script>

    {{--  Data Table  --}}
    <script type="application/javascript">
        $(function () {
            const table = $("#skills-table")
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
                            targets: [0, 1, 2, 3],
                            orderable: false
                        },
                        {
                            targets: [0, 3],
                            width: '5%'
                        },
                        {
                            targets: [1],
                            width: '20%'
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
