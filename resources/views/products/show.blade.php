  @extends('layouts.app')

@section('body-class', 'profile-page')
@section('content')
  <div class="wrapper">
    <section class="section bg-secondary">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="javascript:;">
                    <img src="{{ $product->featured_image_url }}" class="rounded-circle">
                  </a>
                </div>
              </div>
      
            </div>
            <div class="text-center mt-5">
              <h3>{{ $product->name }}<span class="font-weight-light">{{ $product->price }}</span></h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $product->category->name }}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>{{ $product->description }}</div>
              <!-- <div><i class="ni education_hat mr-2"></i>University of Computer Science</div> -->
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <p>{{ $product->long_description }}</p>
                  <a href="javascript:;">Show more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection