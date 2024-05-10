@extends('user-site.main')
@section('content-layout')
    <div id="content-layout">
        <h1 class="hpage">Refund Policy</h1>
        <div class="container">
            <div class="content-holder">
                <div class="content-box">
                    <div class="box-body">
                        <h4 class="mto mbo"><strong class="large">You can shop with confidence at MyTeachingStation.com.</strong></h4>
                        <p>If you are not entirely satisfied with your purchase, simply request a refund within <strong>3 days of the date of purchase</strong> (Refund policy effective as of November 14th, 2016). For purchases made prior to November 14th, 2016 - please refer to your product refund policy.</p>
                        <p>Please note that only items that have been purchased directly from MyTeachingStation.com can be refunded. MyTeachingStation.com products purchased through other retailers must be returned in accordance with their respective returns and refunds policy.</p>
                        <h2>How to Request a Refund</h2>
                        <p>It's ok to change your mind. We want you to be happy. That's why we've made it easy to quickly process a refund online with just a few clicks.</p>
                        <p>To request a refund, please follow the steps below:</p>
                        <ol class="plain">
                            <li>Sign in online with your username and password.</li>
                            <li>After you sign in, click on <a href="/my-account">My Account</a>.</li>
                            <li>On the menu sidebar, click on <strong>My Orders</strong> and you will see your most recent orders.</li>
                            <li>Locate the order you would like to request a refund and click on the order number.</li>
                            <li>In the order detail page, click on the <strong>Return Items</strong> link at the bottom of the page.</li>
                            <li>On the next page, select the item(s) you would like to request a refund, complete the form and click on the <strong>Request Refund</strong> button.</li>
                        </ol>
                        <p>Once we receive your request, we will begin to process your refund immediately.</p>
                        <p>Refunds will be issued in the same method of payment as the original payment. If you paid by credit or debit card, a refund will be issued to the original account and sent to the card-issuing bank within 3-5 business days of receipt of the refund request. Please contact the card-issuing bank with questions about when the credit will be posted to your account.</p>
                        <h2>Abuse of the Return Policy</h2>
                        <p>Customers requesting repeated returns may be blocked from making further purchases using MyTeachingStation.com services. Customers that violate the terms of use of a product may have their right of return revoked for such product.</p>
                        <p>For additional information, please read MyTeachingStation.com <a href="{{ route('terms') }}">Terms and Conditions</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
