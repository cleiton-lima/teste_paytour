@component('mail::message')

# Processo Seletivo

Obrigado, {{ $curriculo->nome }} por participar do nosso processo seletivo. Em breve um dos nossos recrutarods entrará em contato com você.

A seguir as informações do seu currículo:

Nome: {{$curriculo->nome}}
Email: {{$curriculo->email}}
Telefone: {{$curriculo->telefone}}
Cargo Desejado: {{$curriculo->cargo_desejado}}
Escolaridade: {{$curriculo->escolaridade}}
@if($curriculo->observacoes)
    Observações: {{ observacoes}}
@endif

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
