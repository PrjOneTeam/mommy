
<div class="container">
    <div style="width: 100%; background-color: white; padding: 10px">
        <h2>{{__("Add Comment")}}</h2>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-control" id="pdf_id" name="pdf_id" required value="{{$worksheet->id}}">
            </div>
            <div class="form-group">
                <label for="public_name">{{__("Full Name")}}:</label>
                <input type="text" class="form-control" id="public_name" name="public_name" required>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="rate" name="rate" min="1" max="5" value="5">
            </div>
            <div class="form-group">
                <label for="review">{{__("Review")}}:</label>
                <textarea class="form-control" id="review" name="review"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
        </form>
        <hr>
        <h2>{{count($worksheet->comments??[])}} {{__("Comments")}}</h2>
        <div style="padding: 20px">
            @foreach($worksheet->comments ??[] as $comment)
                <div>
                    <div>
                        <h5>{{ $comment->public_name }}</h5>
                        <p style="color:#999; font-size: 10pt">{{ $comment->created_at->format('d-m-Y') }}</p>
                        <p class="card-text">{{ $comment->review }}</p>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</div>
