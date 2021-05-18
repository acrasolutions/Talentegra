@component('mail::message')
# Hello!

Before changing email address, you should verify your email address.
Please click the button below to verify your new email address.

This will expire in 60 minutes.

@component('mail::button', ['url' => $route])
Verify Email Address
@endcomponent

If you did not request for update, no further action is required.

Regards,<br>
{{ config('app.name') }}

<hr>
<br>
If you’re having trouble clicking the "Verify Email Address" button, copy and paste the URL below into your web browser: <a href="{{$route}}">{{$route}}</a>

@endcomponent
