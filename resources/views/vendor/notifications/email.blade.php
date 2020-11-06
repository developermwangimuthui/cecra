@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}<br>
@lang('Equipo de soporte de Cerca De Mi España')

@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "En caso de que tengas problemas para acceder al link en el botón  \":actionText\", puedes copiar y pegar el enlace de abajo en tu navegador:\n".
    // 'into your web browser:',
    "<br>",
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>

@lang(

    "No respondas a este correo electrónico. Para ponerte en contacto con nosotros, haz clic en Contacto en nuestra web.\n".
    '<br>',

)

@lang(


    "Este es un correo transaccional.",


)
@endslot
@endisset
@endcomponent
