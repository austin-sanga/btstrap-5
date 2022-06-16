@extends('layout')

@section('content')

{{-- margin and padding --}}
<div class="bg-primary m-1 p-1">Small margin and padding</div>
<div class="bg-primary m-5 p-5">large margin and padding</div>
<div class="bg-primary my-1 px-5 ">margin in y direction, padding in x direction</div>
<div class="bg-primary ms-3 me-3 mt-3 mb-5 pt-5 ">margin and padding in different configuration, start and end, top and bottom </div>

{{-- borders --}}
<div class="m-3 p-3 border">default border</div>
<div class="m-3 p-3 border-top border-end">Individual border</div>
<div class="m-3 p-3 border-start border-success">Border success colour at start</div>
<div class="m-3 p-3 border-start border-danger border-5">Thicker border</div>
<div class="m-3 p-3 rounded border border-5">rounded border</div>
<div class="m-3 p-3 rounded-pill border border-5">rounded pill border</div>

{{-- box shadow --}}
<div class="m-3 p-3 shadow-sm">elements with small box shadow</div>
<div class="m-3 p-3 shadow-lg">elements with large box shadow</div>
<div class="m-3 p-3 shadow">elements with box shadow</div>


{{-- font weight --}}
<p class="fw-bold">Lorem, ipsum.</p>
<p class="fw-bolder">Lorem, ipsum.</p>
<p>Lorem, ipsum.</p>
<p class="fw-light">Lorem, ipsum.</p>
<p class="fst-italic">Lorem, ipsum.</p>
<p class="fst-italic fw-light">Lorem, ipsum.</p>


@stop
