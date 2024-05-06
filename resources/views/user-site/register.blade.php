@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <div class="container"><div class="content-holder">
                <script type="text/javascript">
                    checkBeforeLeaving = false;
                </script>
                <style>
                    .auth-container {background-color:#fff; margin: 0 auto; max-width: 420px;border: 1px solid #dadada}
                    .auth-block {max-width: 320px;padding-bottom:10px;}
                    .signup span.normal {font-size:14px;max-width:250px;margin:0 auto}
                    .pos-cell {padding: 0 10px 5px 0;}
                    .rgt {padding-right:0}
                    .signup span.subheading  {font-size:14px;margin-bottom:5px;}
                    .invalidFieldHeader {text-align:left;font-size:13px;}
                    .auth-foot {background-color:#f1f1f1; border-radius:4px;padding: 7px 15px;}
                    h1.hpage2 {padding-top:20px;}
                </style>
                <div>&nbsp;</div>
                <div class="auth-container">
                    <div style="margin: 0 20px">
                        <h1 class="hpage2 signup" style="font-size: 30px;">Create your FREE account<span class="normal">Join MTS for access to free worksheets and other resources.</span><span class="subheading">Be a part of a growing community <span> — <a href="/membership-benefits" class="sitecolor">See why</a></span></span></h1>
                    </div>
                    <div class="auth-block">
                        <div class="social-signup-options">
                            <a class="fb-signup">Sign up using Facebook</a>
                            <div class="social-signin-div"><div><span>OR</span></div></div>
                        </div>
                        <form id="NewUserForm" action="/user/register" onsubmit="return frmValidCheck(this);" method="post">
                            <div id="btRequiredSection">
                                <div class="fld-options-e"><input vtype="text" type="text" name="your_name" id="your_name"></div>
                                <div class="fld-options-e"><input vtype="text" type="text" name="your_email" id="your_email"></div>
                            </div>
                            <label id="form_label_person_name" class="XMLabel" for="person_name" style=""><span class="astrix">*</span>First Name</label>
                            <div><input maxlength="30" id="person_name" vtype="person_name" vlabel="First Name" vrequired="true" class="clInput" style="width:95%" placeholder="First Name" type="text" name="first_name"></div>
                            <label id="form_label_person_name" class="XMLabel" for="person_name" style=""><span class="astrix">*</span>Last Name</label>
                            <div><input maxlength="30" id="person_name" vtype="person_name" vlabel="Last Name" vrequired="true" class="clInput" style="width:95%" placeholder="Last Name" type="text" name="last_name"></div>
                            <label id="form_label_person_name" class="XMLabel" for="person_name" style=""><span class="astrix">*</span>Public Name</label>
                            <div><input maxlength="30" id="person_name" vtype="person_name" vlabel="Public Name" vrequired="true" class="clInput" style="width:95%" placeholder="Public Name" type="text" name="public_name"></div>
                            <label id="form_label_email" class="XMLabel" for="email" style=""><span class="astrix">*</span>E-mail Address</label>
                            <div><input maxlength="50" id="email" vtype="email" vlabel="E-mail Address" vrequired="true" class="clInput" style="width:95%" type="email" name="email"></div>
                            <label id="form_label_password" class="XMLabel" for="password" style=""><span class="astrix">*</span>Password</label>
                            <div><input maxlength="30" id="password" vtype="password" vlabel="Password" vrequired="true" class="clInput" style="width:95%" type="password" name="password"></div>
                            <label id="form_label_position" class="XMLabel" for="position" style=""><span class="astrix">*</span>Your Position</label>
                            <table cellpadding="0" cellspacing="0" border="0" style="margin-top:10px;">
                                <tbody><tr>
                                    <td nowrap="nowrap" class="pos-cell"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_1" value="Teacher" class="clRadioCheck"> Teacher</td>
                                    <td nowrap="nowrap" class="pos-cell"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_4" value="School Administrator" class="clRadioCheck"> School Administrator</td>
                                    <td nowrap="nowrap" class="pos-cell rgt"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_5" value="Tutor" class="clRadioCheck"> Tutor</td>
                                </tr>
                                <tr>
                                    <td nowrap="nowrap" class="pos-cell"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_3" value="Parent" class="clRadioCheck">Parent</td>
                                    <td nowrap="nowrap" class="pos-cell"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_2" value="Homeschooler" class="clRadioCheck">Homeschooler</td>
                                    <td nowrap="nowrap" class="pos-cell rgt"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_6" value="Child Care" class="clRadioCheck">Child Care</td>
                                </tr>
                                <tr>
                                    <td class="pos-cell"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_7" value="Other" class="clRadioCheck">Other</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody></table>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="ValidationMessagesNewUserForm" class="XMValidationMessage mbo mto"></div>
                            <input type="submit" name="registerbtn" id="registerbtn" value="Get Started" class="full-width">
                            <div class="clearfix"></div>
                        </form>
                        <div class="fld-options center"><small>Creating an account means you agree to My Teaching Station's <a href="/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="/privacy-statement" target="_blank">Privacy Statement</a></small>.</div>
                        <div class="auth-foot center">
                            <strong>Already have an account? </strong> <a href="/user/login">Sign in</a>.
                        </div>
                    </div>
                    <div>&nbsp;</div>
                </div>
                <div class="clearfix"></div>
            </div></div>
    </div>
@endsection
