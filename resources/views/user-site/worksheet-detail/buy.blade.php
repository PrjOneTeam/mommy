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
    <form target="_self" allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" class="form-product" save_toggle="true" persist="false" name="AddBasket" plugins="mask,spell" action="/pub/mts/cart.cfm" show_hints="true" method="post" id="AddBasket" novalidate="">
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="ItemID" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="ItemID" value="5373">
        </div>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="skuID" vtype="hidden" hint="" placeholder="" vlabel="Product SKU" vrequired="false" class="" style="" type="hidden" name="skuID" value="">
        </div>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="attribute_list" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="attribute_list" value="114">
        </div>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="maximum_quantity" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="maximum_quantity" value="1">
        </div>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="actionxm" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="actionxm" value="Add to Cart">
        </div>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="quantity" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="quantity" value="1">
        </div>
        <span class="pr-attr-name">Color:</span>
        <div class="XMFieldWrapper  " style="">
            <input onkeyup="" lang="en" id="sc_item_attribute_name_114" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="sc_item_attribute_name_114" value="Color">
        </div>
        <div class="ft-right">
            <div class="XMFieldWrapper  " style="">
                <select vrequired="true" groups="" hint="" style="" class="attr-selected pr-field " multiple_select_size="5" delimiter="~" placeholder="" name="sc_item_attribute_114" vlabel="Color" vtype="select" allow_multiple="false" id="sc_item_attribute_114" default=""> <option selected="" style="" label="Select" value="">Select</option><option style="" label="Black and White" value="Black and White">Black and White</option><option style="" label="In Color" value="In Color">In Color</option><option style="" label="Both Versions" value="Both Versions">Both Versions</option></select>
            </div>
        </div>
        <div class="clearfix"></div>
        <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-AA8EB19B-B55C-DDEF-8E902FB5405D78CA">
    </form>
    <div class="center mto10 mbo10"><a class="button btn-standout full-width tall" id="add-to-cart"><i class="icon-download"></i>{{__("Download Now")}}</a></div>
</div>
