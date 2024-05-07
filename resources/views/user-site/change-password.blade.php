@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="/lib/theme/mts/js/jquery.main.min.js?v=111516"></script>
        <div class="container">
            <h1 class="hpage">My Teaching Station Account</h1>
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>
                        <script>
                            window.WEBSPELLCHECKER_CONFIG = {
                                ignoreElements:'div',
                                ignoreClasses:['fc-1_L-N','ce-paragraph','cdx-block'],
                                autoSearch: true,
                                serviceId: '1:MIpHt-1WSou1-JHukUg-x7i7X1-czSVvi-G2YFGi-FcodHg-YSEJe1-JOSIOh-IRe'
                            };
                        </script>
                        <script defer="" type="text/javascript" src="https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js"></script> <link rel="stylesheet" href="/lib/tag/xm/inc/form/form.css?ver=20240425-C" type="text/css"> <form allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" save_toggle="true" persist="false" name="SimpleForm" plugins="mask,spell" action="/my-account/change-password/submit" show_hints="true" method="post" id="SimpleForm" novalidate="">
                            <link rel="stylesheet" type="text/css" href="/lib/tag/xm/inc/form/plain.css">
                            <input onkeyup="" lang="en" id="actionxm" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="actionxm" value="SavePwd"> <input onkeyup="" lang="en" id="pathway" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="pathway" value="/my-account">
                            <div class="XMFormGroup" style="margin-bottom:10px;" id="Sectionchangepassword">
                                <div id="SectionchangepasswordSectionLabel" class="SectionLabel">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td>@lang('app.change_pw')</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div id="SectionBodySectionchangepassword" class="XMFormBody">
                                    <table width="100%" border="0" cellpadding="2" cellspacing="0" style="table-layout:fixed;margin-top:5px;" class="rwd">
                                        <colgroup>
                                            <col style="width:160px;">
                                            <col style="width:auto;text-overflow:ellipsis;">
                                        </colgroup>
                                        <tbody>
                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_password">
                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_password" class="XMLabel" for="password" style="">@lang('app.new_pw')</label></td>
                                            <td valign="top" style="width:90%;word-wrap:break-word;;">
                                                <link type="text/css" rel="stylesheet" href="/lib/com/password/password.min.css?ver=20200714-C">
                                                <script src="/lib/com/password/password.webauthor.js?ver=20200714-G"></script>
                                                <style>
                                                    .pwdProgress {
                                                        position: absolute;
                                                        bottom: 0;
                                                        left: 0;
                                                        width: 100%;
                                                        opacity: 0.50;
                                                        height: 0%;
                                                    }
                                                </style>
                                                <input onkeyup="" lang="en" maxlength="15" id="password" vtype="password" hint="" placeholder="" vlabel="New Password" vrequired="false" class="clInput form-control clInput form-control" style="" type="password" name="password" value="">
                                            </td>
                                        </tr>
                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_confirm_password">
                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_confirm_password" class="XMLabel" for="confirm_password" style="">@lang('app.confirm_pw')</label></td>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="15" id="confirm_password" vtype="password" hint="" placeholder="" vlabel="Confirm New Password" vrequired="false" class="clInput form-control clInput form-control" style="" type="password" name="confirm_password" value="">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="ValidationMessagesSimpleForm" class="XMValidationMessage"></div>
                            <div style="float:right;">
                                <table border="0" cellpadding="2" vspace="0" cellspacing="0">
                                    <tbody><tr class="XMFormRow XMFormRowChild" id="form_row_buttons" style="border-bottom:0;">
                                        <td valign="top" style="border-bottom:0;">
                                            <input onkeyup="" lang="en" id="cancel" vtype="button" hint="" placeholder="" vlabel="" vrequired="false" class="btn-gray" style="" onclick="window.location.href='/my-account';" type="button" name="cancel" value="Cancel"> <input onkeyup="" lang="en" id="savebtn" vtype="submit" hint="" placeholder="" vlabel="" vrequired="false" class="btn btn-primary" style="" onclick="return ValidateOptionalFields(this.form);" type="submit" name="savebtn" value="Save">
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div style="display:block;clear:both;line-height:1px;font-size:1px;	overflow: hidden;"></div>
                            <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-79D447FF-C69D-F225-66941756E6A1703A"> <input type="hidden" name="xm_user_token" value="1504685|4FAAB81A-8B4D-4AA5-AEBA-1D8679E0B1A6"> </form>
                        <script type="text/javascript">
                            if (window.hasOwnProperty("xmFormObj")) xmFormObj["SimpleForm"] = {"password":{"field_options":{},"required":false,"label":"New Password","type":"password"},"confirm_password":{"field_options":{},"required":false,"label":"Confirm New Password","type":"password"}};

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
                                    $('form#SimpleForm').on("change", ":input", function() {
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
                                            document.forms['SimpleForm'][fld.id].value=fld.value;
                                        }
                                    } else if (data.hasOwnProperty("id") && document.forms['SimpleForm']["id"].value == "") {
                                        document.forms['SimpleForm']["id"].value = data.id;
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
            <script language="JavaScript">
                checkBeforeLeaving = false;
                function ValidateOptionalFields(formObj) {
                    try {
                        if (formObj.password.value.length <=  4 || formObj.password.value.indexOf(' ') >= 0) {
                            alert("Your password must be at least 6 characters long and it must not contain special characters or space.");
                            return false;
                        }
                        if (formObj.confirm_password.value != formObj.password.value) {
                            alert("Your passwords do not match.");
                            return false;
                        }
                    }
                    catch(err) {
                        alert("Please enter a valid password.");
                        return false;
                    }

                }
            </script>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
