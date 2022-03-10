@component('mail::message')
    # Introduction

    {{ $message }}



    Thanks,
    {{ config('app.name') }}
@endcomponent
