<x-mail::message>
# Hola equipo de {{ config('app.name') }}

{{ $data['name'] }} te ha enviado un mensaje desde la página web.

## Detalles del mensaje:

**Nombre:** {{ $data['name'] }} <br>
**Correo electrónico:** {{ $data['email'] }} <br>
**Teléfono:** {{ $data['phone'] }} <br>
**Mensaje:** {{ $data['message'] }} <br>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
