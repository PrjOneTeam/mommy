@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Comments</h2>
    @if ($comments->isEmpty())
    <p>No articles found.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>PDF ID</th>
                <th>Public Name</th>
                <th>Rate</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->pdf_id }}</td>
                <td>{{ $comment->public_name }}</td>
                <td>{{ $comment->rate }}</td>
                <td>{{ $comment->review }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection