<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required value="{{ old('title') }}">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" required>{{ old('content') }}</textarea>
    </div>
    <div>
        <label for="pictures">Pictures</label>
        <input type="file" id="pictures" name="pictures">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
