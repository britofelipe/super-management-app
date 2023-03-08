<h1>Suplier</h1>

@php
    /*
    if(empty($variable)) // true if the variable is empty
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()   -> empty array
        - $var      -> no value attributed
    */
@endphp

@isset($suppliers)
    Supplier: {{ $suppliers[0]['name'] }}
    <br>
    Status: {{ $suppliers[0]['status'] }}
    <br>
    CNPJ: {{$suppliers[1]['cnpj'] ?? ''}}
    <br>
    Telephone: ({{ $suppliers[1]['ddd'] ?? ''}}) {{ $suppliers[1]['telephone'] ?? ''}} -
    @switch($suppliers[1]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            State not found
    @endswitch
@endisset
