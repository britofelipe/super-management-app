<h1>Suplier</h1>

@php
    /*

    */
@endphp

@isset($suppliers)
    @php $i = 0 @endphp
    @while(isset($suppliers[$i]))
        Supplier: {{ $suppliers[$i]['name'] }}
        <br>
        Status: {{ $suppliers[$i]['status'] }}
        <br>
        CNPJ: {{$suppliers[$i]['cnpj'] ?? ''}}
        <br>
        Telephone: ({{ $suppliers[$i]['ddd'] ?? ''}}) {{ $suppliers[$i]['telephone'] ?? ''}}
        <hr>
        @php $i++ @endphp
    @endwhile
@endisset


