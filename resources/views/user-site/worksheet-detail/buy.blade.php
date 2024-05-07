<div class="cart-amounts mto30">
    <div class="sb-cart-item cart-detail">
        <h2>{{__("Product")}}: {{$worksheet->name}}</h2>
        <span class="semi-small block"><strong>{{__("Digital Download")}} (PDF)</strong></span>
        @if(isset($worksheet->topic[0]))
            <span class="semi-small block mbo10">{{__("Subject")}}: {{ucfirst($worksheet->topic[0])}}</span>
        @endif
    </div>
    <div class="item" style="padding-right: 20px">
        <table class="cart-amounts">
            <tbody><tr>
                <td class="{{ $worksheet->sale_price ?: 'bold' }}">{{ $worksheet->sale_price ? __("Regular Price") : __("Price")}}</td>
                <td class="total"><span class="{{$worksheet->sale_price ? 'strike' : 'sale bold' }}" id="reg-price-txt">${{$worksheet->price}}</span></td>
            </tr>
            </tbody>
        </table>
        @if($worksheet->sale_price)
            <table class="cart-amounts">
                <tbody><tr>
                    <td class="bold red">{{__("Now")}}</td>
                    <td class="bold total amt red"><span class="sale bold" id="sale-price-txt">${{$worksheet->sale_price}}</span></td>
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
            <span class="pr-attr-name">{{__("Color")}}:</span>
            <div class="ft-right">
                <div class="XMFieldWrapper">
                    <select class="attr-selected pr-field " name="color" required>
                        <option label="Select">{{__("Select")}}</option>
                        <option label="Black and White" value="bw">{{__("Black and White")}}</option>
                        <option label="In Color" value="color">{{__("In Color")}}</option>
                        <option label="Both Versions" value="both">{{__("Both Versions")}}</option>
                    </select>
                </div>
            </div>
        @endif
        <div class="clearfix"></div>
        <div class="center mto10 mbo10">
            <button type="submit" class="button btn-standout full-width tall" id="add-to-cart">
                <i class="icon-download"></i>{{__("Download Now")}}
            </button>
        </div>
    </form>
</div>
