@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>
    @if ($articles->isEmpty())
    <p>No articles found.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ Str::limit($article->content, 50) }}</td>
                <td>
                    <button class="btn btn-info">Edit</button>
                    <form method="POST" action="{{ route('articles.destroy', $article->id) }}" class="d-inline" id="delete-form-{{ $article->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-id="{{ $article->id }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
