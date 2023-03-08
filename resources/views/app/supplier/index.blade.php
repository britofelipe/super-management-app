<h1>Suplier</h1>

@php
    /*

    */
@endphp

@isset($suppliers)
    @forelse ($suppliers as $index => $supplier)
        {{-- Doesn't affect original array --}}
        Supplier: @{{ $supplier['name'] }}
        <br>
        Status: @{{ $supplier['status'] }}
        <br>
        CNPJ: @{{$supplier['cnpj'] ?? ''}}
        <br>
        Telephone: @({{ $supplier['ddd'] ?? ''}}) {{ $supplier['telephone'] ?? ''}}
        <hr>
    @empty
        There aren't any suppliers registered
    @endforelse
@endisset


