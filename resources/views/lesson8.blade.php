@extends('layout')

@section('content')
<style>
    section{
        padding: 60px 0;
    }
</style>

{{-- navbar --}}
<nav class="navbar">
    <div class="container-xxl">
        <a href="#intro"></a>
    </div>
</nav>


{{-- Main image & intro text --}}
<section id="intro">
    <div class="container-lg">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 text-center text-md-start">
                <h1>
                    <div class="display-2">Black belt</div>
                    <div class="dispaly-5">Your Coding Skills</div>
                </h1>
                <p class="lead my-4 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#pricing" class="btn btn-secondary btn-lg">Buy now</a>
            </div>
            <div class="col-md-5 text-center d-none d-md-block">
               <img class="img-fluid" src="/media/ebook-cover.png" alt="ebook cover">
            </div>
        </div>
    </div>
</section>


{{-- pricing plans --}}


{{-- topics at a glance --}}


{{-- review list --}}



@stop


