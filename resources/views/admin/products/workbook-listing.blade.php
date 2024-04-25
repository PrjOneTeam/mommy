<h1>Workbooks</h1>
@if ($workbooks->isEmpty())
    <p>No workbooks found.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Grade</th>
                <th>Topic</th>
                <th>Status</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workbooks as $workbook)
                <tr>
                    <td>{{ $workbook->name }}</td>
                    <td>{{ Str::limit($workbook->description, 50) }}</td>
                    <td>{{ $workbook->grade }}</td>
                    <td>{{ implode(', ', $workbook->topic) }}</td>
                    <td>{{ $workbook->status ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $workbook->price }}</td>
                    <td>
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
