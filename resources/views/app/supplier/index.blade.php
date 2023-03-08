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
    @isset($suppliers[0]['cnpj'])
        CNPJ: {{ $suppliers[0]['cnpj'] }}
        @empty($suppliers[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset
