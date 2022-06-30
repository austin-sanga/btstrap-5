 @extends('layout')

@section('content')
<style>
    section{
        padding: 60px 0;
    }
</style>

{{-- navbar --}}
<nav class="navbar navbar-expand-md fixed-top navbar-light">
    <div class="container-xxl">
        <a href="#intro" class="navbar-brand">
            <span class="fw-bold text-secondary">
                Net-Ninja Pro the book
            </span>
        </a>
        {{-- toggle button for mobile nav --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- navbar links --}}
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#topics" class="nav-link">About the book</a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Get in Touch</a>
                </li>
                <li class="nav-item d-md-none">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item ms-2 d-none d-md-inline">
                    <a href="#pricing" class="btn btn-secondary">buy now</a>
                </li>
            </ul>
        </div>
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


