 @extends('layout')

@section('content')
<style>
    section{
        padding: 60px 0;
    }
</style>

{{-- navbar --}}
<nav class="navbar navbar-expand-md {{-- fixed-top --}} navbar-light">
    <div class="container-xxl">
        <a href="#intro" class="navbar-brand">
            <span class="fw-bold text-secondary">
                <i class="bi bi-book-half"></i>
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
                {{-- tooltip --}}
                <span class="tt" data-bs-placement="bottom" title="Net Ninja Book Cover">
                    <img class="img-fluid" src="/media/ebook-cover.png" alt="ebook cover">
                </span>
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
<section id="topics">
    <div class="container-md">
        <div class="text-center">
        <h2>Inside the Book...</h2>
        <p class="lead text-muted"> A quick glance at the topic you'll learn</p>
         </div>

         <div class="row my-5 g-5 justify-content-around align-items-center">
            <div class="col-6 col-lg-4">
                <img src="/media/kindle.png" class="img-fluid" alt="ebook ">
            </div>

            <div class="col-lg-6">
            {{-- accordion --}}
            <div class="accordion" id="chapters">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">Chapter 1 - Your first web page</button>
                    </h2>
                    <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="true" aria-controls="chapter-2">Chapter 2 - Mastering Css</button>
                    </h2>
                    <div id="chapter-2" class="accordion-collapse collapse " aria-labelledby="heading-2" data-bs-parent="#chapters">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-3" aria-expanded="true" aria-controls="chapter-3">Chapter 3 - The power of Javascript</button>
                    </h2>
                    <div id="chapter-3" class="accordion-collapse collapse " aria-labelledby="heading-3" data-bs-parent="#chapters">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="true" aria-controls="chapter-4">Chapter 4 - Storing Data (Firebase Database)</button>
                    </h2>
                    <div id="chapter-4" class="accordion-collapse collapse " aria-labelledby="heading-4" data-bs-parent="#chapters">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="true" aria-controls="chapter-5">Chapter 5 - User Authentification</button>
                    </h2>
                    <div id="chapter-5" class="accordion-collapse collapse " aria-labelledby="heading-5" data-bs-parent="#chapters">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, excepturi. At neque facere omnis tenetur placeat nihil laboriosam commodi. Quae cupiditate, aut tempore unde sequi aperiam quam accusantium incidunt odit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
</section>


{{-- review list --}}
<section id="reviews" class="bg-light">
    <div class="container-lg">
        <div class="text-center">
            <h2><i class="bi bi-stars"></i>Book Reviews</h2>
             <p class="lead">What my students have said about the book....</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <div class="list-group">
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum error magni itaque quo! Quis quos rerum a vitae? Cum eum ipsum tempore ad perferendis. Rem excepturi culpa maxime, sit nobis, corrupti cum, beatae natus reprehenderit temporibus dolorem ad ipsa!</p>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum error magni itaque quo! Quis quos rerum a vitae? Cum eum ipsum tempore ad perferendis. Rem excepturi culpa maxime, sit nobis, corrupti cum, beatae natus reprehenderit temporibus dolorem ad ipsa!</p>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum error magni itaque quo! Quis quos rerum a vitae? Cum eum ipsum tempore ad perferendis. Rem excepturi culpa maxime, sit nobis, corrupti cum, beatae natus reprehenderit temporibus dolorem ad ipsa!</p>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum error magni itaque quo! Quis quos rerum a vitae? Cum eum ipsum tempore ad perferendis. Rem excepturi culpa maxime, sit nobis, corrupti cum, beatae natus reprehenderit temporibus dolorem ad ipsa!</p>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h5 class="mb-1">A must buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi voluptatum error magni itaque quo! Quis quos rerum a vitae? Cum eum ipsum tempore ad perferendis. Rem excepturi culpa maxime, sit nobis, corrupti cum, beatae natus reprehenderit temporibus dolorem ad ipsa!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- contact form --}}
{{--form-control, form-label, form-select, input-group, input-group-text  --}}
<section id="contact">
    <div class="container-lg">
        <div class="text-center">
            <h2>Get in touch</h2>
            <p class="lead">Questions to ask? Fill out the form to contact me directly....</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form>
                    <label for="email" class="form-label">Email address:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="john@gmail.com">

                        {{-- tooltip --}}
                        <span class="input-group-text">
                            <span class="tt" data-bs-pacement="bottom" title="Enter email we can reply to"><i class="bi bi-question-circle text-muted"></i></span>
                    </span>
                    </div>


                    <label for="name" class="form-label">Name:</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="name" placeholder="Mario">
                         {{-- tooltip --}}
                            <span class="input-group-text">
                                <span class="tt" data-bs-pacement="bottom" title="Preatty self explanatory really"><i class="bi bi-question-circle text-muted"></i></span>
                        </span>

                    </div>


                    <label for="subject" class="form-label">What is your question about?</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="bi bi-chat-right-dots-fill"></i></span>
                        <select class="form-select" id="subject">
                            <option value="pricing">pricing Query</option>
                            <option value="content" selected>Content query</option>
                            <option value="other">Other Query</option>
                        </select>
                    </div>



                    <div class="form-floating mb-4 mt-5">
                        <textarea
                        id="querry" class="form-control" style="height: 140px"></textarea>
                        <label for="query" class="form-lable">Your query...</label>
                    </div>

                    <div class="mb-4 rext-center">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
            </div>
     </div>
</section>


@stop


