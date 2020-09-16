@component('mail::message')
# Introduction

Your Token Is {{$token}}

@component('mail::button', ['url' => $token])
Click Here To Recover Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
