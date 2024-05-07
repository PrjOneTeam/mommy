@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">Payment Info</h1>
        <div class="container" id="checkout">
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <div id="processmsg" class="mto30 hide">
                            <div class="ploadingck"></div> Processing Request...
                        </div>
                        <div class="col80" style="margin-top:10px;">
                            <div id="checkout-wrapper">
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" type="text/javascript"></script>
                                <script>
                                    window.WEBSPELLCHECKER_CONFIG = {
                                        ignoreElements: 'div',
                                        ignoreClasses: ['fc-1_L-N', 'ce-paragraph', 'cdx-block'],
                                        autoSearch: true,
                                        serviceId: '1:MIpHt-1WSou1-JHukUg-x7i7X1-czSVvi-G2YFGi-FcodHg-YSEJe1-JOSIOh-IRe'
                                    };
                                </script>
                                <script defer="" type="text/javascript" src="https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js"></script>
                                <link rel="stylesheet" href="/lib/tag/xm/inc/form/form.css?ver=20240425-C" type="text/css">
                                <form target="_self" allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" style="display:none;" save_toggle="true" persist="false" name="SignInForm" plugins="mask,spell" action="/pub/mts/checkout.cfm" show_hints="true" method="post" id="SignInForm" novalidate="">
                                    <link rel="stylesheet" type="text/css" href="/lib/tag/xm/inc/form/plain.css">
                                    <input onkeyup="" lang="en" id="actionxm" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="actionxm" value="AuthenticateUser">
                                    <div class="XMFormGroup" style="margin-bottom:10px;" id="Section">
                                        <div id="SectionBodySection" class="XMFormBody">
                                            <table width="100%" border="0" cellpadding="2" cellspacing="0" style="table-layout:fixed;margin-top:5px;" class="rwd">
                                                <colgroup>
                                                    <col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup>
                                                <tbody>
                                                <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_email">
                                                    <td colspan="2" valign="top" class="padleft">
                                                        <label id="form_label_email" class="XMLabel" for="email" style=""><span class="astrix">*</span>E-mail Address</label>
                                                        <div style="word-wrap:break-word;;"><input id="email" mask="" maxlength="50" vtype="email" hint="" placeholder="name@domain.com" vlabel="E-mail Address" vrequired="true" class="clInput form-control xm-input-email" data-inputtype="email" style="width:93%" type="email" name="email" value=""> </div>
                                                    </td>
                                                </tr>
                                                <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_password">
                                                    <td colspan="2" valign="top" class="padleft">
                                                        <label id="form_label_password" class="XMLabel" for="password" style=""><span class="astrix">*</span>Password</label>
                                                        <div style="word-wrap:break-word;;">
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
                                                            <input onkeyup="" lang="en" maxlength="15" id="password" vtype="password" hint="" placeholder="" vlabel="Password" vrequired="true" class="clInput form-control clInput form-control" style="width:93%" type="password" name="password" value="">
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div id="ValidationMessagesSignInForm" class="XMValidationMessage"></div>
                                    <div style="float:right;">
                                        <table border="0" cellpadding="2" vspace="0" cellspacing="0">
                                            <tbody>
                                            <tr class="XMFormRow XMFormRowChild" id="form_row_buttons" style="border-bottom:0;">
                                                <td valign="top" style="border-bottom:0;">
                                                    <input onkeyup="" lang="en" id="taskbtn" vtype="submit" hint="" placeholder="" vlabel="" vrequired="false" class="btn btn-primary" style="" type="submit" name="taskbtn" value="Sign In">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="display:block;clear:both;line-height:1px;font-size:1px;	overflow: hidden;"></div>
                                    <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-421106C6-94FC-A131-78D5B737704AB3E1"> <input type="hidden" name="xm_user_token" value="1506178|BF247777-32E5-49B2-91E5-720D60761AD1">
                                </form>
                                <script type="text/javascript">
                                    if (window.hasOwnProperty("xmFormObj")) xmFormObj["SignInForm"] = {
                                        "password": {
                                            "field_options": {},
                                            "required": true,
                                            "label": "Password",
                                            "type": "password"
                                        },
                                        "email": {
                                            "field_options": {},
                                            "required": true,
                                            "label": "E-mail Address",
                                            "type": "email"
                                        }
                                    };

                                    //MR: 9/5/2022 - loop over all fields to set fieldOptions


                                    if (typeof jQuery != 'undefined') {
                                        $(function() {
                                            /*
                                            $('input').bind('input', function(){
                                                $(this).val(function(_, v){
                                                    return v.replace(/\s+/g, '');
                                                });
                                            });
                                            */

                                            $("input[type='text'], input[type='number']").bind("change", function() {
                                                var $this = $(this);
                                                $this.val($.trim($this.val()));
                                            });

                                            $(".optionalRendering").find("span").each(function(i, v) {
                                                var $this = $(this);
                                                if ($this.is(":empty")) $this.parent().hide();
                                            });



                                            //Loop over all form rows and add a class to any that don't have a child of .XMFormRow
                                            $(".XMFormRow").each(function(e, v) {
                                                var $this = $(this);
                                                if ($this.find(".XMFormRow").length === 0) {
                                                    $this.addClass("XMFormRowChild");
                                                }
                                            });
                                            $(window).on("dynrow:add", function(e, prefix, cntr, data) {
                                                $("#" + prefix + "Row" + cntr).find(".XMFormRow").each(function(e, v) {
                                                    var $this = $(this);
                                                    if ($this.find(".XMFormRow").length === 0) {
                                                        $this.addClass("XMFormRowChild");
                                                    }
                                                });
                                            });
                                            $(":input[name][mask]").each(function(e) {
                                                var $this = $(this);
                                                if ($this.attr("mask") !== "") {
                                                    $this.mask($this.attr("mask"));
                                                }
                                            });

                                            $('input[vtype=currency]').each(function() {
                                                var $this = $(this);
                                                tippy($this[0], {
                                                    allowHTML: true,
                                                    trigger: 'manual'
                                                });
                                                $this.on({
                                                    input: function() {
                                                        var $this = $(this);
                                                        var tip = $this.val() != "" ? "$" + parseFloat($this.val()).toLocaleString() : "";
                                                        var instance = $this[0]._tippy;
                                                        instance.setContent(tip);
                                                        if (tip === "") instance.hide();
                                                        else instance.show();
                                                        //console.log($this[0]._tippy);
                                                    },
                                                    focus: function() {
                                                        var $this = $(this);
                                                        var tip = $this.val() != "" ? "$" + parseFloat($this.val()).toLocaleString() : "";
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
                                                setTimeout(function() {
                                                    xmUpdateSessionPing = true;
                                                }, 60000);
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
                                                heading: "",
                                                bgColor: "#444",
                                                textColor: "#fff",
                                                hideAfter: 3000,
                                                stack: false
                                            });
                                            if (data.fields) {
                                                for (var f = 0; f < data.fields.length; f++) {
                                                    var fld = data.fields[f];
                                                    document.forms['SignInForm'][fld.id].value = fld.value;
                                                }
                                            } else if (data.hasOwnProperty("id") && document.forms['SignInForm']["id"].value == "") {
                                                document.forms['SignInForm']["id"].value = data.id;
                                            }

                                            checkBeforeLeaving = true;
                                        }, "json");
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
                                <div id="payment-tabs">
                                    <ul class="tabs showreview">
                                        <li class="active"><a href="#tab1" class="active">Credit/Debit Card</a></li>
                                        <li class=""><a href="#tab2" class="">Purchase Order</a></li>
                                    </ul>
                                    <div id="tab1" class="tabbody" style="">
                                        <form allow_multiple_submissions="false" onsubmit="if (frmValidCheck(this)) {jQuery('#btnaction').attr('disabled', true);showCheckoutLoad(); return true} else { return false;}" print_mode="false" enctype="multipart/form-data" save_toggle="true" persist="false" name="CheckoutForm" plugins="mask,spell" action="/pub/mts/checkout.cfm" show_hints="true" method="POST" id="CheckoutForm" novalidate=""> <input onkeyup="" lang="en" id="actionxm" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="actionxm" value="CompleteOrder">
                                            <div class="XMFormGroup" style="margin-bottom:10px;" id="Sectionbillingcontact">
                                                <div id="SectionbillingcontactSectionLabel" class="SectionLabel">
                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>Billing Contact</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="SectionBodySectionbillingcontact" class="XMFormBody">
                                                    <table width="100%" border="0" cellpadding="2" cellspacing="0" style="table-layout:fixed;margin-top:5px;" class="rwd">
                                                        <colgroup>
                                                            <col style="width:160px;">
                                                            <col style="width:auto;text-overflow:ellipsis;">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_first_name">
                                                            <td valign="top" class="padleft"><label id="form_label_first_name" class="XMLabel" for="first_name" style=""><span class="astrix">*</span>First Name</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="first_name" vtype="text" hint="" placeholder="" vlabel="First Name" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="first_name" value="abc">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_last_name">
                                                            <td valign="top" class="padleft"><label id="form_label_last_name" class="XMLabel" for="last_name" style=""><span class="astrix">*</span>Last Name</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="last_name" vtype="text" hint="" placeholder="" vlabel="Last Name" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="last_name" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_main_workgroup">
                                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_main_workgroup" class="XMLabel" for="main_workgroup" style="">Organization</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="100" id="main_workgroup" vtype="text" hint="" placeholder="" vlabel="Organization" vrequired="false" class="clInput form-control clInput form-control" style="" type="text" name="main_workgroup" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_email">
                                                            <td valign="top" class="padleft"><label id="form_label_email" class="XMLabel" for="email" style=""><span class="astrix">*</span>Email</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input id="email" mask="" maxlength="70" vtype="email" hint="" placeholder="name@domain.com" vlabel="Email" vrequired="true" class="clInput form-control xm-input-email" data-inputtype="email" style="" type="email" name="email" value="tuanpa3@smartosc.com">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_email_confirm">
                                                            <td valign="top" class="padleft"><label id="form_label_email_confirm" class="XMLabel" for="email_confirm" style=""><span class="astrix">*</span>Confirm Email</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input id="email_confirm" mask="" maxlength="70" vtype="email" hint="" placeholder="name@domain.com" vlabel="Confirm Email" vrequired="true" class="clInput form-control xm-input-email" data-inputtype="email" style="" type="email" name="email_confirm" value="tuanpa3@smartosc.com">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_address1">
                                                            <td valign="top" class="padleft"><label id="form_label_billing_address1" class="XMLabel" for="billing_address1" style=""><span class="astrix">*</span>Address 1</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="50" id="billing_address1" vtype="text" hint="" placeholder="" vlabel="Address 1" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="billing_address1" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_address2">
                                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_billing_address2" class="XMLabel" for="billing_address2" style="">Address 2</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="50" id="billing_address2" vtype="text" hint="" placeholder="" vlabel="Address 2" vrequired="false" class="clInput form-control clInput form-control" style="" type="text" name="billing_address2" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_city">
                                                            <td valign="top" class="padleft"><label id="form_label_billing_city" class="XMLabel" for="billing_city" style=""><span class="astrix">*</span>City</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="50" id="billing_city" vtype="text" hint="" placeholder="" vlabel="City" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="billing_city" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_zip">
                                                            <td valign="top" class="padleft"><label id="form_label_billing_zip" class="XMLabel" for="billing_zip" style=""><span class="astrix">*</span>Zip</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="20" id="billing_zip" vtype="text" hint="" placeholder="" vlabel="Zip" vrequired="true" class="clInput form-control clInput form-control" style="width:100px;" type="text" name="billing_zip" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_country">
                                                            <td valign="top" class="padleft"><label id="form_label_billing_country" class="XMLabel" for="billing_country" style=""><span class="astrix">*</span>Country</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><select vrequired="true" groups="" hint="" style="" class="clSelect form-control" multiple_select_size="5" delimiter="^" placeholder="" name="billing_country" vlabel="Country" vtype="select" allow_multiple="false" id="billing_country" default="USA" data-default="USA">
                                                                    <option style="" label="Select Country" value="">Select Country</option>
                                                                    <option selected="" style="" label="United States" value="USA">United States</option>
                                                                    <option style="" label="US Territories" value="US Territories">US Territories</option>
                                                                    <option style="" label="Canada" value="Canada">Canada</option>
                                                                    <option style="" label="Afghanistan" value="Afghanistan">Afghanistan</option>
                                                                    <option style="" label="Albania" value="Albania">Albania</option>
                                                                    <option style="" label="Algeria" value="Algeria">Algeria</option>
                                                                    <option style="" label="American Samoa" value="American Samoa">American Samoa</option>
                                                                    <option style="" label="Andorra" value="Andorra">Andorra</option>
                                                                    <option style="" label="Angola" value="Angola">Angola</option>
                                                                    <option style="" label="Anguilla" value="Anguilla">Anguilla</option>
                                                                    <option style="" label="Antartica" value="Antartica">Antartica</option>
                                                                    <option style="" label="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                    <option style="" label="Argentina" value="Argentina">Argentina</option>
                                                                    <option style="" label="Armenia" value="Armenia">Armenia</option>
                                                                    <option style="" label="Aruba" value="Aruba">Aruba</option>
                                                                    <option style="" label="Australia" value="Australia">Australia</option>
                                                                    <option style="" label="Austria" value="Austria">Austria</option>
                                                                    <option style="" label="Azerbaijan" value="Azerbaijan">Azerbaijan</option>
                                                                    <option style="" label="Bahamas" value="Bahamas">Bahamas</option>
                                                                    <option style="" label="Bahrain" value="Bahrain">Bahrain</option>
                                                                    <option style="" label="Bangladesh" value="Bangladesh">Bangladesh</option>
                                                                    <option style="" label="Barbados" value="Barbados">Barbados</option>
                                                                    <option style="" label="Belarus" value="Belarus">Belarus</option>
                                                                    <option style="" label="Belgium" value="Belgium">Belgium</option>
                                                                    <option style="" label="Belize" value="Belize">Belize</option>
                                                                    <option style="" label="Benin" value="Benin">Benin</option>
                                                                    <option style="" label="Bermuda" value="Bermuda">Bermuda</option>
                                                                    <option style="" label="Bhutan" value="Bhutan">Bhutan</option>
                                                                    <option style="" label="Bolivia" value="Bolivia">Bolivia</option>
                                                                    <option style="" label="Bosnia-Herzegovina" value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                                    <option style="" label="Botswana" value="Botswana">Botswana</option>
                                                                    <option style="" label="Bouvet Island" value="Bouvet Island">Bouvet Island</option>
                                                                    <option style="" label="Brazil" value="Brazil">Brazil</option>
                                                                    <option style="" label="British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                    <option style="" label="Brunei Darussalam" value="Brunei Darussalam">Brunei Darussalam</option>
                                                                    <option style="" label="Bulgaria" value="Bulgaria">Bulgaria</option>
                                                                    <option style="" label="Burkina Faso" value="Burkina Faso">Burkina Faso</option>
                                                                    <option style="" label="Burundi" value="Burundi">Burundi</option>
                                                                    <option style="" label="Cambodia" value="Cambodia">Cambodia</option>
                                                                    <option style="" label="Cameroon" value="Cameroon">Cameroon</option>
                                                                    <option style="" label="Cape Verde" value="Cape Verde">Cape Verde</option>
                                                                    <option style="" label="Cayman Islands" value="Cayman Islands">Cayman Islands</option>
                                                                    <option style="" label="Central African Republic" value="Central African Republic">Central African Republic</option>
                                                                    <option style="" label="Chad" value="Chad">Chad</option>
                                                                    <option style="" label="Chile" value="Chile">Chile</option>
                                                                    <option style="" label="China" value="China">China</option>
                                                                    <option style="" label="Christmas Island" value="Christmas Island">Christmas Island</option>
                                                                    <option style="" label="Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                    <option style="" label="Colombia" value="Colombia">Colombia</option>
                                                                    <option style="" label="Comoros" value="Comoros">Comoros</option>
                                                                    <option style="" label="Congo" value="Congo">Congo</option>
                                                                    <option style="" label="Cook Islands" value="Cook Islands">Cook Islands</option>
                                                                    <option style="" label="Costa Rica" value="Costa Rica">Costa Rica</option>
                                                                    <option style="" label="Cote D'Ivoire" value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                                    <option style="" label="Croatia" value="Croatia">Croatia</option>
                                                                    <option style="" label="Cuba" value="Cuba">Cuba</option>
                                                                    <option style="" label="Cyprus" value="Cyprus">Cyprus</option>
                                                                    <option style="" label="Czech Republic" value="Czech Republic">Czech Republic</option>
                                                                    <option style="" label="Denmark" value="Denmark">Denmark</option>
                                                                    <option style="" label="Djibouti" value="Djibouti">Djibouti</option>
                                                                    <option style="" label="Dominica" value="Dominica">Dominica</option>
                                                                    <option style="" label="Dominican Republic" value="Dominican Republic">Dominican Republic</option>
                                                                    <option style="" label="East Timor" value="East Timor">East Timor</option>
                                                                    <option style="" label="Ecuador" value="Ecuador">Ecuador</option>
                                                                    <option style="" label="Egypt" value="Egypt">Egypt</option>
                                                                    <option style="" label="El Salvador" value="El Salvador">El Salvador</option>
                                                                    <option style="" label="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option>
                                                                    <option style="" label="Estonia" value="Estonia">Estonia</option>
                                                                    <option style="" label="Ethiopia" value="Ethiopia">Ethiopia</option>
                                                                    <option style="" label="Faeroe Islands" value="Faeroe Islands">Faeroe Islands</option>
                                                                    <option style="" label="Falkland Islands (Malvinas)" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                    <option style="" label="Fiji" value="Fiji">Fiji</option>
                                                                    <option style="" label="Finland" value="Finland">Finland</option>
                                                                    <option style="" label="France" value="France">France</option>
                                                                    <option style="" label="French Guiana" value="French Guiana">French Guiana</option>
                                                                    <option style="" label="French Polynesia" value="French Polynesia">French Polynesia</option>
                                                                    <option style="" label="French Southern Territories" value="French Southern Territories">French Southern Territories</option>
                                                                    <option style="" label="Gabon" value="Gabon">Gabon</option>
                                                                    <option style="" label="Gambia" value="Gambia">Gambia</option>
                                                                    <option style="" label="Georgia" value="Georgia">Georgia</option>
                                                                    <option style="" label="Germany" value="Germany">Germany</option>
                                                                    <option style="" label="Ghana" value="Ghana">Ghana</option>
                                                                    <option style="" label="Gibraltar" value="Gibraltar">Gibraltar</option>
                                                                    <option style="" label="Greece" value="Greece">Greece</option>
                                                                    <option style="" label="Greenland" value="Greenland">Greenland</option>
                                                                    <option style="" label="Grenada" value="Grenada">Grenada</option>
                                                                    <option style="" label="Guadeloupe" value="Guadeloupe">Guadeloupe</option>
                                                                    <option style="" label="Guam" value="Guam">Guam</option>
                                                                    <option style="" label="Guatemala" value="Guatemala">Guatemala</option>
                                                                    <option style="" label="Guernsey. C.I." value="Guernsey. C.I.">Guernsey. C.I.</option>
                                                                    <option style="" label="Guinea" value="Guinea">Guinea</option>
                                                                    <option style="" label="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option>
                                                                    <option style="" label="Guyana" value="Guyana">Guyana</option>
                                                                    <option style="" label="Haiti" value="Haiti">Haiti</option>
                                                                    <option style="" label="Heard and McDonald Islands" value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                                                    <option style="" label="Honduras" value="Honduras">Honduras</option>
                                                                    <option style="" label="Hong Kong" value="Hong Kong">Hong Kong</option>
                                                                    <option style="" label="Hungary" value="Hungary">Hungary</option>
                                                                    <option style="" label="Iceland" value="Iceland">Iceland</option>
                                                                    <option style="" label="India" value="India">India</option>
                                                                    <option style="" label="Indonesia" value="Indonesia">Indonesia</option>
                                                                    <option style="" label="Iran (Islamic Republic of)" value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                    <option style="" label="Iraq" value="Iraq">Iraq</option>
                                                                    <option style="" label="Ireland" value="Ireland">Ireland</option>
                                                                    <option style="" label="Isle of Man" value="Isle of Man">Isle of Man</option>
                                                                    <option style="" label="Israel" value="Israel">Israel</option>
                                                                    <option style="" label="Italy" value="Italy">Italy</option>
                                                                    <option style="" label="Jamaica" value="Jamaica">Jamaica</option>
                                                                    <option style="" label="Japan" value="Japan">Japan</option>
                                                                    <option style="" label="Jersey. C.I." value="Jersey. C.I.">Jersey. C.I.</option>
                                                                    <option style="" label="Jordan" value="Jordan">Jordan</option>
                                                                    <option style="" label="Kazakhstan" value="Kazakhstan">Kazakhstan</option>
                                                                    <option style="" label="Kenya" value="Kenya">Kenya</option>
                                                                    <option style="" label="Kiribati" value="Kiribati">Kiribati</option>
                                                                    <option style="" label="North Korea" value="North Korea">North Korea</option>
                                                                    <option style="" label="South Korea" value="South Korea">South Korea</option>
                                                                    <option style="" label="Kuwait" value="Kuwait">Kuwait</option>
                                                                    <option style="" label="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option style="" label="Lao Peoples Democratic Republi" value="Lao Peoples Democratic Republi">Lao Peoples Democratic Republi</option>
                                                                    <option style="" label="Latvia" value="Latvia">Latvia</option>
                                                                    <option style="" label="Lebanon" value="Lebanon">Lebanon</option>
                                                                    <option style="" label="Lesotho" value="Lesotho">Lesotho</option>
                                                                    <option style="" label="Liberia" value="Liberia">Liberia</option>
                                                                    <option style="" label="Libyan Arab Jamahiriya" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                    <option style="" label="Liechtenstein" value="Liechtenstein">Liechtenstein</option>
                                                                    <option style="" label="Lithuania" value="Lithuania">Lithuania</option>
                                                                    <option style="" label="Luxembourg" value="Luxembourg">Luxembourg</option>
                                                                    <option style="" label="Macau" value="Macau">Macau</option>
                                                                    <option style="" label="Macedonian" value="Macedonian">Macedonian</option>
                                                                    <option style="" label="Madagascar" value="Madagascar">Madagascar</option>
                                                                    <option style="" label="Malawi" value="Malawi">Malawi</option>
                                                                    <option style="" label="Malaysia" value="Malaysia">Malaysia</option>
                                                                    <option style="" label="Maldives" value="Maldives">Maldives</option>
                                                                    <option style="" label="Mali" value="Mali">Mali</option>
                                                                    <option style="" label="Malta" value="Malta">Malta</option>
                                                                    <option style="" label="Marshall Islands" value="Marshall Islands">Marshall Islands</option>
                                                                    <option style="" label="Martinique" value="Martinique">Martinique</option>
                                                                    <option style="" label="Mauritania" value="Mauritania">Mauritania</option>
                                                                    <option style="" label="Mauritius" value="Mauritius">Mauritius</option>
                                                                    <option style="" label="Mexico" value="Mexico">Mexico</option>
                                                                    <option style="" label="Micronesia. Fed. States of" value="Micronesia. Fed. States of">Micronesia. Fed. States of</option>
                                                                    <option style="" label="Moldova. Republic of" value="Moldova. Republic of">Moldova. Republic of</option>
                                                                    <option style="" label="Monaco" value="Monaco">Monaco</option>
                                                                    <option style="" label="Mongolia" value="Mongolia">Mongolia</option>
                                                                    <option style="" label="Montserrat" value="Montserrat">Montserrat</option>
                                                                    <option style="" label="Morocco" value="Morocco">Morocco</option>
                                                                    <option style="" label="Mozambique" value="Mozambique">Mozambique</option>
                                                                    <option style="" label="Myanmar" value="Myanmar">Myanmar</option>
                                                                    <option style="" label="Namibia" value="Namibia">Namibia</option>
                                                                    <option style="" label="Nauru" value="Nauru">Nauru</option>
                                                                    <option style="" label="Nepal" value="Nepal">Nepal</option>
                                                                    <option style="" label="Netherland Antilles" value="Netherland Antilles">Netherland Antilles</option>
                                                                    <option style="" label="Netherlands" value="Netherlands">Netherlands</option>
                                                                    <option style="" label="Neutral Zone (Saudi/Iraq)" value="Neutral Zone (Saudi/Iraq)">Neutral Zone (Saudi/Iraq)</option>
                                                                    <option style="" label="New Caledonia" value="New Caledonia">New Caledonia</option>
                                                                    <option style="" label="New Zealand" value="New Zealand">New Zealand</option>
                                                                    <option style="" label="Nicaragua" value="Nicaragua">Nicaragua</option>
                                                                    <option style="" label="Niger" value="Niger">Niger</option>
                                                                    <option style="" label="Nigeria" value="Nigeria">Nigeria</option>
                                                                    <option style="" label="Niue" value="Niue">Niue</option>
                                                                    <option style="" label="Norfolk Island" value="Norfolk Island">Norfolk Island</option>
                                                                    <option style="" label="Northern Mariana Islands" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                    <option style="" label="Norway" value="Norway">Norway</option>
                                                                    <option style="" label="Oman" value="Oman">Oman</option>
                                                                    <option style="" label="Other" value="Other">Other</option>
                                                                    <option style="" label="Pakistan" value="Pakistan">Pakistan</option>
                                                                    <option style="" label="Palau" value="Palau">Palau</option>
                                                                    <option style="" label="Panama" value="Panama">Panama</option>
                                                                    <option style="" label="Panama Canal Zone" value="Panama Canal Zone">Panama Canal Zone</option>
                                                                    <option style="" label="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option>
                                                                    <option style="" label="Paraguay" value="Paraguay">Paraguay</option>
                                                                    <option style="" label="Peru" value="Peru">Peru</option>
                                                                    <option style="" label="Philippines" value="Philippines">Philippines</option>
                                                                    <option style="" label="Pitcairn" value="Pitcairn">Pitcairn</option>
                                                                    <option style="" label="Poland" value="Poland">Poland</option>
                                                                    <option style="" label="Portugal" value="Portugal">Portugal</option>
                                                                    <option style="" label="Puerto Rico" value="Puerto Rico">Puerto Rico</option>
                                                                    <option style="" label="Qatar" value="Qatar">Qatar</option>
                                                                    <option style="" label="Reunion" value="Reunion">Reunion</option>
                                                                    <option style="" label="Romania" value="Romania">Romania</option>
                                                                    <option style="" label="Russian Federation" value="Russian Federation">Russian Federation</option>
                                                                    <option style="" label="Rwanda" value="Rwanda">Rwanda</option>
                                                                    <option style="" label="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                    <option style="" label="Saint Lucia" value="Saint Lucia">Saint Lucia</option>
                                                                    <option style="" label="Saipan" value="Saipan">Saipan</option>
                                                                    <option style="" label="Samoa" value="Samoa">Samoa</option>
                                                                    <option style="" label="San Marino" value="San Marino">San Marino</option>
                                                                    <option style="" label="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                    <option style="" label="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option style="" label="Senegal" value="Senegal">Senegal</option>
                                                                    <option style="" label="Seychelles" value="Seychelles">Seychelles</option>
                                                                    <option style="" label="Sierra Leone" value="Sierra Leone">Sierra Leone</option>
                                                                    <option style="" label="Singapore" value="Singapore">Singapore</option>
                                                                    <option style="" label="Slovakia" value="Slovakia">Slovakia</option>
                                                                    <option style="" label="Slovenia" value="Slovenia">Slovenia</option>
                                                                    <option style="" label="Solomon Islands" value="Solomon Islands">Solomon Islands</option>
                                                                    <option style="" label="Somalia" value="Somalia">Somalia</option>
                                                                    <option style="" label="South Africa" value="South Africa">South Africa</option>
                                                                    <option style="" label="Spain" value="Spain">Spain</option>
                                                                    <option style="" label="Sri Lanka" value="Sri Lanka">Sri Lanka</option>
                                                                    <option style="" label="St. Helena" value="St. Helena">St. Helena</option>
                                                                    <option style="" label="St. Pierre and Miquelon" value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                    <option style="" label="St. Vincent and the Grenadines" value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                                                    <option style="" label="Sudan" value="Sudan">Sudan</option>
                                                                    <option style="" label="Suriname" value="Suriname">Suriname</option>
                                                                    <option style="" label="Svalbard and Jan Mayen Islands" value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                    <option style="" label="Swaziland" value="Swaziland">Swaziland</option>
                                                                    <option style="" label="Sweden" value="Sweden">Sweden</option>
                                                                    <option style="" label="Switzerland" value="Switzerland">Switzerland</option>
                                                                    <option style="" label="Syrian Arab Republic" value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                    <option style="" label="Taiwan" value="Taiwan">Taiwan</option>
                                                                    <option style="" label="Tajikistan" value="Tajikistan">Tajikistan</option>
                                                                    <option style="" label="Tanzania. United Republic of" value="Tanzania. United Republic of">Tanzania. United Republic of</option>
                                                                    <option style="" label="Thailand" value="Thailand">Thailand</option>
                                                                    <option style="" label="Togo" value="Togo">Togo</option>
                                                                    <option style="" label="Tokelau" value="Tokelau">Tokelau</option>
                                                                    <option style="" label="Tonga" value="Tonga">Tonga</option>
                                                                    <option style="" label="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                    <option style="" label="Tunisia" value="Tunisia">Tunisia</option>
                                                                    <option style="" label="Turkey" value="Turkey">Turkey</option>
                                                                    <option style="" label="Turkmenistan" value="Turkmenistan">Turkmenistan</option>
                                                                    <option style="" label="Turks and Caicos Islands" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                    <option style="" label="Tuvalu" value="Tuvalu">Tuvalu</option>
                                                                    <option style="" label="United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option>
                                                                    <option style="" label="U.S.Minor Outlying Islands" value="U.S.Minor Outlying Islands">U.S.Minor Outlying Islands</option>
                                                                    <option style="" label="Uganda" value="Uganda">Uganda</option>
                                                                    <option style="" label="Ukraine" value="Ukraine">Ukraine</option>
                                                                    <option style="" label="United Kingdom" value="United Kingdom">United Kingdom</option>
                                                                    <option style="" label="Uruguay" value="Uruguay">Uruguay</option>
                                                                    <option style="" label="Uzbekistan" value="Uzbekistan">Uzbekistan</option>
                                                                    <option style="" label="Vanuatu" value="Vanuatu">Vanuatu</option>
                                                                    <option style="" label="Vatican City State" value="Vatican City State">Vatican City State</option>
                                                                    <option style="" label="Venezuela" value="Venezuela">Venezuela</option>
                                                                    <option style="" label="Vietnam" value="Vietnam">Vietnam</option>
                                                                    <option style="" label="Virgin Islands (British)" value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                    <option style="" label="Virgin Islands. U.S." value="Virgin Islands. U.S.">Virgin Islands. U.S.</option>
                                                                    <option style="" label="Wallis and Futuna Islands" value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                    <option style="" label="Western Sahara" value="Western Sahara">Western Sahara</option>
                                                                    <option style="" label="Yemen. Republic of" value="Yemen. Republic of">Yemen. Republic of</option>
                                                                    <option style="" label="Yugoslavia" value="Yugoslavia">Yugoslavia</option>
                                                                    <option style="" label="Zaire" value="Zaire">Zaire</option>
                                                                    <option style="" label="Zambia" value="Zambia">Zambia</option>
                                                                    <option style="" label="Zimbabwe" value="Zimbabwe">Zimbabwe</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_billing_state">
                                                            <td valign="top" class="padleft"><label id="form_label_billing_state" class="XMLabel" for="billing_state" style=""><span class="astrix">*</span>State</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><select vrequired="true" hint="" style="" class="form-control clSelect form-control" multiple_select_size="5" delimiter="," placeholder="" name="billing_state" vlabel="State" vtype="states" allow_multiple="false" id="billing_state" default="">
                                                                    <option selected="" label="Select State" value="">Select State</option>
                                                                    <option label="Alabama" value="AL">Alabama</option>
                                                                    <option label="Alaska" value="AK">Alaska</option>
                                                                    <option label="Arizona" value="AZ">Arizona</option>
                                                                    <option label="Arkansas" value="AR">Arkansas</option>
                                                                    <option label="California" value="CA">California</option>
                                                                    <option label="Colorado" value="CO">Colorado</option>
                                                                    <option label="Connecticut" value="CT">Connecticut</option>
                                                                    <option label="D.C." value="DC">D.C.</option>
                                                                    <option label="Delaware" value="DE">Delaware</option>
                                                                    <option label="Florida" value="FL">Florida</option>
                                                                    <option label="Georgia" value="GA">Georgia</option>
                                                                    <option label="Guam" value="GU">Guam</option>
                                                                    <option label="Hawaii" value="HI">Hawaii</option>
                                                                    <option label="Idaho" value="ID">Idaho</option>
                                                                    <option label="Illinois" value="IL">Illinois</option>
                                                                    <option label="Indiana" value="IN">Indiana</option>
                                                                    <option label="Iowa" value="IA">Iowa</option>
                                                                    <option label="Kansas" value="KS">Kansas</option>
                                                                    <option label="Kentucky" value="KY">Kentucky</option>
                                                                    <option label="Louisiana" value="LA">Louisiana</option>
                                                                    <option label="Maine" value="ME">Maine</option>
                                                                    <option label="Maryland" value="MD">Maryland</option>
                                                                    <option label="Massachusetts" value="MA">Massachusetts</option>
                                                                    <option label="Michigan" value="MI">Michigan</option>
                                                                    <option label="Minnesota" value="MN">Minnesota</option>
                                                                    <option label="Mississippi" value="MS">Mississippi</option>
                                                                    <option label="Missouri" value="MO">Missouri</option>
                                                                    <option label="Montana" value="MT">Montana</option>
                                                                    <option label="Nebraska" value="NE">Nebraska</option>
                                                                    <option label="Nevada" value="NV">Nevada</option>
                                                                    <option label="New Hampshire" value="NH">New Hampshire</option>
                                                                    <option label="New Jersey" value="NJ">New Jersey</option>
                                                                    <option label="New Mexico" value="NM">New Mexico</option>
                                                                    <option label="New York" value="NY">New York</option>
                                                                    <option label="North Carolina" value="NC">North Carolina</option>
                                                                    <option label="North Dakota" value="ND">North Dakota</option>
                                                                    <option label="Ohio" value="OH">Ohio</option>
                                                                    <option label="Oklahoma" value="OK">Oklahoma</option>
                                                                    <option label="Oregon" value="OR">Oregon</option>
                                                                    <option label="Pennsylvania" value="PA">Pennsylvania</option>
                                                                    <option label="Puerto Rico" value="PR">Puerto Rico</option>
                                                                    <option label="Rhode Island" value="RI">Rhode Island</option>
                                                                    <option label="South Carolina" value="SC">South Carolina</option>
                                                                    <option label="South Dakota" value="SD">South Dakota</option>
                                                                    <option label="Tennessee" value="TN">Tennessee</option>
                                                                    <option label="Texas" value="TX">Texas</option>
                                                                    <option label="Utah" value="UT">Utah</option>
                                                                    <option label="Vermont" value="VT">Vermont</option>
                                                                    <option label="Virginia" value="VA">Virginia</option>
                                                                    <option label="Washington" value="WA">Washington</option>
                                                                    <option label="West Virginia" value="WV">West Virginia</option>
                                                                    <option label="Wisconsin" value="WI">Wisconsin</option>
                                                                    <option label="Wyoming" value="WY">Wyoming</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style="display:none;;" id="form_row_billing_state_other">
                                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_billing_state_other" class="XMLabel" for="billing_state_other" style="">Province / Region</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="20" id="billing_state_other" vtype="text" hint="" placeholder="" vlabel="Province / Region" vrequired="false" class="clInput form-control clInput form-control" style="" type="text" name="billing_state_other" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_home_phone">
                                                            <td valign="top" class="nonmandatory padleft"><label id="form_label_home_phone" class="XMLabel" for="home_phone" style="">Phone</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="home_phone" vtype="text" hint="" placeholder="" vlabel="Phone" vrequired="false" class="clInput form-control clInput form-control" style="" type="text" name="home_phone" value="">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="XMFormGroup" style="margin-bottom:10px;" id="Sectionpaymentmethod">
                                                <div id="SectionpaymentmethodSectionLabel" class="SectionLabel">
                                                    <table width="100%" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>Payment Method</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="SectionBodySectionpaymentmethod" class="XMFormBody">
                                                    <table width="100%" border="0" cellpadding="2" cellspacing="0" style="table-layout:fixed;margin-top:5px;" class="rwd">
                                                        <colgroup>
                                                            <col style="width:160px;">
                                                            <col style="width:auto;text-overflow:ellipsis;">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_card_type">
                                                            <td valign="top" class="padleft"><label id="form_label_card_type" class="XMLabel" for="card_type" style=""><span class="astrix">*</span>Credit Card Type</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><select vrequired="true" groups="" hint="" style="" class="clSelect form-control" multiple_select_size="5" delimiter="^" placeholder="" name="card_type" vlabel="Credit Card Type" vtype="select" allow_multiple="false" id="card_type" default="">
                                                                    <option selected="" style="" label="Select One" value="">Select One</option>
                                                                    <option style="" label="American Express" value="AMEX">American Express</option>
                                                                    <option style="" label="Discover" value="DISCOVER">Discover</option>
                                                                    <option style="" label="Master Card" value="MASTER">Master Card</option>
                                                                    <option style="" label="Visa" value="VISA">Visa</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_card_number">
                                                            <td valign="top" class="padleft"><label id="form_label_card_number" class="XMLabel" for="card_number" style=""><span class="astrix">*</span>Credit Card Number</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="20" id="card_number" vtype="text" hint="" placeholder="" vlabel="Credit Card Number" vrequired="true" class="clInput form-control clInput form-control" style="" autocomplete="off" type="text" name="card_number" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_card_holder">
                                                            <td valign="top" class="padleft"><label id="form_label_card_holder" class="XMLabel" for="card_holder" style=""><span class="astrix">*</span>Card Holder Name</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="card_holder" vtype="text" hint="" placeholder="" vlabel="Card Holder Name" vrequired="true" class="clInput form-control clInput form-control" style="" autocomplete="off" type="text" name="card_holder" value="">
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_exp_month">
                                                            <td valign="top" class="padleft"><label id="form_label_exp_month" class="XMLabel" for="exp_month" style=""><span class="astrix">*</span>Expiration Date</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><select vrequired="true" groups="" hint="" style="" class="clSelect form-control" multiple_select_size="5" delimiter="," placeholder="" name="exp_month" vlabel="Expiration Date" vtype="select" allow_multiple="false" id="exp_month" default="">
                                                                    <option selected="" style="" label="Month" value="">Month</option>
                                                                    <option style="" label="1-January" value="1">1-January</option>
                                                                    <option style="" label="2-February" value="2">2-February</option>
                                                                    <option style="" label="3-March" value="3">3-March</option>
                                                                    <option style="" label="4-April" value="4">4-April</option>
                                                                    <option style="" label="5-May" value="5">5-May</option>
                                                                    <option style="" label="6-June" value="6">6-June</option>
                                                                    <option style="" label="7-July" value="7">7-July</option>
                                                                    <option style="" label="8-August" value="8">8-August</option>
                                                                    <option style="" label="9-September" value="9">9-September</option>
                                                                    <option style="" label="10-October" value="10">10-October</option>
                                                                    <option style="" label="11-November" value="11">11-November</option>
                                                                    <option style="" label="12-December" value="12">12-December</option>
                                                                </select>&nbsp;&nbsp;
                                                                <select name="exp_year" style="width: 100px;" title="YEAR">
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                    <option value="2032">2032</option>
                                                                    <option value="2033">2033</option>
                                                                    <option value="2034">2034</option>
                                                                    <option value="2035">2035
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_card_secure_code">
                                                            <td valign="top" class="padleft"><label id="form_label_card_secure_code" class="XMLabel" for="card_secure_code" style=""><span class="astrix">*</span>Card Security Code</label></td>
                                                            <td valign="top" style="width:90%;word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="5" id="card_secure_code" vtype="text" hint="" placeholder="" vlabel="Card Security Code" vrequired="true" class="clInput form-control clInput form-control" style="width: 50px;" autocomplete="off" type="text" name="card_secure_code" value="">
                                                                <table class="tp">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td> <a href="#" class="tplink"><span class="icon-question large"></span></a>
                                                                            <div class="tooltip-box">
                                                                                <div class="center mbo"><img src="/lib/theme/mts/images/cc-back.png" alt="Back of credit card" width="155" height="103"></div>
                                                                                <div class="mbo">The last three digits at the back of your banking card correspond to your security code.</div>
                                                                                For American Express cards, it is a 4 digit code on the front of the card.
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table><span class="add-note">Last 3 digits on back of the card</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="XMFormGroup" style="margin-bottom:10px;" id="Section">
                                                <div id="SectionBodySection" class="XMFormBody">
                                                    <table width="100%" border="0" cellpadding="2" cellspacing="0" style="table-layout:fixed;margin-top:5px;" class="rwd">
                                                        <colgroup>
                                                            <col style="width:160px;">
                                                            <col style="width:auto;text-overflow:ellipsis;">
                                                        </colgroup>
                                                        <tbody>
                                                        <tr class="XMFormRow XMFormRowChild" style=";" id="form_row_CheckoutFormEL37513EBC2046AB65EF511C5556471473">
                                                            <td colspan="2" valign="top" class="padleft">
                                                                <div style="word-wrap:break-word;;">
                                                                    <div class="mbo center">
                                                                        <div style="background-color: #f6f6f6;border: 1px solid #e2e2e1; padding: 10px 20px;border-radius:5px;box-sizing: border-box;">
                                                                            <div style="font-size: 1.2em;margin-bottom: 10px;">This product is a <strong>PDF digital download</strong>.</div>
                                                                            <div>Be sure that you have an application to open this file type.</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart-foot clearfix">
                                                                        <div class="total-block horizontal">
                                                                            <div class="total-holder">
                                                                                <div class="total-basket">
                                                                                    <div class="text">1 item</div>
                                                                                </div>
                                                                                <div class="total-frame">
                                                                                    <div class="total-box">
                                                                                        <span class="title">Total:</span>
                                                                                        <span class="cost">USD $2.75</span>
                                                                                    </div>
                                                                                    <input type="submit" id="btnaction" name="btnaction" class="button btn-standout tall mto10" value="Complete Transaction">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="ValidationMessagesCheckoutForm" class="XMValidationMessage"></div>
                                            <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-42110753-C083-3F59-FC421F8C37B292B9"> <input type="hidden" name="xm_user_token" value="1506178|BF247777-32E5-49B2-91E5-720D60761AD1">
                                        </form>
                                        <script type="text/javascript">
                                            if (window.hasOwnProperty("xmFormObj")) xmFormObj["CheckoutForm"] = {
                                                "email_confirm": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Confirm Email",
                                                    "type": "email"
                                                },
                                                "billing_address2": {
                                                    "field_options": {},
                                                    "required": false,
                                                    "label": "Address 2",
                                                    "type": "text"
                                                },
                                                "billing_country": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Country",
                                                    "type": "select"
                                                },
                                                "billing_address1": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Address 1",
                                                    "type": "text"
                                                },
                                                "billing_state_other": {
                                                    "field_options": {},
                                                    "required": false,
                                                    "label": "Province / Region",
                                                    "type": "text"
                                                },
                                                "card_type": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Credit Card Type",
                                                    "type": "select"
                                                },
                                                "email": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Email",
                                                    "type": "email"
                                                },
                                                "last_name": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Last Name",
                                                    "type": "text"
                                                },
                                                "first_name": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "First Name",
                                                    "type": "text"
                                                },
                                                "billing_city": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "City",
                                                    "type": "text"
                                                },
                                                "card_number": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Credit Card Number",
                                                    "type": "text"
                                                },
                                                "main_workgroup": {
                                                    "field_options": {},
                                                    "required": false,
                                                    "label": "Organization",
                                                    "type": "text"
                                                },
                                                "exp_month": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Expiration Date",
                                                    "type": "select"
                                                },
                                                "CheckoutFormEL37513EBC2046AB65EF511C5556471473": {
                                                    "field_options": {},
                                                    "required": false,
                                                    "label": "",
                                                    "type": "custom"
                                                },
                                                "billing_zip": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Zip",
                                                    "type": "text"
                                                },
                                                "home_phone": {
                                                    "field_options": {},
                                                    "required": false,
                                                    "label": "Phone",
                                                    "type": "text"
                                                },
                                                "card_secure_code": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Card Security Code",
                                                    "type": "text"
                                                },
                                                "billing_state": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "State",
                                                    "type": "states"
                                                },
                                                "card_holder": {
                                                    "field_options": {},
                                                    "required": true,
                                                    "label": "Card Holder Name",
                                                    "type": "text"
                                                }
                                            };

                                            //MR: 9/5/2022 - loop over all fields to set fieldOptions


                                            if (typeof jQuery != 'undefined') {
                                                $(function() {
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
                                                    $('form#CheckoutForm').on("change", ":input", function() {
                                                        if (!xmUpdateSessionPing) return;
                                                        xmUpdateSessionPing = false;
                                                        $.getJSON("/modules/portal/session_ping.cfm?actionxm=Update");
                                                        setTimeout(function() {
                                                            xmUpdateSessionPing = true;
                                                        }, 60000);
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
                                    <div id="tab2" class="tabbody" style="display: none;">
                                        <p>MyTeachingStation.com gladly accepts authorized purchase orders from U.S. Schools and Institutions.</p>
                                        <p>The order must meet the minimum purchase amount of $15.</p>
                                    </div>
                                </div>
                                <div class="mto"><i class="icon-arrow-left"></i><a href="/cart">Edit Cart</a></div>
                            </div>
                        </div>
                        <div class="col20" id="checkout-sidebar">
                            <div class="cart-head">
                                <div class="text">1 item &nbsp; (<a href="/cart" class="small white">Edit Cart</a>)</div>
                            </div>
                            <div class="cart-amounts">
                                <div class="sb-cart-item cart-detail">
                                    <h2 style="margin-bottom:0">Alphabet Color-by-Letter Activity Set</h2>
                                    <span class="semi-small"></span>
                                    <div class="price semi-small"><span class="semi-small">$2.75</span></div>
                                </div>
                                <div class="item">
                                    <table class="cart-amounts">
                                        <tbody>
                                        <tr>
                                            <td class="bold">Total</td>
                                            <td class="bold total amt">$2.75</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="center mto"><img src="/lib/theme/mts/images/secure-shopping.png" alt="100% Secure Shopping" title="SSL Protected Transactions"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
