@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <script>
            function DeleteFavorites() {
                var checkboxes = document.querySelectorAll('input[name="web_article_id"]');
                var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
                if (checkedOne) {
                    document.forms['RecordList'].submit();
                } else {
                    alert("Please select at least one item to delete from your favorite list."	);
                }
            }
        </script>
        <div class="container">
            <h1 class="hpage">My Teaching Station Account</h1>
            <div class="content-left">
                <div class="content-holder">
                    <div class="content-box smlprd">
                        <div class="box-body">
                            <h2>My Favorites</h2>
                            <div class="clearfix">
                                <div class="list-view ft-left">
                                    <span id="pagination_title" class="space10">Showing 1 - 1 of 1</span></div>
                                <div class="ft-right">
                                    <span class="space10 semi-small vtop5">PAGE: </span>
                                    <ul class="pagination clearflix">
                                        <li><a href="/my-favorites?start=1" class="active">1</a></li>
                                    </ul>
                                </div>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>
                            <script>
                                window.WEBSPELLCHECKER_CONFIG = {
                                    ignoreElements:'div',
                                    ignoreClasses:['fc-1_L-N','ce-paragraph','cdx-block'],
                                    autoSearch: true,
                                    serviceId: '1:MIpHt-1WSou1-JHukUg-x7i7X1-czSVvi-G2YFGi-FcodHg-YSEJe1-JOSIOh-IRe'
                                };
                            </script>
                            <script defer="" type="text/javascript" src="https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js"></script> <link rel="stylesheet" href="/lib/tag/xm/inc/form/form.css?ver=20240425-C" type="text/css"> <form allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" save_toggle="true" persist="false" name="ApplyFilterForm" plugins="mask,spell" action="/go/pathway.cfm" show_hints="true" method="post" id="ApplyFilterForm" novalidate="">
                                <input type="hidden" id="actionxm" name="actionxm" value="ApplyFilter">
                                <input type="hidden" id="pathway" name="pathway" value="/my-favorites">
                                <table cellpadding="2" cellspacing="5" border="0" class="fav-tbl header" style="background-color:#ddd">
                                    <tbody><tr>
                                        <td><input type="checkbox" name="checkall" value="" onclick="for (var i=0;i<document.forms['RecordList']['web_article_id'].length;i++) {document.forms['RecordList']['web_article_id'][i].checked = (!document.forms['RecordList']['web_article_id'][i].checked);}"> <a href="javascript:void(0);" onclick="DeleteFavorites();"><i class="icon-trash" style="padding-bottom: 10px;display:inline-block;padding-left: 3px;font-size: 20px;"></i></a></td>
                                        <td colspan="2">
                                            <div style="float:right">
                                                <table class="rwdmulti">
                                                    <tbody><tr>
                                                        <td>
                                                            <select name="c">
                                                                <option value="0">Show All Categories</option>
                                                                <option value="166">Number Recognition &amp; Counting</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="d">
                                                                <option value="">Show All Dates</option>
                                                                <option value="d">Past Day</option>
                                                                <option value="m">Past Month</option>
                                                                <option value="y">Past Year</option>
                                                            </select>
                                                        </td>
                                                        <td><a class="button x-small btn-darkgray" href="javascript:void(0);" onclick="document.forms['ApplyFilterForm'].submit()">Apply Filter</a></td>
                                                    </tr>
                                                    </tbody></table>
                                            </div>
                                            <div style="clearfix"></div>
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-9B605452-C34F-F298-7578F8C24D7E0C1E"> <input type="hidden" name="xm_user_token" value="1504685|4FAAB81A-8B4D-4AA5-AEBA-1D8679E0B1A6"> </form>
                            <script type="text/javascript">
                                if (window.hasOwnProperty("xmFormObj")) xmFormObj["ApplyFilterForm"] = {};

                                //MR: 9/5/2022 - loop over all fields to set fieldOptions


                                if (typeof jQuery != 'undefined')  {
                                    $(function () {
                                        /*
                                        $('input').bind('input', function(){
                                            $(this).val(function(_, v){
                                                return v.replace(/\s+/g, '');
                                            });
                                        });
                                        */

                                        $("input[type='text'], input[type='number']").bind("change", function(){
                                            var $this = $(this);
                                            $this.val($.trim($this.val()));
                                        });

                                        $(".optionalRendering").find("span").each(function(i,v) {
                                            var $this = $(this);
                                            if ($this.is(":empty")) $this.parent().hide();
                                        });



                                        //Loop over all form rows and add a class to any that don't have a child of .XMFormRow
                                        $(".XMFormRow").each(function(e,v){
                                            var $this = $(this);
                                            if ($this.find(".XMFormRow").length === 0) {
                                                $this.addClass("XMFormRowChild");
                                            }
                                        });
                                        $(window).on("dynrow:add",function(e,prefix,cntr,data){
                                            $("#"+prefix+"Row"+cntr).find(".XMFormRow").each(function(e,v){
                                                var $this = $(this);
                                                if ($this.find(".XMFormRow").length === 0) {
                                                    $this.addClass("XMFormRowChild");
                                                }
                                            });
                                        });
                                        $(":input[name][mask]").each(function(e){
                                            var $this = $(this);
                                            if ($this.attr("mask") !== "") {
                                                $this.mask($this.attr("mask"));
                                            }
                                        });

                                        $('input[vtype=currency]').each(function(){
                                            var $this = $(this);
                                            tippy($this[0],{
                                                allowHTML:true,
                                                trigger: 'manual'
                                            });
                                            $this.on({
                                                input: function() {
                                                    var $this = $(this);
                                                    var tip = $this.val() != "" ? "$"+parseFloat($this.val()).toLocaleString() : "";
                                                    var instance = $this[0]._tippy;
                                                    instance.setContent(tip);
                                                    if (tip === "") instance.hide();
                                                    else instance.show();
                                                    //console.log($this[0]._tippy);
                                                },
                                                focus: function() {
                                                    var $this = $(this);
                                                    var tip = $this.val() != "" ? "$"+parseFloat($this.val()).toLocaleString() : "";
                                                    var instance = $this[0]._tippy;
                                                    instance.setContent(tip);
                                                    if (tip === "") instance.hide();
                                                    else instance.show();
                                                }
                                            })


                                        });

                                        /*
                                        $('input[vtype=currency]').maskMoney({
                                            allowZero:false,
                                            affixesStay:false,
                                            allowNegative:true
                                        });
                                        */

                                        var xmUpdateSessionPing = true;
                                        $('form#ApplyFilterForm').on("change", ":input", function() {
                                            if (!xmUpdateSessionPing) return;
                                            xmUpdateSessionPing = false;
                                            $.getJSON("/modules/portal/session_ping.cfm?actionxm=Update");
                                            setTimeout(function() {xmUpdateSessionPing=true;},60000);
                                        });

                                    });
                                }

                                var showBGaveNotice = true;
                                function xmFormBGSave(frm) {
                                    var $form = $(frm);
                                    checkBeforeLeaving = true;
                                    var formData = $form.serialize();
                                    formData = formData + "&xmBGSave=true";
                                    $.post($form.attr('action'), formData, function(data) {
                                        //console.log(data);
                                        $.toast({
                                            text: "Saved",
                                            position: "bottom-left",
                                            icon: "",
                                            heading:"",
                                            bgColor: "#444",
                                            textColor:"#fff",
                                            hideAfter:3000,
                                            stack: false
                                        });
                                        if (data.fields) {
                                            for (var f=0;f < data.fields.length;f++) {
                                                var fld = data.fields[f];
                                                document.forms['ApplyFilterForm'][fld.id].value=fld.value;
                                            }
                                        } else if (data.hasOwnProperty("id") && document.forms['ApplyFilterForm']["id"].value == "") {
                                            document.forms['ApplyFilterForm']["id"].value = data.id;
                                        }

                                        checkBeforeLeaving = true;
                                    },"json");
                                }

                                /*
                                function xmRefreshFormField(frm,fld) {
                                    var $form = $(frm);
                                    var params = $form.serializeFormJSON();
                                    params.field = fld;
                                    var $fld = $("#"+fld);

                                    $.each(params,function(i,v) {
                                        if ($.isArray(v)) params[i] = v.join(",");
                                    });
                                    $fld.find('option').remove().end();
                                    $.getJSON("/lib/inc/mini_module/xm.cfc?returnFormat=JSON&method=RefreshField&fld="+fld,params,function(data) {
                                        if (!$fld.hasClass("select2-hidden-accessible")) {
                                            $fld.append(jQuery('<option/>',{text:"Select One",value:""}));
                                        }
                                        $.each(data, function(i, obj) {
                                            $fld.append($('<option/>',{text:obj.label,value:obj.value}));
                                        });
                                        $fld.val($fld.data("default"));
                                    });
                                }
                                */
                            </script>
                            <form allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" save_toggle="true" persist="false" name="RecordList" plugins="mask,spell" action="/go/pathway.cfm" show_hints="true" method="post" id="RecordList" novalidate="">
                                <input type="hidden" id="actionxm" name="actionxm" value="DeleteFavorites">
                                <input type="hidden" id="pathway" name="pathway" value="/my-favorites">
                                <table cellpadding="2" cellspacing="5" border="0" class="fav-tbl grbox">
                                    <colgroup><col style="width: 8%">
                                        <col style="width: 12%">
                                        <col style="width: 80%">
                                    </colgroup><tbody><tr>
                                        <td><input type="checkbox" name="web_article_id" value="9355" class="fav-article"></td>
                                        <td><img src="/vault/2599/web/worksheets/preschool/math/numbers/Teaching-Number-Line-0-Through-10-Printable.jpg" alt="Number Line 0-10 Printable Activity" class="picborder" style="max-width: 70px"></td>
                                        <td>
                                            <span class="title">Number Line 0-10 Printable Activity</span>
                                            <small>Added to favorites on 05/04/2024</small>
                                            <small class="block mbo10">Category <a href="/numbers">Number Recognition &amp; Counting</a></small>
                                            <a target="_blank" href="/preschool/math/numbers/number-line-0-10-printable-activity" class="button small btn-green">View &amp; Download</a>
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-9B605466-CF26-D83A-A97936F0E5632238"> <input type="hidden" name="xm_user_token" value="1504685|4FAAB81A-8B4D-4AA5-AEBA-1D8679E0B1A6"> </form>
                            <script type="text/javascript">
                                if (window.hasOwnProperty("xmFormObj")) xmFormObj["RecordList"] = {};

                                //MR: 9/5/2022 - loop over all fields to set fieldOptions


                                if (typeof jQuery != 'undefined')  {
                                    $(function () {
                                        /*
                                        $('input').bind('input', function(){
                                            $(this).val(function(_, v){
                                                return v.replace(/\s+/g, '');
                                            });
                                        });
                                        */

                                        /*
                                        $('input[vtype=currency]').maskMoney({
                                            allowZero:false,
                                            affixesStay:false,
                                            allowNegative:true
                                        });
                                        */

                                        var xmUpdateSessionPing = true;
                                        $('form#RecordList').on("change", ":input", function() {
                                            if (!xmUpdateSessionPing) return;
                                            xmUpdateSessionPing = false;
                                            $.getJSON("/modules/portal/session_ping.cfm?actionxm=Update");
                                            setTimeout(function() {xmUpdateSessionPing=true;},60000);
                                        });

                                    });
                                }

                                /*
                                function xmRefreshFormField(frm,fld) {
                                    var $form = $(frm);
                                    var params = $form.serializeFormJSON();
                                    params.field = fld;
                                    var $fld = $("#"+fld);

                                    $.each(params,function(i,v) {
                                        if ($.isArray(v)) params[i] = v.join(",");
                                    });
                                    $fld.find('option').remove().end();
                                    $.getJSON("/lib/inc/mini_module/xm.cfc?returnFormat=JSON&method=RefreshField&fld="+fld,params,function(data) {
                                        if (!$fld.hasClass("select2-hidden-accessible")) {
                                            $fld.append(jQuery('<option/>',{text:"Select One",value:""}));
                                        }
                                        $.each(data, function(i, obj) {
                                            $fld.append($('<option/>',{text:obj.label,value:obj.value}));
                                        });
                                        $fld.val($fld.data("default"));
                                    });
                                }
                                */
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="content-box">
                    <div class="box-body">
                        <h2>@lang('app.menu')</h2>
                        <ul class="link-list">
                            <li><a href="/my-account">@lang('app.my_account')</a></li>
                            <li><a href="/my-purchases">@lang('app.my_purchase')</a></li>
                            <li><a href="/my-orders">@lang('app.my_order')</a></li>
                            <li class="active"><a href="/my-favorites">@lang('app.my_favorite')</a></li>
                            <li><a href="/my-account">@lang('app.edit_account')</a></li>
                            <li><a href="/my-account/change-password">@lang('app.change_pw')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
