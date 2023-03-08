<h1>Suplier</h1>

@php
    /*

    */
@endphp

@isset($suppliers)
    @for ($i = 0; isset($suppliers[$i]); $i++)
        Supplier: {{ $suppliers[$i]['name'] }}
        <br>
        Status: {{ $suppliers[$i]['status'] }}
        <br>
        CNPJ: {{$suppliers[$i]['cnpj'] ?? ''}}
        <br>
        Telephone: ({{ $suppliers[$i]['ddd'] ?? ''}}) {{ $suppliers[$i]['telephone'] ?? ''}}
        <hr>
    @endfor
@endisset


