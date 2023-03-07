<h1>Suplier</h1>

@php

@endphp

@if(count($supliers) > 0 && count($supliers) < 10)
    <h3>There are some registered suppliers</h3>
@elseif(count($supliers) > 10)
    <h3>There are a lot of registered suppliers</h3>
@else
    <h3>There aren't any registered suppliers</h3>
@endif
