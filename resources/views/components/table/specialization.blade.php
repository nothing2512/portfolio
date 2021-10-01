<table class="table table-flush" id="specialization-table">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Icon</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach($specializations as $item)
        <tr id="item-{{ $item->id }}">
            <td></td>
            <td>
                @if($item->iconType == "svg")
                    <embed src="{{ attachment($item->icon) }}" class="sp-icon">
                @else
                    <img src="{{ attachment($item->icon) }}" class="sp-icon" alt="{{ $item->title }}">
                @endif
            </td>
            <td class="item-title">{{ $item->title }}</td>
            <td class="text-overflow-hidden" style="max-width: 80vh">
                {{ $item->description }}
            </td>
            <td>
                <button class="btn btn-warning btn-sm" onclick="editSpecialization('{{ json_encode($item) }}')">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteSpecialization('{{ $item->id }}')">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <th>#</th>
        <th>Icon</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
    </tr>
    </tfoot>
</table>
