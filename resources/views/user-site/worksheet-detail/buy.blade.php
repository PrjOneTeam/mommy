<div class="cart-amounts mto30">
    <div class="sb-cart-item cart-detail">
        <h2>@lang('app.name'): {{$worksheet->name}}</h2>
        <span class="semi-small block"><strong>{{__("Digital Download")}} (PDF)</strong></span>
        @if(isset($worksheet->topic[0]))
            <span class="semi-small block mbo10">{{__("Subject")}}: {{ucfirst($worksheet->topic[0])}}</span>
        @endif
    </div>
    <div class="item" style="padding-right: 20px">
        <table class="cart-amounts">
            <tbody><tr>
                <td class="{{ $worksheet->sale_price ?: 'bold' }}">@lang('app.' .  ($worksheet->sale_price ? 'regular_price' : 'price'))</td>
                <td class="total"><span class="{{$worksheet->sale_price ? 'strike' : 'sale bold' }}" id="reg-price-txt">{{ number_format($worksheet->price, 0, ',', ',') }} VND</span></td>
            </tr>
            </tbody>
        </table>
        @if($worksheet->sale_price)
            <table class="cart-amounts">
                <tbody><tr>
                    <td class="bold red">@lang('app.price')</td>
                    <td class="bold total amt red"><span class="sale bold" id="sale-price-txt">{{number_format($worksheet->sale_price, 0, ',', ',')}} VND</span></td>
                </tr>
                </tbody>
            </table>
        @endif
    </div>
    <form method="POST" action="{{route('cart.add')}}">
        @csrf
        <input type="hidden" name="session_token" value="{{Cookie::get('session_token')}}" />
        <input type="hidden" name="slug" value="{{ $slug }}" />
        @if($worksheet->files_color && $worksheet->files_bw)
            <span class="pr-attr-name">@lang('app.color'):</span>
            <div class="ft-right">
                <div class="XMFieldWrapper">
                    <select class="attr-selected pr-field " name="color" required>
                        <option label="Black and White" value="bw">@lang('app.bw')</option>
                        <option label="In Color" value="color">@lang('app.color')}</option>
                        <option label="Both Versions" value="both">@lang('app.both')</option>
                    </select>
                </div>
            </div>
        @endif
        <div class="clearfix"></div>
        <div class="center mto10 mbo10">
            <button type="submit" class="button btn-standout full-width tall" id="add-to-cart">
                <i class="icon-download"></i>@lang('app.download_now')
            </button>
        </div>
    </form>
</div>
