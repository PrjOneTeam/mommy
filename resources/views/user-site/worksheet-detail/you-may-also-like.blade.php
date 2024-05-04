<div class="content-box">
    <div class="box-body">
        <h2>{{__("You may also like")}}</h2>
        <div id="related-worksheets" class="crsl-nav">
            <a href="#" class="previous">{{__("Previous")}}</a>
            <a href="#" class="next">{{__("Next")}}</a>
        </div>
        <div class="crsl-items" data-navigation="related-worksheets">
            <div class="crsl-wrap">
                @foreach($worksheetRelated?? [] as $w)
                    <figure class="crsl-item">
                        <a href="/{{$w->slug}}" title="{{$w->name}}">
                            <div class="bck"><img src="{{$w->image_bw ?: asset(\App\Enums\Image::DEFAULT_IMAGE)}}" alt="{{$w->name}}" width="100%"></div>
                            <figcaption>{{$w->name}}</figcaption>
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</div>
