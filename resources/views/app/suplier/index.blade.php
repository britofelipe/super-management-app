<h1>Suplier</h1>

Supplier: {{ $suppliers[0]['name']}}
<br>
Status
Supplier: {{ $suppliers[0]['status']}}
<br>
@unless($suppliers[0]['status'] == 'Y')
    <p>Supplier not registered</p>
@endunless
<br>
