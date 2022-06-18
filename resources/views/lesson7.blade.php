@extends('layout')

@section('content')

<div class="container-lg my-5">
    <h2>basic grid</h2>
    <div class="row">
        <div class="col">
            <div class="p-5 bg-primary text-light">Col 1</div>
        </div>
        <div class="col">
            <div class="p-5 bg-primary text-light">Col 2</div>
        </div>
        <div class="col">
            <div class="p-5 bg-primary text-light">Col 3</div>
        </div>
        <div class="col">
            <div class="p-5 bg-primary text-light">Col 4</div>
        </div>
    </div>
</div>

<div class="container-lg my-5">
    <h2>column widths</h2>
    <div class="row">
        <div class="col-6">
            <div class="p-5 bg-primary text-light">Col 1</div>
        </div>
        <div class="col-3">
            <div class="p-5 bg-primary text-light">Col 2</div>
        </div>
        <div class="col-3">
            <div class="p-5 bg-primary text-light">Col 3</div>
        </div>
    </div>
</div>

<div class="container-lg my-5">
    <h2>responsive column widths</h2>
    <div class="row">
        <div class="col-sm-4 col-lg-6">
            <div class="p-5 bg-primary text-light">Col 1</div>
        </div>
        <div class="col-sm-4 col-lg-3">
            <div class="p-5 bg-primary text-light">Col 2</div>
        </div>
        <div class="col-sm-4 col-lg-3">
            <div class="p-5 bg-primary text-light">Col 3</div>
        </div>
    </div>
</div>

<div class="container-lg my-5">
    <h2>justifying columns</h2>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="p-5 bg-primary text-light">Col 1</div>
        </div>
        <div class="col-md-3">
            <div class="p-5 bg-primary text-light">Col 2</div>
        </div>
        <div class="col-md-3">
            <div class="p-5 bg-primary text-light">Col 3</div>
        </div>

    </div>
</div>


@stop
