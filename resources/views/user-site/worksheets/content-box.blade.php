<div id="dyn-listing">
    @if($totals)
        <div class="has_records clearfix ">
            <div class="list-view ft-left">
            </div>
            <div class="ft-right">
                <span class="space10">@lang('app.page'): </span>
                <div class="article_paging">
                    <ul class="pagination">
                        <li><a href="?{{ $f ? 'f=1&' : null }}p={{ $page <= 1 ? $page : $page - 1}}" class="prev">&nbsp;</a></li>
                        @for($i = 1; $i <= ceil($totals/$per_page); $i++)
                            <li><a href="?{{ $f ? 'f=1&' : null }}p={{$i}}" class="{{$page == $i ? 'active' : null}}">{{$i}}</a></li>
                        @endfor
                        <li><a href="?{{ $f ? 'f=1&' : null }}p={{ $page >= ceil($totals/$per_page) ? $page : $page + 1}}" class="next">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="article_results">
            <div id="view_portrait" style="display: block;">
                <ul class="mts-col3 col4 clearfix">
                    @foreach($worksheets as $index => $worksheet)
                        <li data-index="{{$index}}" class="pgitem {{($index+1)%4==0 ? 'last' : null}}" style="">
                            <div class="pbox">
                                <div class="pimg" style="width: 100%">
                                    <div class="ribbon {{ !$worksheet->price ? 'green' : null }}">{{ $worksheet->price ? __("Buy Now") : __("Free")}}</div>
                                    <div class="img-wrap">
                                        <a href="/{{$worksheet->slug}}" title="{{$worksheet->name}}">
                                            <img style="min-height: 204px; width: 100%" src="{{$worksheet->image_bw ? asset($worksheet->image_bw) : ($worksheet->image_color ? asset($worksheet->image_color) : ($worksheet->image_both ? asset($worksheet->image_both) : asset(\App\Enums\Image::DEFAULT_IMAGE)))}}" alt="{{$worksheet->name}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="pdetail"><a href="/{{$worksheet->slug}}" title="{{$worksheet->name}}">{{$worksheet->name}}</a></div>
{{--                                <div class="post-icons clearfix">--}}
{{--                                    <div class="right">--}}
{{--                                        <a class="xmTip icon-info" data-tooltip="Alphabet"></a>--}}
{{--                                        <a data-id="8543" href="/login"><i class="xmTip icon-plus" data-tooltip="Save to Favorites"></i></a>--}}
{{--                                        <a href="javascript:void(0);" title="Pin it!" class="xc_pin" onclick="pin_this(event, 'http://pinterest.com/pin/create/button/?url=https://www.myteachingstation.com/reading/alphabet/uppercase-letter-w-maze-worksheet&amp;media=https://www.myteachingstation.com/vault/2599/web/articles/reading/alphabet/Uppercase-Letter-W-Maze-Worksheet.jpg&amp;description=Uppercase%20Letter%20W%20Maze%20Worksheet%2E%20If%20you%20are%20looking%20for%20creative%20ways%20to%20help%20your%20preschooler%20or%20kindergartener%20to%20practice%20identifying%20the%20letters%20of%20the%20alphabet%2C%20the%20Uppercase%20Letter%20Maze%20is%20the%20perfect%20activity%2E')"><i class="icon-pinterest"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="view_landscape" style="display: none;">
                <div class="content-box">
                    <div class="box-body clearfix">
                        @foreach($worksheets as $index => $worksheet)
                            <article class="worksheets">
                                <div class="post-header">
                                    <div class="post-title">
                                        <a href="/writing/letters/uppercase-and-lowercase-letter-b-printable-writing-mat" title="{{$worksheet->name}}">{{$worksheet->name}}</a>
                                    </div>
                                    <div class="post-icons">
                                        <a data-id="4115" href="/login"><i class="xmTip icon-plus" data-tooltip="Save to Favorites"></i></a>
                                        <a href="javascript:void(0);" title="Pin it!" class="xc_pin" onclick="pin_this(event, 'http://pinterest.com/pin/create/button/?url=https://www.myteachingstation.com/writing/letters/uppercase-and-lowercase-letter-b-printable-writing-mat&amp;media=https://www.myteachingstation.com/vault/2599/web/articles/writing/letters/Letter-B-Printable-Writing-Mat.jpg&amp;description=%2A%2AFREE%2A%2AUppercase%20and%20Lowercase%20Letter%20B%20Printable%20Writing%20Mat%2E%20Practice%20writing%20the%20uppercase%20and%20lowercase%20letter%20B%20with%20this%20printable%20writing%20mat%2E%20Includes%20the%20uppercase%20and%20lowercase%20letter%20B%2E%20You%20will%20need%20to%20print%20and%20laminate%20%28wipe%20and%20write%29%2E')"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div>
                                <div class="post-photo">
                                    <a href="/writing/letters/uppercase-and-lowercase-letter-b-printable-writing-mat" title="">
                                        <img src="{{$worksheet->image_bw ? asset($worksheet->image_bw) : ($worksheet->image_color ? asset($worksheet->image_color) : ($worksheet->image_both ? asset($worksheet->image_both) : asset(\App\Enums\Image::DEFAULT_IMAGE)))}}" alt="{{$worksheet->name}}">
                                    </a>
                                </div>
                                <div class="post-summary">
                                    <p>{{Str::limit($worksheet->description, 50)}}</p>
                                    <ul class="wkst-detail">
                                        <li><span>{{__("Price")}}</span><span> {{ $worksheet->price ? __("Available through related products") : __("Free download") }}</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="has_records clearfix">
            <div class="list-view ft-left">
                <span id="pagination_title" class="space10 mto10">@lang('app.showing') {{$page}} - {{$page * $per_page}} @lang('app.show_of') {{$totals}}</span>
            </div>
            <div class="ft-right mto10">
                <span class="space10">@lang('app.page'): </span>
                <div class="article_paging">
                    <ul class="pagination">
                        @for($i = 1; $i <= ceil($totals/$per_page); $i++)
                            <li><a href="?p={{$i}}" class="{{$page == $i ? 'active' : null}}">{{$i}}</a></li>
                        @endfor
                        <li><a href="/worksheets/writing?p=2" class="next">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div id="no_records" class="content-box sboptin-holder">
            <div class="sb-content">
                <div class="center">
                    <span class="large">
                        @lang('app.no_data')
                    </span>
                </div>
            </div>
        </div>
    @endif
</div>
