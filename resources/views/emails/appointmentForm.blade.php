@component('mail::message')
# Thank you for book an appointment {{\Illuminate\Support\Facades\Auth::user()->name}} , your appointment will be in {{$data['date']}} ,
    you select {{$data['services']}} service.

@endcomponent
