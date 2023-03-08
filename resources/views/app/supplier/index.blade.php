<h1>Suplier</h1>

@php
    /*

    */
@endphp

@isset($suppliers)
    @forelse ($suppliers as $index => $supplier)
        Current iteration: {{ $loop->iteration}}
        <br>
        {{-- Doesn't affect original array --}}
        Supplier: {{ $supplier['name'] }}
        <br>
        Status: {{ $supplier['status'] }}
        <br>
        CNPJ: {{$supplier['cnpj'] ?? ''}}
        <br>
        Telephone:  ({{ $supplier['ddd'] ?? ''}}) {{ $supplier['telephone'] ?? ''}}
        <br>
        @if($loop->first)
            First iteration of loop
        @endif
        @if($loop->last)
            Last iteration of loop
        @endif
        <hr>
        {{-- The @dd() command helps to know information about the loop --}}
    @empty
        There aren't any suppliers registered
    @endforelse
@endisset


