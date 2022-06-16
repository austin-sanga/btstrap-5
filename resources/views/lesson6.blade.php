@extends('layout')

@section('content')

<div class="container my-5">
    <h2>Normal container</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio illum officia rem fugiat iusto quo repellat atque at praesentium, porro laboriosam rerum maiores quis similique consequuntur a, minus tempore?</p>
</div>

<div class="container-fluid">
    <h2>Fluid container</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ipsa, molestiae voluptates assumenda fuga delectus asperiores recusandae rerum et non rem ea quae aliquid ipsum laudantium sequi, saepe, magnam perspiciatis!</p>
</div>

<div class="container-lg my-5">
    <h2>100% width until lg screens, then container</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quo ea dolores, cumque ex quam commodi sed laboriosam repellat quibusdam voluptatibus architecto reiciendis distinctio doloremque facilis in explicabo provident eum!</p>
</div>

<div class="container-xl my-5">
    <h2>100% screen until xl screen, then container</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed expedita animi, doloremque distinctio itaque molestias! Expedita dolorum aliquam omnis nemo voluptatibus esse, ipsa provident eligendi nam rerum facere. Nam, officiis.</p>
</div>

@stop
