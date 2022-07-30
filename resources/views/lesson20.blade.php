@extends('layout')

@section('content')

{{-- tabs --}}
<div class="container my-5">
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>

        <button class="nav-link " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</button>

        <button class="nav-link " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">Contact</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">

    <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <h2>Home</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi ut similique est mollitia quisquam vitae. Tempora voluptatem doloremque, sapiente fuga unde explicabo, quidem vero reiciendis a ipsa ducimus aliquam. Aspernatur ipsam officia dolores, optio repellat quos cupiditate tenetur quia officiis adipisci veniam esse eos delectus, rerum assumenda laboriosam perferendis consequatur neque est, voluptatum repudiandae. Enim natus voluptas inventore non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea illum amet quae illo dignissimos fuga assumenda atque fugit possimus recusandae quidem exercitationem doloremque ad aspernatur animi nam molestiae, saepe sunt commodi architecto id et itaque? Asperiores repellendus sapiente obcaecati. Commodi velit voluptate accusamus? Distinctio modi, omnis praesentium sint consequatur iste?</p>
    </div>

    <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <h2>Profile</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi ut similique est mollitia quisquam vitae. Tempora voluptatem doloremque, sapiente fuga unde explicabo, quidem vero reiciendis a ipsa ducimus aliquam. Aspernatur ipsam officia dolores, optio repellat quos cupiditate tenetur quia officiis adipisci veniam esse eos delectus, rerum assumenda laboriosam perferendis consequatur neque est, voluptatum repudiandae. Enim natus voluptas inventore non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea illum amet quae illo dignissimos fuga assumenda atque fugit possimus recusandae quidem exercitationem doloremque ad aspernatur animi nam molestiae, saepe sunt commodi architecto id et itaque? Asperiores repellendus sapiente obcaecati. Commodi velit voluptate accusamus? Distinctio modi, omnis praesentium sint consequatur iste?</p>
    </div>

    <div class="tab-pane fade p-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <h2>Contact</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sequi ut similique est mollitia quisquam vitae. Tempora voluptatem doloremque, sapiente fuga unde explicabo, quidem vero reiciendis a ipsa ducimus aliquam. Aspernatur ipsam officia dolores, optio repellat quos cupiditate tenetur quia officiis adipisci veniam esse eos delectus, rerum assumenda laboriosam perferendis consequatur neque est, voluptatum repudiandae. Enim natus voluptas inventore non.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea illum amet quae illo dignissimos fuga assumenda atque fugit possimus recusandae quidem exercitationem doloremque ad aspernatur animi nam molestiae, saepe sunt commodi architecto id et itaque? Asperiores repellendus sapiente obcaecati. Commodi velit voluptate accusamus? Distinctio modi, omnis praesentium sint consequatur iste?</p>
    </div>


</div>

</div>



@stop
