<table class="table table-flush" id="project-table">
    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach($projects as $item)
        <tr id="item-{{ $item->id }}">
            <td></td>
            <td><img src="{{ $item->image }}" class="sp-project" alt="{{ $item->title }}"></td>
            <td class="item-title">{{ $item->title }}</td>
            <td class="text-overflow-hidden" style="max-width: 80vh">
                {{ $item->description }}
            </td>
            <td>
                <a href="{{ $item->link }}" class="btn btn-success btn-sm" target="_blank">
                    <i class="ni ni-world-2"></i>
                </a>
                <button class="btn btn-warning btn-sm" onclick="editProject('{{ json_encode($item) }}')">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteProject('{{ $item->id }}')">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <th>#</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
    </tr>
    </tfoot>
</table>
