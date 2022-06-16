@extends('layout')

@section('content')

{{-- basic buttons --}}
<h2>Buttons</h2>

<button class="btn btn-primary">Primary button</button>
<button class="btn btn-Secondary">Secondary button</button>


{{-- anchor tags as buttons --}}
<h2>Links as buttons</h2>
<a href="#" class="btn btn-info">Info ancho tag</a>
<a href="#" class="btn btn-success">Info ancho tag</a>

{{-- button sizes --}}
<h2>Button sizes</h2>
<button class="btn btn-lg btn-danger">large danger button</button>
<button class="btn btn-sm btn-warning">samll warning button</button>

{{-- Outlined style --}}
<h2>Button styles</h2>
<button class="btn btn-outline-primary">outline primary button</button>
<button class="btn btn-outline-secondary btn-lg">large outline secondary button</button>

{{-- button groups --}}
<h2>Button group</h2>
<div class="btn-group">
    <a href="#" class="btn btn-primary">button 1</a>
    <a href="#" class="btn btn-warning">button 1</a>
    <a href="#" class="btn btn-success">button 1</a>
</div>



@stop
