@extends('user-site.main')
@section('content-layout')
<div id="content-layout">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/theme/mts/js/jquery.main.min.js?v=111516"></script>
    <div class="container">
        <h1 class="hpage">@lang('app.edit_account')</h1>
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
                    <script defer="" type="text/javascript" src="https://svc.webspellchecker.net/spellcheck31/wscbundle/wscbundle.js"></script> <link rel="stylesheet" href="/lib/tag/xm/inc/form/form.css?ver=20240425-C" type="text/css"> <form allow_multiple_submissions="false" print_mode="false" onsubmit="return frmValidCheck(this);" save_toggle="true" persist="false" name="UserPreferences" plugins="mask,spell" action="/my-account/edit/submit" show_hints="true" method="post" id="UserPreferences" novalidate="">
                        <link rel="stylesheet" type="text/css" href="/lib/tag/xm/inc/form/plain.css">
                        <input onkeyup="" lang="en" id="actionxm" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="actionxm" value="SaveProfile"> <input onkeyup="" lang="en" id="pathway" vtype="hidden" hint="" placeholder="" vlabel="" vrequired="false" class="" style="" type="hidden" name="pathway" value="/my-account">
                        <div class="XMFormGroup" style="margin-bottom:10px;" id="Sectionmodifyprofile">
                            <div id="SectionmodifyprofileSectionLabel" class="SectionLabel">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td>@lang('app.my_profile')</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div id="SectionBodySectionmodifyprofile" class="XMFormBody">
                                <table border="0" class="rwdmulti" cellpadding="0" vspace="0" cellspacing="0" width="100%" style="margin-top:5px;">
                                    <tbody><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_first_name">
                                                    <td valign="top" class="padleft"><label id="form_label_first_name" class="XMLabel" for="first_name" style=""><span class="astrix">*</span>@lang('app.first_name')</label></td>
                                                    <td valign="top" style="word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="first_name" vtype="text" hint="" placeholder="" vlabel="First Name" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="first_name" value="{{ old('first_name', $data->first_name ?? '') }}">
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_last_name">
                                                    <td valign="top" class="padleft"><label id="form_label_last_name" class="XMLabel" for="last_name" style=""><span class="astrix">*</span>@lang('app.last_name')</label></td>
                                                    <td valign="top" style="word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="30" id="last_name" vtype="text" hint="" placeholder="" vlabel="Last Name" vrequired="true" class="clInput form-control clInput form-control" style="" type="text" name="last_name" value="{{ old('last_name', $data->last_name ?? '') }}">
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_email">
                                                    <td valign="top" class="padleft"><label id="form_label_email" class="XMLabel" for="email" style=""><span class="astrix">*</span>E-mail</label></td>
                                                    <td valign="top" style="word-wrap:break-word;;"><input id="email" mask="" maxlength="50" vtype="email" hint="" placeholder="name@domain.com" vlabel="E-mail Address" vrequired="true" class="clInput form-control xm-input-email" data-inputtype="email" style="background: #f6f6f6" type="email" name="email" value="{{ old('email', $data->email ?? '') }}" disabled>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_nickname">
                                                    <td valign="top" class="nonmandatory padleft"><label id="form_label_nickname" class="XMLabel" for="nickname" style="">@lang('app.public_name')<div data-tooltip="Your public name will appear on product reviews." class="xmTip" style="display:inline-block;"><span class="icon-question"></span></div></label></td>
                                                    <td valign="top" style="word-wrap:break-word;;"><input onkeyup="" lang="en" maxlength="20" id="nickname" vtype="text" hint="" placeholder="" vlabel="Public Name" vrequired="false" class="clInput form-control tpsmt" style="" type="text" name="public_name" value="{{ old('public_name', $data->public_name ?? '') }}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:160px;">
                                                    <col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_country">
                                                    <td valign="top" class="nonmandatory padleft"><label id="form_label_country" class="XMLabel" for="country" style="">@lang('app.location')</label></td>
                                                    <td valign="top" style="word-wrap:break-word;;"><select vrequired="false" onchange="toggle('form_row_state',this.value=='USA');" groups="" hint="" style="" class="clSelect form-control" multiple_select_size="5" delimiter="^" placeholder="" name="location" vlabel="Location" vtype="select" allow_multiple="false" id="country" default="USA" data-default="USA"><option style="" label="Select Country" value="">Select Country</option><option selected="" style="" label="USA" value="USA">USA</option><option style="" label="US Territories" value="US Territories">US Territories</option><option style="" label="Canada" value="Canada">Canada</option><option style="" label="Afghanistan" value="Afghanistan">Afghanistan</option><option style="" label="Albania" value="Albania">Albania</option><option style="" label="Algeria" value="Algeria">Algeria</option><option style="" label="American Samoa" value="American Samoa">American Samoa</option><option style="" label="Andorra" value="Andorra">Andorra</option><option style="" label="Angola" value="Angola">Angola</option><option style="" label="Anguilla" value="Anguilla">Anguilla</option><option style="" label="Antartica" value="Antartica">Antartica</option><option style="" label="Antigua and Barbuda" value="Antigua and Barbuda">Antigua and Barbuda</option><option style="" label="Argentina" value="Argentina">Argentina</option><option style="" label="Armenia" value="Armenia">Armenia</option><option style="" label="Aruba" value="Aruba">Aruba</option><option style="" label="Australia" value="Australia">Australia</option><option style="" label="Austria" value="Austria">Austria</option><option style="" label="Azerbaijan" value="Azerbaijan">Azerbaijan</option><option style="" label="Bahamas" value="Bahamas">Bahamas</option><option style="" label="Bahrain" value="Bahrain">Bahrain</option><option style="" label="Bangladesh" value="Bangladesh">Bangladesh</option><option style="" label="Barbados" value="Barbados">Barbados</option><option style="" label="Belarus" value="Belarus">Belarus</option><option style="" label="Belgium" value="Belgium">Belgium</option><option style="" label="Belize" value="Belize">Belize</option><option style="" label="Benin" value="Benin">Benin</option><option style="" label="Bermuda" value="Bermuda">Bermuda</option><option style="" label="Bhutan" value="Bhutan">Bhutan</option><option style="" label="Bolivia" value="Bolivia">Bolivia</option><option style="" label="Bosnia-Herzegovina" value="Bosnia-Herzegovina">Bosnia-Herzegovina</option><option style="" label="Botswana" value="Botswana">Botswana</option><option style="" label="Bouvet Island" value="Bouvet Island">Bouvet Island</option><option style="" label="Brazil" value="Brazil">Brazil</option><option style="" label="British Indian Ocean Territory" value="British Indian Ocean Territory">British Indian Ocean Territory</option><option style="" label="Brunei Darussalam" value="Brunei Darussalam">Brunei Darussalam</option><option style="" label="Bulgaria" value="Bulgaria">Bulgaria</option><option style="" label="Burkina Faso" value="Burkina Faso">Burkina Faso</option><option style="" label="Burundi" value="Burundi">Burundi</option><option style="" label="Cambodia" value="Cambodia">Cambodia</option><option style="" label="Cameroon" value="Cameroon">Cameroon</option><option style="" label="Cape Verde" value="Cape Verde">Cape Verde</option><option style="" label="Cayman Islands" value="Cayman Islands">Cayman Islands</option><option style="" label="Central African Republic" value="Central African Republic">Central African Republic</option><option style="" label="Chad" value="Chad">Chad</option><option style="" label="Chile" value="Chile">Chile</option><option style="" label="China" value="China">China</option><option style="" label="Christmas Island" value="Christmas Island">Christmas Island</option><option style="" label="Cocos (Keeling) Islands" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option style="" label="Colombia" value="Colombia">Colombia</option><option style="" label="Comoros" value="Comoros">Comoros</option><option style="" label="Congo" value="Congo">Congo</option><option style="" label="Cook Islands" value="Cook Islands">Cook Islands</option><option style="" label="Costa Rica" value="Costa Rica">Costa Rica</option><option style="" label="Cote D'Ivoire" value="Cote D'Ivoire">Cote D'Ivoire</option><option style="" label="Croatia" value="Croatia">Croatia</option><option style="" label="Cuba" value="Cuba">Cuba</option><option style="" label="Cyprus" value="Cyprus">Cyprus</option><option style="" label="Czech Republic" value="Czech Republic">Czech Republic</option><option style="" label="Denmark" value="Denmark">Denmark</option><option style="" label="Djibouti" value="Djibouti">Djibouti</option><option style="" label="Dominica" value="Dominica">Dominica</option><option style="" label="Dominican Republic" value="Dominican Republic">Dominican Republic</option><option style="" label="East Timor" value="East Timor">East Timor</option><option style="" label="Ecuador" value="Ecuador">Ecuador</option><option style="" label="Egypt" value="Egypt">Egypt</option><option style="" label="El Salvador" value="El Salvador">El Salvador</option><option style="" label="Equatorial Guinea" value="Equatorial Guinea">Equatorial Guinea</option><option style="" label="Estonia" value="Estonia">Estonia</option><option style="" label="Ethiopia" value="Ethiopia">Ethiopia</option><option style="" label="Faeroe Islands" value="Faeroe Islands">Faeroe Islands</option><option style="" label="Falkland Islands (Malvinas)" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option style="" label="Fiji" value="Fiji">Fiji</option><option style="" label="Finland" value="Finland">Finland</option><option style="" label="France" value="France">France</option><option style="" label="French Guiana" value="French Guiana">French Guiana</option><option style="" label="French Polynesia" value="French Polynesia">French Polynesia</option><option style="" label="French Southern Territories" value="French Southern Territories">French Southern Territories</option><option style="" label="Gabon" value="Gabon">Gabon</option><option style="" label="Gambia" value="Gambia">Gambia</option><option style="" label="Georgia" value="Georgia">Georgia</option><option style="" label="Germany" value="Germany">Germany</option><option style="" label="Ghana" value="Ghana">Ghana</option><option style="" label="Gibraltar" value="Gibraltar">Gibraltar</option><option style="" label="Greece" value="Greece">Greece</option><option style="" label="Greenland" value="Greenland">Greenland</option><option style="" label="Grenada" value="Grenada">Grenada</option><option style="" label="Guadeloupe" value="Guadeloupe">Guadeloupe</option><option style="" label="Guam" value="Guam">Guam</option><option style="" label="Guatemala" value="Guatemala">Guatemala</option><option style="" label="Guernsey. C.I." value="Guernsey. C.I.">Guernsey. C.I.</option><option style="" label="Guinea" value="Guinea">Guinea</option><option style="" label="Guinea-Bissau" value="Guinea-Bissau">Guinea-Bissau</option><option style="" label="Guyana" value="Guyana">Guyana</option><option style="" label="Haiti" value="Haiti">Haiti</option><option style="" label="Heard and McDonald Islands" value="Heard and McDonald Islands">Heard and McDonald Islands</option><option style="" label="Honduras" value="Honduras">Honduras</option><option style="" label="Hong Kong" value="Hong Kong">Hong Kong</option><option style="" label="Hungary" value="Hungary">Hungary</option><option style="" label="Iceland" value="Iceland">Iceland</option><option style="" label="India" value="India">India</option><option style="" label="Indonesia" value="Indonesia">Indonesia</option><option style="" label="Iran (Islamic Republic of)" value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option style="" label="Iraq" value="Iraq">Iraq</option><option style="" label="Ireland" value="Ireland">Ireland</option><option style="" label="Isle of Man" value="Isle of Man">Isle of Man</option><option style="" label="Israel" value="Israel">Israel</option><option style="" label="Italy" value="Italy">Italy</option><option style="" label="Jamaica" value="Jamaica">Jamaica</option><option style="" label="Japan" value="Japan">Japan</option><option style="" label="Jersey. C.I." value="Jersey. C.I.">Jersey. C.I.</option><option style="" label="Jordan" value="Jordan">Jordan</option><option style="" label="Kazakhstan" value="Kazakhstan">Kazakhstan</option><option style="" label="Kenya" value="Kenya">Kenya</option><option style="" label="Kiribati" value="Kiribati">Kiribati</option><option style="" label="North Korea" value="North Korea">North Korea</option><option style="" label="South Korea" value="South Korea">South Korea</option><option style="" label="Kuwait" value="Kuwait">Kuwait</option><option style="" label="Kyrgyzstan" value="Kyrgyzstan">Kyrgyzstan</option><option style="" label="Lao Peoples Democratic Republi" value="Lao Peoples Democratic Republi">Lao Peoples Democratic Republi</option><option style="" label="Latvia" value="Latvia">Latvia</option><option style="" label="Lebanon" value="Lebanon">Lebanon</option><option style="" label="Lesotho" value="Lesotho">Lesotho</option><option style="" label="Liberia" value="Liberia">Liberia</option><option style="" label="Libyan Arab Jamahiriya" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option style="" label="Liechtenstein" value="Liechtenstein">Liechtenstein</option><option style="" label="Lithuania" value="Lithuania">Lithuania</option><option style="" label="Luxembourg" value="Luxembourg">Luxembourg</option><option style="" label="Macau" value="Macau">Macau</option><option style="" label="Macedonian" value="Macedonian">Macedonian</option><option style="" label="Madagascar" value="Madagascar">Madagascar</option><option style="" label="Malawi" value="Malawi">Malawi</option><option style="" label="Malaysia" value="Malaysia">Malaysia</option><option style="" label="Maldives" value="Maldives">Maldives</option><option style="" label="Mali" value="Mali">Mali</option><option style="" label="Malta" value="Malta">Malta</option><option style="" label="Marshall Islands" value="Marshall Islands">Marshall Islands</option><option style="" label="Martinique" value="Martinique">Martinique</option><option style="" label="Mauritania" value="Mauritania">Mauritania</option><option style="" label="Mauritius" value="Mauritius">Mauritius</option><option style="" label="Mexico" value="Mexico">Mexico</option><option style="" label="Micronesia. Fed. States of" value="Micronesia. Fed. States of">Micronesia. Fed. States of</option><option style="" label="Moldova. Republic of" value="Moldova. Republic of">Moldova. Republic of</option><option style="" label="Monaco" value="Monaco">Monaco</option><option style="" label="Mongolia" value="Mongolia">Mongolia</option><option style="" label="Montserrat" value="Montserrat">Montserrat</option><option style="" label="Morocco" value="Morocco">Morocco</option><option style="" label="Mozambique" value="Mozambique">Mozambique</option><option style="" label="Myanmar" value="Myanmar">Myanmar</option><option style="" label="Namibia" value="Namibia">Namibia</option><option style="" label="Nauru" value="Nauru">Nauru</option><option style="" label="Nepal" value="Nepal">Nepal</option><option style="" label="Netherland Antilles" value="Netherland Antilles">Netherland Antilles</option><option style="" label="Netherlands" value="Netherlands">Netherlands</option><option style="" label="Neutral Zone (Saudi/Iraq)" value="Neutral Zone (Saudi/Iraq)">Neutral Zone (Saudi/Iraq)</option><option style="" label="New Caledonia" value="New Caledonia">New Caledonia</option><option style="" label="New Zealand" value="New Zealand">New Zealand</option><option style="" label="Nicaragua" value="Nicaragua">Nicaragua</option><option style="" label="Niger" value="Niger">Niger</option><option style="" label="Nigeria" value="Nigeria">Nigeria</option><option style="" label="Niue" value="Niue">Niue</option><option style="" label="Norfolk Island" value="Norfolk Island">Norfolk Island</option><option style="" label="Northern Mariana Islands" value="Northern Mariana Islands">Northern Mariana Islands</option><option style="" label="Norway" value="Norway">Norway</option><option style="" label="Oman" value="Oman">Oman</option><option style="" label="Other" value="Other">Other</option><option style="" label="Pakistan" value="Pakistan">Pakistan</option><option style="" label="Palau" value="Palau">Palau</option><option style="" label="Panama" value="Panama">Panama</option><option style="" label="Panama Canal Zone" value="Panama Canal Zone">Panama Canal Zone</option><option style="" label="Papua New Guinea" value="Papua New Guinea">Papua New Guinea</option><option style="" label="Paraguay" value="Paraguay">Paraguay</option><option style="" label="Peru" value="Peru">Peru</option><option style="" label="Philippines" value="Philippines">Philippines</option><option style="" label="Pitcairn" value="Pitcairn">Pitcairn</option><option style="" label="Poland" value="Poland">Poland</option><option style="" label="Portugal" value="Portugal">Portugal</option><option style="" label="Puerto Rico" value="Puerto Rico">Puerto Rico</option><option style="" label="Qatar" value="Qatar">Qatar</option><option style="" label="Reunion" value="Reunion">Reunion</option><option style="" label="Romania" value="Romania">Romania</option><option style="" label="Russian Federation" value="Russian Federation">Russian Federation</option><option style="" label="Rwanda" value="Rwanda">Rwanda</option><option style="" label="Saint Kitts and Nevis" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option style="" label="Saint Lucia" value="Saint Lucia">Saint Lucia</option><option style="" label="Saipan" value="Saipan">Saipan</option><option style="" label="Samoa" value="Samoa">Samoa</option><option style="" label="San Marino" value="San Marino">San Marino</option><option style="" label="Sao Tome and Principe" value="Sao Tome and Principe">Sao Tome and Principe</option><option style="" label="Saudi Arabia" value="Saudi Arabia">Saudi Arabia</option><option style="" label="Senegal" value="Senegal">Senegal</option><option style="" label="Seychelles" value="Seychelles">Seychelles</option><option style="" label="Sierra Leone" value="Sierra Leone">Sierra Leone</option><option style="" label="Singapore" value="Singapore">Singapore</option><option style="" label="Slovakia" value="Slovakia">Slovakia</option><option style="" label="Slovenia" value="Slovenia">Slovenia</option><option style="" label="Solomon Islands" value="Solomon Islands">Solomon Islands</option><option style="" label="Somalia" value="Somalia">Somalia</option><option style="" label="South Africa" value="South Africa">South Africa</option><option style="" label="Spain" value="Spain">Spain</option><option style="" label="Sri Lanka" value="Sri Lanka">Sri Lanka</option><option style="" label="St. Helena" value="St. Helena">St. Helena</option><option style="" label="St. Pierre and Miquelon" value="St. Pierre and Miquelon">St. Pierre and Miquelon</option><option style="" label="St. Vincent and the Grenadines" value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option><option style="" label="Sudan" value="Sudan">Sudan</option><option style="" label="Suriname" value="Suriname">Suriname</option><option style="" label="Svalbard and Jan Mayen Islands" value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option style="" label="Swaziland" value="Swaziland">Swaziland</option><option style="" label="Sweden" value="Sweden">Sweden</option><option style="" label="Switzerland" value="Switzerland">Switzerland</option><option style="" label="Syrian Arab Republic" value="Syrian Arab Republic">Syrian Arab Republic</option><option style="" label="Taiwan" value="Taiwan">Taiwan</option><option style="" label="Tajikistan" value="Tajikistan">Tajikistan</option><option style="" label="Tanzania. United Republic of" value="Tanzania. United Republic of">Tanzania. United Republic of</option><option style="" label="Thailand" value="Thailand">Thailand</option><option style="" label="Togo" value="Togo">Togo</option><option style="" label="Tokelau" value="Tokelau">Tokelau</option><option style="" label="Tonga" value="Tonga">Tonga</option><option style="" label="Trinidad and Tobago" value="Trinidad and Tobago">Trinidad and Tobago</option><option style="" label="Tunisia" value="Tunisia">Tunisia</option><option style="" label="Turkey" value="Turkey">Turkey</option><option style="" label="Turkmenistan" value="Turkmenistan">Turkmenistan</option><option style="" label="Turks and Caicos Islands" value="Turks and Caicos Islands">Turks and Caicos Islands</option><option style="" label="Tuvalu" value="Tuvalu">Tuvalu</option><option style="" label="United Arab Emirates" value="United Arab Emirates">United Arab Emirates</option><option style="" label="U.S.Minor Outlying Islands" value="U.S.Minor Outlying Islands">U.S.Minor Outlying Islands</option><option style="" label="Uganda" value="Uganda">Uganda</option><option style="" label="Ukraine" value="Ukraine">Ukraine</option><option style="" label="United Kingdom" value="United Kingdom">United Kingdom</option><option style="" label="Uruguay" value="Uruguay">Uruguay</option><option style="" label="Uzbekistan" value="Uzbekistan">Uzbekistan</option><option style="" label="Vanuatu" value="Vanuatu">Vanuatu</option><option style="" label="Vatican City State" value="Vatican City State">Vatican City State</option><option style="" label="Venezuela" value="Venezuela">Venezuela</option><option style="" label="Vietnam" value="Vietnam">Vietnam</option><option style="" label="Virgin Islands (British)" value="Virgin Islands (British)">Virgin Islands (British)</option><option style="" label="Virgin Islands. U.S." value="Virgin Islands. U.S.">Virgin Islands. U.S.</option><option style="" label="Wallis and Futuna Islands" value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option style="" label="Western Sahara" value="Western Sahara">Western Sahara</option><option style="" label="Yemen. Republic of" value="Yemen. Republic of">Yemen. Republic of</option><option style="" label="Yugoslavia" value="Yugoslavia">Yugoslavia</option><option style="" label="Zaire" value="Zaire">Zaire</option><option style="" label="Zambia" value="Zambia">Zambia</option><option style="" label="Zimbabwe" value="Zimbabwe">Zimbabwe</option></select>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="2" style="width:100%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_position">
                                                    <td valign="top" class="padleft">
                                                        <label id="form_label_position" class="XMLabel" for="position" style="">@lang('app.im_a')</label>
                                                        <div style="word-wrap:break-word;;">
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_1" value="Teacher" class="clRadioCheck" @if(in_array('Teacher', $data->role)) checked @endif><label>@lang('app.Teacher')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_2" value="Homeschooler" class="clRadioCheck" @if(in_array('Homeschooler', $data->role)) checked @endif><label>@lang('app.Homeschooler')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_3" value="Parent" class="clRadioCheck" @if(in_array('Parent', $data->role)) checked @endif><label>@lang('app.Parent')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_4" value="School Administrator" class="clRadioCheck" @if(in_array('School Administrator', $data->role)) checked @endif><label>@lang('app.School Administrator')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_5" value="Tutor" class="clRadioCheck" @if(in_array('Tutor', $data->role)) checked @endif><label>@lang('app.Tutor')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_6" value="Child Care" class="clRadioCheck" @if(in_array('Child Care', $data->role)) checked @endif><label>@lang('app.Child Care')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Your%20Position" vrequired="false" type="checkbox" name="role[]" id="position_7" value="Other" class="clRadioCheck" @if(in_array('Other', $data->role)) checked @endif><label>@lang('app.Other')</label></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="2" style="width:100%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_subject">
                                                    <td valign="top" class="padleft">
                                                        <label id="form_label_subject" class="XMLabel" for="subject" style="">@lang('app.interest_in')</label>
                                                        <div style="word-wrap:break-word;;">
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Subject" vrequired="false" type="checkbox" name="subject_prefer[]" id="subject_1" value="Maths" class="clRadioCheck" @if(in_array('Maths', $data->subject_prefer)) checked @endif><label>@lang('app.Maths')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Subject" vrequired="false" type="checkbox" name="subject_prefer[]" id="subject_2" value="Arts &amp; Colors" class="clRadioCheck" @if(in_array('Arts & Colors', $data->subject_prefer)) checked @endif><label>@lang('app.Art & Coloring')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Subject" vrequired="false" type="checkbox" name="subject_prefer[]" id="subject_3" value="Writing" class="clRadioCheck" @if(in_array('Writing', $data->subject_prefer)) checked @endif><label>@lang('app.Writing')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Subject" vrequired="false" type="checkbox" name="subject_prefer[]" id="subject_4" value="Story" class="clRadioCheck" @if(in_array('Story', $data->subject_prefer)) checked @endif><label>@lang('app.Story')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Subject" vrequired="false" type="checkbox" name="subject_prefer[]" id="subject_4" value="Logic" class="clRadioCheck" @if(in_array('Logic', $data->subject_prefer)) checked @endif><label>@lang('app.Logic')</label></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_grade">
                                                    <td valign="top" class="padleft">
                                                        <label id="form_label_grade" class="XMLabel" for="grade" style="">@lang('app.i_teach')</label>
                                                        <div style="word-wrap:break-word;;">
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Grade" vrequired="false" type="checkbox" name="grade_teacher[]" id="grade_1" value="Preschool" class="clRadioCheck" @if(in_array('Preschool', $data->grade_teacher)) checked @endif><label>@lang('app.Preschool')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Grade" vrequired="false" type="checkbox" name="grade_teacher[]" id="grade_2" value="Kindergarten" class="clRadioCheck" @if(in_array('Kindergarten', $data->grade_teacher)) checked @endif><label>@lang('app.Kindergarten')</label></div>
                                                            <div class="fld-options"><input vtype="checkbox" vlabel="Grade" vrequired="false" type="checkbox" name="grade_teacher[]" id="grade_3" value="1st Grade and Above" class="clRadioCheck" @if(in_array('1st Grade and Above', $data->grade_teacher)) checked @endif><label>@lang('app.1st Grade and Above')</label></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_color_preference">
                                                    <td valign="top" class="padleft">
                                                        <label id="form_label_color_preference" class="XMLabel" for="color_preference" style="">@lang('app.color_prefer')</label>
                                                        <div style="word-wrap:break-word;;"><select vrequired="false" groups="" hint="" style="" class="clSelect form-control" multiple_select_size="5" delimiter="^" placeholder="" name="color_prefer" vlabel="Worksheet color preference" vtype="select" allow_multiple="false" id="color_preference" default="Black and White" data-default="Black and White"><option style="" label=" " value=""> </option><option selected="" style="" label="Black and White" value="Black and White">Black and White</option><option style="" label="In Color" value="In Color">In Color</option></select></div>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr><tr>
                                        <td class="XMFormRow XMFormRowChild" valign="top" colspan="1" style="width:50.00%;">
                                            <table width="100%" border="0" class="rwd" cellpadding="2" cellspacing="0" style="table-layout:fixed">
                                                <colgroup><col style="width:auto;text-overflow:ellipsis;">
                                                </colgroup><tbody><tr style=";" id="form_row_gender">
                                                    <td valign="top" class="padleft">
                                                        <label id="form_label_gender" class="XMLabel" for="gender" style="">@lang('app.gender')</label>
                                                        <div style="word-wrap:break-word;;">
                                                            <div class="fld-options"><input vtype="radio" vlabel="Gender" vrequired="false" type="radio" name="gender" id="gender_1" value="Boy" class="clRadioCheck" @if('Boy' == $data->gender) checked @endif><label>For Boy</label></div>
                                                            <div class="fld-options"><input vtype="radio" vlabel="Gender" vrequired="false" type="radio" name="gender" id="gender_2" value="Girl" class="clRadioCheck" @if('Girl' == $data->gender) checked @endif><label>For Girl</label></div>
                                                            <div class="fld-options"><input vtype="radio" vlabel="Gender" vrequired="false" type="radio" name="gender" id="gender_3" value="Both" class="clRadioCheck" @if('Both' == $data->gender) checked @endif><label>For Both</label></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>
                        <div id="ValidationMessagesUserPreferences" class="XMValidationMessage"></div>
                        <div style="float:right;">
                            <table border="0" cellpadding="2" vspace="0" cellspacing="0">
                                <tbody><tr class="XMFormRow XMFormRowChild" id="form_row_buttons" style="border-bottom:0;">
                                    <td valign="top" style="border-bottom:0;">
                                        <input onkeyup="" lang="en" id="cancel" vtype="button" hint="" placeholder="" vlabel="" vrequired="false" class="btn-gray" style="" onclick="window.location.href='/my-account';" type="button" name="cancel" value="Cancel"> <input onkeyup="" lang="en" id="savebtn" vtype="submit" hint="" placeholder="" vlabel="" vrequired="false" class="btn btn-primary" style="" type="submit" name="savebtn" value="Save">
                                    </td>
                                </tr>
                                </tbody></table>
                        </div>
                        <div style="display:block;clear:both;line-height:1px;font-size:1px;	overflow: hidden;"></div>
                        <input type="hidden" name="xm_form_request_token" value=" XMFRT-www.myteachingstation.com-8E03A097-D669-283C-8BB58CC342CC269C"> <input type="hidden" name="xm_user_token" value="1504685|4FAAB81A-8B4D-4AA5-AEBA-1D8679E0B1A6"> </form>
                    <script type="text/javascript">
                        if (window.hasOwnProperty("xmFormObj")) xmFormObj["UserPreferences"] = {"position":{"field_options":{},"required":false,"label":"I'm a","type":"custom"},"nickname":{"field_options":{},"required":false,"label":"Public Name <div data-tooltip='Your public name will appear on product reviews.' class='xmTip' style='display:inline-block;'><span class='icon-question'></span></div>","type":"text"},"color_preference":{"field_options":{},"required":false,"label":"Worksheet color preference","type":"select"},"country":{"field_options":{},"required":false,"label":"Location","type":"select"},"state":{"field_options":{},"required":false,"label":"State","type":"states"},"subject":{"field_options":{},"required":false,"label":"I'm interested in","type":"custom"},"grade":{"field_options":{},"required":false,"label":"I teach","type":"custom"},"gender":{"field_options":{},"required":false,"label":"Worksheet gender preference","type":"custom"},"last_name":{"field_options":{},"required":true,"label":"Last Name","type":"text"},"email":{"field_options":{},"required":true,"label":"E-mail Address","type":"email"},"first_name":{"field_options":{},"required":true,"label":"First Name","type":"text"}};

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
                                $('form#UserPreferences').on("change", ":input", function() {
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
                                        document.forms['UserPreferences'][fld.id].value=fld.value;
                                    }
                                } else if (data.hasOwnProperty("id") && document.forms['UserPreferences']["id"].value == "") {
                                    document.forms['UserPreferences']["id"].value = data.id;
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
    <div class="clearfix"></div>
</div>
@endsection
