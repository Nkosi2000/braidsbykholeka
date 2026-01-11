{{-- resources/views/emails/contact-form.blade.php --}}

@component('mail::message')
# New Appointment Inquiry

**Client Details:**
- **Name:** {{ $data['name'] }}
- **Email:** {{ $data['email'] }}
- **Phone:** {{ $data['phone'] }}

**Appointment Details:**
- **Service Interest:** {{ $data['service_interest'] ?? 'Not specified' }}
- **Preferred Date:** {{ $data['preferred_date'] ?? 'Not specified' }}

**Message:**
{{ $data['message'] }}

@component('mail::button', ['url' => url('/admin/inquiries'), 'color' => 'primary'])
View Inquiry in Dashboard
@endcomponent

Please respond within 24 hours.

Thank you,<br>
Braids by Kholeka System
@endcomponent