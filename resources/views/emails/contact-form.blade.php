@component('mail::message')
# New Contact Form Submission

**From:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}

**Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
