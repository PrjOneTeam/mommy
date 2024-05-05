<?php
    /**
     * @var App\Models\Pdf $worksheet
     */
?>

<div class="cart-amounts wks-related" style="margin-top: 40px;">
    @foreach($worksheet->relatedWorkbooks as $workbookRelated)
        <div class="sb-cart-item">
            <div class="col80">
                <h2>{{__("Related Workbook")}}</h2>
                <a href="/{{$workbookRelated->slug}}" class="block bold mbo10">{{$workbookRelated->name}}</a>
                <div class="mbo10">
                    <span class="block"><strong>Price: </strong>
                        <span class="{{$workbookRelated->sale_price ? 'strike' : null}}">${{$workbookRelated->price}}</span>
                        @if($workbookRelated->sale_price)
                            <span class="sale">{{__("Sale")}} ${{$workbookRelated->sale_price}}</span>
                        @endif
                    </span>
                </div>
                <a href="/{{$workbookRelated->slug}}" class="button small btn-green">{{__("Download Workbook")}}</a>
            </div>
            <div class="col20">
                <img src="{{$workbookRelated->image_bw ?: asset(\App\Enums\Image::DEFAULT_IMAGE) }}" title="{{$workbookRelated->name}}" />
            </div>
        </div>
    @endforeach
</div>
