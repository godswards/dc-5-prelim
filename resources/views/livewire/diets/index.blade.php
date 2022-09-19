<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Food Name</th>
                <th>Food</th>
                <th>Type</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diets as $diet)
                <tr>
                    <td>{{ $diet->id }}</td>
                    <td>{{ $diet->name }}</td>
                    <td>{{ $diet->price }}</td>
                    <td>{{ $diet->type }}</td>
                    <td>
                        <a href="{{ url('edit', ['diet' => $diet->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['diet' => $diet->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

