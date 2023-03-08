<h1>Suplier</h1>

@php
    /*
    if(isset($variable)) // true if the variable is defined
    */
@endphp

@isset($suppliers)
    Supplier: {{ $suppliers[0]['name'] }}
    <br>
    Status: {{ $suppliers[0]['status'] }}
    <br>
    @isset($suppliers[0]['cnpj'])
        CNPJ: {{ $suppliers[1]['cnpj'] }}
    @endisset
@endisset
