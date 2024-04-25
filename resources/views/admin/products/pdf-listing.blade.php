@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Pdfs</h1>
    @if ($pdfs->isEmpty())
    <p>No pdfs found.</p>
    @else
    <table class="table table-striped">
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
                    <a href="{{ route('pdfs.edit', $pdf->id) }}" class="btn btn-info">Edit</a>
                    <form method="POST" action="{{ route('pdfs.destroy', $pdf->id) }}" class="d-inline" id="delete-form-{{ $pdf->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-id="{{ $pdf->id }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
