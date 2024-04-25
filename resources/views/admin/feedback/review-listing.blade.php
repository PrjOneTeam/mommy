@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Reviews</h2>
    @if ($reviews->isEmpty())
    <p>No articles found.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Workbook ID</th>
                <th>Public Name</th>
                <th>Rate</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td>{{ $review->workbook_id }}</td>
                <td>{{ $review->public_name }}</td>
                <td>{{ $review->rate }}</td>
                <td>{{ $review->review }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection