@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Workbooks</h1>
    @if ($workbooks->isEmpty())
    <p>No workbooks found.</p>
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
            @foreach ($workbooks as $workbook)
            <tr>
                <td>{{ $workbook->name }}</td>
                <td>{{ Str::limit($workbook->description, 50) }}</td>
                <td>{{ $workbook->grade }}</td>
                <td>{{ $workbook->topic ? implode(', ', $workbook->topic) : null }}</td>
                <td>{{ $workbook->status ? 'Active' : 'Inactive' }}</td>
                <td>{{ $workbook->price }}</td>
                <td>
                    <button class="btn btn-info">Edit</button>
                    <form method="POST" action="{{ route('pdfs.destroy', $workbook->id) }}" class="d-inline" id="delete-form-{{ $workbook->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-id="{{ $workbook->id }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
