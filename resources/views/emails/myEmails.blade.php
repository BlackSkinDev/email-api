@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
{{$body}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
