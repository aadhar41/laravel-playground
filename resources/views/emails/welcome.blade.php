@component('mail::message')
# Hello {{$user->name}} [{{$user->email}}],

Welcome to our website.

@component('mail::button', ['url' => ''])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent