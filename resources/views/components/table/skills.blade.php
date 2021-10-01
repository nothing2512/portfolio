<table class="table table-flush" id="skills-table">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Proficiency</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach($skills as $item)
        <tr id="item-{{ $item->id }}">
            <td></td>
            <td class="item-name">{{ $item->name }}</td>
            <td>
                <div class="input-slider-container">
                    <div
                        id="slider-{{ $item->id }}"
                        class="input-slider"
                        data-step="1"
                        data-range-value-min="0"
                        data-range-value-max="100"></div>
                    <div class="row mt-3">
                        <div class="col-6">
                        <span
                            id="slider-{{ $item->id }}-value"
                            class="range-slider-value"
                            data-range-value-low="{{ $item->value }}"></span>
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="deleteSkill('{{ $item->id }}')">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Proficiency</th>
        <th></th>
    </tr>
    </tfoot>
</table>
