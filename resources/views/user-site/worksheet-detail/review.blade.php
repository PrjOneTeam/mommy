<div class="content-box">
    <div class="box-body">
        <h2>@lang('app.leave_review')</h2>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="workbook_id" name="workbook_id" required value="1">
            </div>
            <div class="form-group">
                <label for="public_name">@lang('app.public_name')</label>
                <input type="text" class="form-control" id="public_name" name="public_name" required>
            </div>
            <div class="form-group">
                <label for="rate">Rate:</label>
                <input type="number" class="form-control" id="rate" name="rate" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="review">@lang('app.review_text'):</label>
                <textarea class="form-control" id="review" name="review"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang('app.submit')</button>
        </form>
    </div>
</div>
