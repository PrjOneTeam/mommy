<h1>Pdfs</h1>
@if ($pdfs->isEmpty())
    <p>No pdfs found.</p>
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
            @foreach ($pdfs as $pdf)
                <tr>
                    <td>{{ $pdf->name }}</td>
                    <td>{{ Str::limit($pdf->description, 50) }}</td>
                    <td>{{ $pdf->grade }}</td>
                    <td>{{ implode(', ', $pdf->topic) }}</td>
                    <td>{{ $pdf->status ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $pdf->price }}</td>
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
