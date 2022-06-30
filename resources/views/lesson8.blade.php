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
<section id="pricing" class="bg-light mt-5">
<div class="container-lg">
    <div class="text-center">
        <h2>Pricing Plan</h2>
        <p class="lead text-muted">Choose price plan to suit you </p>
    </div>

    <div class="row my-5 justify-content-center align-items-center g-3">
        <div class="col-8 col-lg-4 col-xl-3">
            <div class="card border-0">
                <div class="card-body text-center py-4">
                    <h4 class="card-title">Starter Edition</h4>
                    <p class="lead card-subtitle">eBook download only</p>
                    <p class="display-5 my-4 text-primary fw-bold">$12.99</p>
                    <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, magnam?</p>
                    <a href="" class="btn btn-outline-primary btn-lg mt-3">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-9 col-lg-4 ">
            <div class="card border-primary border-2">
                <div class="card-header text-center text-primary">Most Popular</div>
                <div class="card-body text-center py-5">
                    <h4 class="card-title">Complete Edition</h4>
                    <p class="lead card-subtitle">eBook download & all updates</p>
                    <p class="display-4 my-4 text-primary fw-bold">$18.99</p>
                    <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, magnam?</p>
                    <a href="" class="btn btn-outline-primary btn-lg mt-3">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
            <div class="card border-0">
                <div class="card-body text-center py-4">
                    <h4 class="card-title">Ultimate Edition</h4>
                    <p class="lead card-subtitle">download, updates & extras</p>
                    <p class="display-5 my-4 text-primary fw-bold">$24.99</p>
                    <p class="card-text mx-5 text-muted d-none d-lg-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, magnam?</p>
                    <a href="" class="btn btn-outline-primary btn-lg mt-3">Buy Now</a>
                </div>
            </div>
        </div>


        </div>
        </div>

    </div>


</div>



</section>

{{-- topics at a glance --}}


{{-- review list --}}



@stop


