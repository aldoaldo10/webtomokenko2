@extends('layouts.master')
@section('content')

<!-- Menampilkan slider -->
<div id="imageSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
        <li data-target="#imageSlider" data-slide-to="1"></li>
        <li data-target="#imageSlider" data-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
        <!-- Gambar 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('images/gambar3.jpeg') }}" alt="Slide 1" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 1</h3>
                <p>Deskripsi Slide 1</p>
            </div>
        </div>

        <!-- Gambar 2 -->
        <div class="carousel-item">
            <img src="{{ asset('images/gambar4.jpeg') }}" alt="Slide 2" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 2</h3>
                <p>Deskripsi Slide 2</p>
            </div>
        </div>

        <!-- Gambar 3 -->
        <div class="carousel-item">
            <img src="{{ asset('images/gambar5.jpeg') }}" alt="Slide 3" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 3</h3>
                <p>Deskripsi Slide 3</p>
            </div>
        </div>
    </div>

    <!-- Tombol Next/Prev -->
    <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<aside class="text-center" style="background-color: white;">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
                <div class="h2 fs-1 text-black mb-4">What We Offer</div>
                <br><p class="lead">Tomo Kenko Jaminan Halal & registrasi BPOM, garansi kualitas, dan layanan pelanggan yang responsif, Tomo Kenko berupaya memberikan pengalaman yang baik kepada konsumennya dalam memenuhi kebutuhan vitamin dan suplemen mereka.</p>
            </div>
        </div>
    </div>
</aside>
<div class="row justify-content-center">
  <!-- Gambar 1 -->
  <div class="col-md-3 d-flex">
    <div class="card rounded mx-auto" style="width: 18rem;">
      <img src="{{ asset('images/card4.jpg') }}" alt="Card 1" class="card-img-top" style="border: none;">
      <div class="card-body text-center">
        <h5 class="card-title">Halan Dan BPOM</h5>
        <a class="btn btn-outline-light py-1 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank" style="background-color: #42b4ff;">LEARN MORE</a>
      </div>
    </div>
  </div>
  <!-- Gambar 2 -->
  <div class="col-md-3 d-flex">
    <div class="card rounded mx-auto" style="width: 18rem;">
      <img src="{{ asset('images/card2.jpg') }}" alt="Card 2" class="card-img-top" style="border: none;">
      <div class="card-body text-center">
        <h5 class="card-title">Garansi</h5>
        <a class="btn btn-outline-light py-1 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank" style="background-color: #42b4ff;">LEARN MORE</a>
      </div>
    </div>
  </div>
  <!-- Gambar 3 -->
  <div class="col-md-3 d-flex">
    <div class="card rounded mx-auto" style="width: 18rem;">
      <img src="{{ asset('images/card3.jpg') }}" alt="Card 3" class="card-img-top" style="border: none;">
      <div class="card-body text-center">
        <h5 class="card-title">Layanan Customer</h5>
        <a class="btn btn-outline-light py-1 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank" style="background-color: #42b4ff;">LEARN MORE</a>
      </div>
    </div>
  </div>
</div>

<br><section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start Glowing.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Learn More</a>
                </div>
            </div>
        </section>
@endsection
