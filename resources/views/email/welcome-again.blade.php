@component('mail::message')
# Introduction

The body of your message.
 - one
 - two
 - three
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
This is my panel
we can use mail:table also
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
