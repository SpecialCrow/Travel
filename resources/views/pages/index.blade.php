
@extends('layouts.app')

@section('content')

 
 <div class="row">
    <div class="col-md-8">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-540x360/07/25/13/74.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.getyourguide.com/img/tour_img-1096032-146.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/01/31/09/new-york-main-image.jpg?w968h681" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
    <div class="col-sm-4">
            <h1>Manoblogas</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis corporis, suscipit mollitia expedita rerum similique ipsa soluta facere alias. Nulla natus quae asperiores doloremque minima repellat delectus mollitia culpa voluptatibus!</p>
    </div>
 </div>
<div class="text-center pt-5">
        <h1>All visited Places</h1>
</div>

@endsection
