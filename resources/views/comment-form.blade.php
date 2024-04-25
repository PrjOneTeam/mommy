
<div class="container">
    <h2>Add Comment</h2>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" id="pdf_id" name="pdf_id" required value="1">
        </div>
        <div class="form-group">
            <label for="public_name">Public Name:</label>
            <input type="text" class="form-control" id="public_name" name="public_name" required>
        </div>
        <div class="form-group">
            <label for="rate">Rate:</label>
            <input type="number" class="form-control" id="rate" name="rate" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label for="review">Review:</label>
            <textarea class="form-control" id="review" name="review"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
