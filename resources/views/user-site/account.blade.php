@extends('user-site.main')
@section('content-layout')
<div id="content-layout">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/theme/mts/js/jquery.main.min.js?v=111516"></script>
    <div class="container">
        <h1 class="hpage">Mommy Me Station Account</h1>
        <div class="content-left">
            <div class="content-holder">
{{--                <div class="content-box" style="margin-bottom:15px;">--}}
{{--                    <div class="box-body">--}}
{{--                        <h2>@lang('app.recommend_for_you'), {{ $data['public_name'] }}</h2>--}}
{{--                        <div id="related-worksheets" class="crsl-nav">--}}
{{--                            <a href="#" class="previous">Previous</a>--}}
{{--                            <a href="#" class="next">Next</a>--}}
{{--                        </div>--}}
{{--                        <div class="crsl-items" data-navigation="related-worksheets" style="width: 100%; overflow: hidden;">--}}
{{--                            <div class="crsl-wrap" style="width: 915px; margin-left: -183px;">--}}
{{--                                @foreach($recommend_list as $key => $workbook)--}}
{{--                                    <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/at-word-family-printable-workbook" title="View AT Word Family Workbook product">--}}
{{--                                            <div class="bck"><img src="/vault/2599/store/small/at-word-family-workbook.jpg" width="100%" alt=""></div>--}}
{{--                                            <figcaption>{{ $workbook['name'] }}</figcaption></a>--}}
{{--                                        </figure>--}}
{{--                                @endforeach--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="content-box" style="margin-bottom:15px;">
                    <div class="box-body">
                        <h2>@lang('app.my_profile')<div class="fright"><a href="/my-account/edit" class="button x-small">@lang('app.edit')</a></div></h2><div class="clearfix"></div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>
                        <script>
                            window.WEBSPELLCHECKER_CONFIG = {
                                ignoreElements:'div',
                                ignoreClasses:['fc-1_L-N','ce-paragraph','cdx-block'],
                                autoSearch: true,
                                serviceId: '1:MIpHt-1WSou1-JHukUg-x7i7X1-czSVvi-G2YFGi-FcodHg-YSEJe1-JOSIOh-IRe'
                            };
                        </script>
                        <script defer="" type="text/javascript" src="https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js"></script> <link rel="stylesheet" href="/lib/tag/xm/inc/form/form.css?ver=20240425-C" type="text/css"> <form allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" save_toggle="true" persist="false" name="SignInForm" plugins="mask,spell" show_hints="true" method="POST" id="SignInForm" novalidate="">
                            <link rel="stylesheet" type="text/css" href="/lib/tag/xm/inc/form/plain.css">
                            <div class="XMFormGroup" style="margin-bottom:10px;" id="Section">
                                <div id="SectionBodySection" class="XMFormBody">
                                    <table border="0" class="rwdmulti" cellpadding="0" vspace="0" cellspacing="0" width="100%" style="margin-top:5px;">
                                        <tbody><tr>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL1769A191C7DC6D1C9502B363B7FF83BE">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL1769A191C7DC6D1C9502B363B7FF83BE" class="XMLabel" for="SignInFormEL1769A191C7DC6D1C9502B363B7FF83BE" style=""><strong>@lang('app.name')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL1769A191C7DC6D1C9502B363B7FF83BE">{{ $data['public_name'] }} </div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL5CE689B3D99ADC3730CB2018CC101572">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL5CE689B3D99ADC3730CB2018CC101572" class="XMLabel" for="SignInFormEL5CE689B3D99ADC3730CB2018CC101572" style=""><strong>E-mail</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL5CE689B3D99ADC3730CB2018CC101572">{{ $data['email'] }}</div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr><tr>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="2" style="width:100%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormELFDFCF948D68FD8764F36ADF00AF2D19E">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormELFDFCF948D68FD8764F36ADF00AF2D19E" class="XMLabel" for="SignInFormELFDFCF948D68FD8764F36ADF00AF2D19E" style=""><strong>@lang('app.location')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormELFDFCF948D68FD8764F36ADF00AF2D19E">&nbsp;</div> {{ $data['location'] }} </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr><tr>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="2" style="width:100%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormELB8CEA6E111EBA77E52A607A6AEF55ABE">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormELB8CEA6E111EBA77E52A607A6AEF55ABE" class="XMLabel" for="SignInFormELB8CEA6E111EBA77E52A607A6AEF55ABE" style=""><strong>@lang('app.subject_prefer')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormELB8CEA6E111EBA77E52A607A6AEF55ABE">
                                                                    <ul class="reg inline">
                                                                        @foreach($data['subject_prefer'] as $key => $subject)
                                                                            <li>
                                                                                @lang('app.' . $subject)
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    &nbsp;</div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr><tr>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL80A6FDF094CF70098B07CAEFDB0DCEBC">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL80A6FDF094CF70098B07CAEFDB0DCEBC" class="XMLabel" for="SignInFormEL80A6FDF094CF70098B07CAEFDB0DCEBC" style=""><strong>@lang('app.role')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL80A6FDF094CF70098B07CAEFDB0DCEBC">
                                                                    <ul class="reg inline">
                                                                        @foreach($data['role'] as $key => $role)
                                                                            <li>
                                                                                @lang('app.' . $role)
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    &nbsp;</div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL8E79429BFD23757E38B3486C12A23B00">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL8E79429BFD23757E38B3486C12A23B00" class="XMLabel" for="SignInFormEL8E79429BFD23757E38B3486C12A23B00" style=""><strong><strong>@lang('app.grade_teacher')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL8E79429BFD23757E38B3486C12A23B00">
                                                                    <ul class="reg inline">
                                                                        @foreach($data['grade_teacher'] as $key => $grade)
                                                                            <li>
                                                                                @lang('app.' . $grade)
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                    &nbsp;</div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr><tr>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL492D8570935D1A29316878D827532CA2">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL492D8570935D1A29316878D827532CA2" class="XMLabel" for="SignInFormEL492D8570935D1A29316878D827532CA2" style=""><strong>@lang('app.color_prefer')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL492D8570935D1A29316878D827532CA2"> @lang('app.' . $data['color_prefer'])</div> </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                            <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                                <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                    <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                    </colgroup><tbody><tr style=";" id="form_row_SignInFormEL176D25D5F69E605E0EB028484D8FFA23">
                                                        <td valign="top" class="padleft">
                                                            <label id="form_label_SignInFormEL176D25D5F69E605E0EB028484D8FFA23" class="XMLabel" for="SignInFormEL176D25D5F69E605E0EB028484D8FFA23" style=""><strong><strong>@lang('app.gender')</strong></label>
                                                            <div style="word-wrap:break-word;;"><div class="xmFieldValue " data-type="" id="SignInFormEL176D25D5F69E605E0EB028484D8FFA23">&nbsp;</div> @lang('app.' . $data['gender'] ) </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr><tr>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                            <div id="ValidationMessagesSignInForm" class="XMValidationMessage"></div>
                            <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-64EC06F9-D543-5F69-514F49CCBFC2AF31"> <input type="hidden" name="xm_user_token" value="1504685|4FAAB81A-8B4D-4AA5-AEBA-1D8679E0B1A6"> </form>
                        <script type="text/javascript">
                            if (window.hasOwnProperty("xmFormObj")) xmFormObj["SignInForm"] = {"SignInFormEL492D8570935D1A29316878D827532CA2":{"field_options":{},"required":false,"label":"<strong>@lang('app.color_prefer')</strong>","type":"display"},"SignInFormEL1769A191C7DC6D1C9502B363B7FF83BE":{"field_options":{},"required":false,"label":"<strong>@lang('app.name')</strong>","type":"display"},"SignInFormEL5CE689B3D99ADC3730CB2018CC101572":{"field_options":{},"required":false,"label":"<strong>E-mail</strong>","type":"display"},"SignInFormELB8CEA6E111EBA77E52A607A6AEF55ABE":{"field_options":{},"required":false,"label":"<strong>@lang('app.subject_prefer')</strong>","type":"display"},"SignInFormELFDFCF948D68FD8764F36ADF00AF2D19E":{"field_options":{},"required":false,"label":"<strong>@lang('app.location')</strong>","type":"display"},"SignInFormEL8E79429BFD23757E38B3486C12A23B00":{"field_options":{},"required":false,"label":"<strong>@lang('app.grade_teacher')</strong>","type":"display"},"SignInFormEL176D25D5F69E605E0EB028484D8FFA23":{"field_options":{},"required":false,"label":"<strong>@lang('app.gender')</strong>","type":"display"},"SignInFormEL80A6FDF094CF70098B07CAEFDB0DCEBC":{"field_options":{},"required":false,"label":"<strong>@lang('app.role')</strong>","type":"display"}};
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
                                    $('form#SignInForm').on("change", ":input", function() {
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
                                            document.forms['SignInForm'][fld.id].value=fld.value;
                                        }
                                    } else if (data.hasOwnProperty("id") && document.forms['SignInForm']["id"].value == "") {
                                        document.forms['SignInForm']["id"].value = data.id;
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
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-box">
                <div class="box-body">
                    <h2>@lang('app.menu')</h2>
                    <ul class="link-list">
                        <li class="active"><a href="/my-account">@lang('app.my_account')</a></li>
                        <li><a href="/my-purchases">@lang('app.my_purchase')</a></li>
                        <li><a href="/my-orders">@lang('app.my_order')</a></li>
                        <li><a href="/my-account/edit">@lang('app.edit_account')</a></li>
                        <li><a href="/my-account/change-password">@lang('app.change_pw')</a></li>
                    </ul>
                </div>
            </div>
{{--            <div class="content-box">--}}
{{--                <div class="box-body">--}}
{{--                    <h2>Need Help?</h2>--}}
{{--                    <ul class="link-list">--}}
{{--                        <li><a href="/faq" title="View MyTeachingStation.com Frequently Asked Questions">Frequently Asked Questions</a></li>--}}
{{--                        <li><a href="/contact" title="Contact MyTeachingStation.com">Contact Us</a></li>--}}
{{--                        <li><a href="/teaching-materials" title="Contact MyTeachingStation.com">MTS Products</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
