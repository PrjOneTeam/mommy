<div class="content-box">
    <div style="width: 100%; background-color: white; padding: 10px">
    <div class="box-body">
        <h2>@lang('app.leave_review')</h2>
        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <input type="hidden" class="form-control" id="workbook_id" name="workbook_id" value="{{$worksheet->id}}">
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

    <h2>{{count($worksheet->reviews??[])}} {{__("Comments")}}</h2>
    <div style="padding: 20px">
        @foreach($worksheet->reviews ??[] as $comment)
            <div>
                <div>
                    <h5>{{ $comment->public_name }}</h5>
                    <p style="color:#999; font-size: 10pt;margin-bottom: 0">{{ $comment->created_at->format('d-m-Y') }}</p>
                    <p style="margin-bottom: 0">@for($i=1;$i<=$comment->rate;$i++) <img src="images/star.svg" style="width: 15px; height: 15px"> @endfor</p>
                    <p class="card-text">{{ $comment->review }}</p>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
    </div>
</div>
