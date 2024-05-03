@extends('user-site.main')
@section('content-layout')
<div id="content-layout">
    <div class="container">
        <h1 class="hpage">Orders list</h1>
        <div class="content-left">
            <div class="content-holder">
                <div class="content-box" style="margin-bottom:15px;">
                    <div class="box-body">
                        <h2>My Purchases</h2>
                        <div class="table-container">
                            <table class="table table-responsive table-bordered table-striped">
                                <thead>
                                <tr role="row" >
                                    <th>ID</th>
                                    <th>Bill Info</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($dataList as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->bill_info }}</td>
                                        <td>{{ $data->total }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="content-box" style="margin-bottom:15px;">
                    <div class="box-body">
                        <h2>You May Be Interested In</h2>
                        <div id="related-worksheets" class="crsl-nav">
                            <a href="#" class="previous">Previous</a>
                            <a href="#" class="next">Next</a>
                        </div>
                        <div class="crsl-items" data-navigation="related-worksheets" style="width: 100%; overflow: hidden;">
                            <div class="crsl-wrap" style="width: 915px; margin-left: -183px;">
                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/ed-word-family-printable-workbook" title="View ED Word Family Workbook product">
                                        <div class="bck"><img src="/vault/2599/store/small/ed-word-family-workbook.jpg" width="100%" alt=""></div>
                                        <figcaption>ED Word Family Workbook</figcaption></a>
                                </figure><figure class="crsl-item crsl-active" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/math/do-a-dot-numbers-0-10-activity-set" title="View Do-A-Dot Numbers 0-10 Activity Set product">
                                        <div class="bck"><img src="/vault/2599/store/small/do-a-dot-numbers-0-10-worksheets.jpg" width="100%" alt=""></div>
                                        <figcaption>Do-A-Dot Numbers 0-10 Activity Set</figcaption></a>
                                </figure>
                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/math/do-a-dot-numbers-0-10-activity-set" title="View Do-A-Dot Numbers 0-10 Activity Set product">
                                        <div class="bck"><img src="/vault/2599/store/small/do-a-dot-numbers-0-10-worksheets.jpg" width="100%" alt=""></div>
                                        <figcaption>Do-A-Dot Numbers 0-10 Activity Set</figcaption></a>
                                </figure>
                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/it-word-family-printable-workbook" title="View IT Word Family Workbook product">
                                        <div class="bck"><img src="/vault/2599/store/small/it-word-family-workbook.jpg" width="100%" alt=""></div>
                                        <figcaption>IT Word Family Workbook</figcaption></a>
                                </figure>
                                <figure class="crsl-item" style="position: relative; float: left; overflow: hidden; height: auto; width: 173px; margin-right: 10px;"><a href="/word-family/an-word-family-printable-workbook" title="View AN Word Family Workbook product">
                                        <div class="bck"><img src="/vault/2599/store/small/an-word-family-workbook.jpg" width="100%" alt=""></div>
                                        <figcaption>AN Word Family Workbook</figcaption></a>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-box">
                <div class="box-body">
                    <h2>Welcome toong</h2>
                    <ul class="link-list">
                        <li><a href="/my-account?actionxm=Details">My Account</a></li>
                        <li class="active"><a href="/my-purchases">My Purchases</a></li>
                        <li><a href="/my-orders">My Orders</a></li>
                        <li><a href="/my-favorites">My Favorites</a></li>
                        <li><a href="/my-account?actionxm=ModifyProfile">Modify Profile</a></li>
                        <li><a href="/my-account?actionxm=ModifyPwd">Change Password</a></li>
                        <li><a href="/my-account?actionxm=EmailPreference">E-mail Preferences</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
