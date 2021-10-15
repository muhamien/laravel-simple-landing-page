@extends('layouts.app')

@section('content')
    <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Get Started</a>
          <a href="#" class="btn btn-light my-2">Documentation</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?nature" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?code" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?city" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?coffee" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?book" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/random/1600x900?photography" class="img-fluid"/>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center"> 
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>

</main>
@endsection