@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @forelse ($portadas as $r) 
        <div class="carousel-item @if ($loop->index==0) active @endif">
        <img src="/img/portadas/{{$r->urlfoto}}" class="d-block w-100" alt="{{$r->frase}}">
        </div>
    @empty 
    @endforelse
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
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5"><h1 class="text-center">GRUPO AGROPICA</h1></div>
 
        <div class="col-sm-4">
            <div class="card shadow">
                <img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_noticia__small/public/noticias/naranja-invierno.jpg" class="card-img-top">
                <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea distinctio et consectetur, numquam tempora quas adipisci necessitatibus itaque. Repudiandae nemo odit commodi quasi eius possimus tempora perferendis nesciunt iste dolore!</div>
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow">
                <img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_noticia__small/public/noticias/naranja-invierno.jpg" class="card-img-top">
                <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea distinctio et consectetur, numquam tempora quas adipisci necessitatibus itaque. Repudiandae nemo odit commodi quasi eius possimus tempora perferendis nesciunt iste dolore!</div>
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow">
                <img src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_noticia__small/public/noticias/naranja-invierno.jpg" class="card-img-top">
                <div class="card-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea distinctio et consectetur, numquam tempora quas adipisci necessitatibus itaque. Repudiandae nemo odit commodi quasi eius possimus tempora perferendis nesciunt iste dolore!</div>
                <div class="card-footer">
                    <a href="/" class="btn btn-outline-success rounded-pill btn-block">Producto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
