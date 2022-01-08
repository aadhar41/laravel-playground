@component('mail::message')
# Hello {{$name}} [{{$email}}],

Welcome to our website.

@component('mail::button', ['url' => ''])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent