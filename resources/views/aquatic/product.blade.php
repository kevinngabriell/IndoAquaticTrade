@extends('layouts.home')

@section('content')
 
<main id="main">
  
   <!-- ======= Product Category Live Section ======= -->
   <section id="product" class="py-3 py-md-5 py-xl-12" style="background-color: transparent !important;color:#032f60 !important">  
    <div class="product-container-1">
          <div class="row gy-3 gy-md-4 gy-lg-0 justify-content-center mt-4">
          <div class="card3">
                <div class="card-body">
                  <h1 class="product-category-title">{!! __('product.liveproducttitle') !!}</h1>
                  <div class="product-category-desc">{!! __('product.liveproductdesc') !!}</div>
                </div>
              </div>
          </div>
    </div>

    <br>
    <br>
    <br>
    <div class="product-category">{!! __('product.ourliveproduct') !!}</div>
    <br>
    <br>

    <div class="container text-center" style="color:#032f60 !important">
        @php $count = 0; @endphp
        @foreach($product as $item)
            @if($item->id >= 1 && $item->id <= 3) 
                @if($count % 4 == 0)
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center justify-content-center  mt-2 mb-2">
                @endif
                <div class="col-md-3 col-sm-6 mb-5 d-flex flex-column align-items-center">
                    <div class="mb-30">
                        <div class="item">
                            <div class="menu-item2 filter-starters">
                                <img src="{{ asset('storage/' . $item->foto_portofolio) }}" class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                                <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                                <p class="text-center otherName"">{{ $item->name }}</p>
                            </div>
                        </div>
                        <div class="seedetail">
                            <a href="{{ url('/portofolio/' . $item->id) }}">see details</a>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @if($count % 4 == 0 || $loop->last)
                </div>
                @endif
            @endif
        @endforeach
    </div>

    <div class="container text-center" style="color:#032f60 !important">
        @php $count = 0; @endphp
        @foreach($product as $item)
            @if($item->id >= 4 && $item->id <= 5) 
                @if($count % 4 == 0)
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center justify-content-center mt-2 mb-2">
                @endif
                <div class="col-md-3 col-sm-6 mb-5 d-flex flex-column align-items-center">
                    <div class="mb-30">
                        <div class="item">
                            <div class="menu-item2 filter-starters">
                                <img src="{{ asset('storage/' . $item->foto_portofolio) }}" class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                                <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                                <p class="text-center otherName" >{{ $item->name }}</p>
                            </div>
                        </div>
                        <div class="seedetail">
                            <a href="{{ url('/portofolio/' . $item->id) }}">see details</a>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @if($count % 4 == 0 || $loop->last)
                </div>
                @endif
            @endif
        @endforeach
    </div>

    <div class="container text-center" style="color:#032f60 !important">
        @php $count = 0; @endphp
        @foreach($product as $item)
            @if($item->id >= 6 && $item->id <= 7) 
                @if($count % 4 == 0)
                <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center justify-content-center  mt-2 mb-2">
                @endif
                <div class="col-md-3 col-sm-6 mb-5 d-flex flex-column align-items-center">
                    <div class="mb-30">
                        <div class="item">
                            <div class="menu-item2 filter-starters">
                                <img src="{{ asset('storage/' . $item->foto_portofolio) }}" class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                                <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                                <p class="text-center otherName" >{{ $item->name }}</p>
                            </div>
                        </div>
                        <div class="seedetail">
                            <a href="{{ url('/portofolio/' . $item->id) }}" >see details</a>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp
                @if($count % 4 == 0 || $loop->last)
                </div>
                @endif
            @endif
        @endforeach
    </div>

  </section>
  <!-- ======= Product Category Live Section ======= -->

  <!-- ======= Product Category Frozen Section ======= -->
  <section id="product">
    <div class="product-container-2">
      <div class="row gy-3 gy-md-4 gy-lg-0 justify-content-center mt-4">
      <div class="card4">
            <div class="card-body">
              <h1 class="product-category-title">{!! __('product.frozenproducttitle') !!}</h1>
              <div class="product-category-desc">{!! __('product.frozenproductdesc') !!}</div>
            </div>
            </div>
          </div>
    </div>

    <br>
    <br>
    <br>
    <div class="product-category">{!! __('product.ourfrozenproduct') !!}</div>
    <br>
    <br>

    <div class="container" style="color:#032f60 !important">
      @php $count = 0; @endphp
        @foreach($product as $item)
          @if($item->id >= 8 && $item->id <= 15) <!-- Condition to check the ID range -->
            @if($count % 4 == 0)
              <div class="row gy-3 gy-md-4 gy-lg-0 align-items-stretch mt-2 mb-2">
            @endif
            <div class="col-md-3 col-sm-6 mb-5">
              <div class="mb-30">
                <div class="item">
                  <div class="menu-item2 filter-starters">
                    <img src="{{ asset('storage/' . $item->foto_portofolio) }}"  class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                    <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                    <p class="text-center otherName">{{ $item->name }}</p>
                  </div>
                </div>
                <div class="seedetail">
                  <a href="{{ url('/portofolio/' . $item->id) }}">see details</a>
                </div>
              </div>
            </div>
            @php $count++; @endphp
              @if($count % 4 == 0 || $loop->last)
                </div>
              @endif
            @endif
        @endforeach
    </div>

    <div class="container text-center" style="color:#032f60 !important">
      @php $count = 0; @endphp
        @foreach($product as $item)
          @if($item->id >= 16 && $item->id <= 18) <!-- Condition to check the ID range -->
            @if($count % 4 == 0)
              <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center justify-content-center mt-2 mb-2">
            @endif
            <div class="col-md-3 col-sm-6 mb-5 d-flex flex-column align-items-center">
              <div class="mb-30">
                <div class="item">
                  <div class="menu-item2 filter-starters">
                    <img src="{{ asset('storage/' . $item->foto_portofolio) }}"  class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                    <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                    <p class="text-center otherName">{{ $item->name }}</p>
                  </div>
                </div>
                <div class="seedetail">
                    <a href="{{ url('/portofolio/' . $item->id) }}">see details</a>
                </div>
              </div>
            </div>
            @php $count++; @endphp
              @if($count % 4 == 0 || $loop->last)
                </div>
              @endif
            @endif
        @endforeach
    </div>
  </section>
  <!-- ======= Product Category Frozen Section ======= -->

  <!-- ======= Product Category Fresh Section ======= -->
  <section id="product">
    <div class="product-container-3">
            <div class="row gy-3 gy-md-4 gy-lg-0 justify-content-center mt-4">
              <div class="card3">
                  <div class="card-body">
                    <h1 class="product-category-title">{!! __('product.freshproducttitle') !!}</h1>
                    <div class="product-category-desc">{!! __('product.freshproductdesc') !!}</div>
                  </div>
                </div>
            </div>
      </div>

      <br>
      <br>
      <br>
      <div  class="product-category">{!! __('product.ourfreshproduct') !!}</div>
      <br>
      <br>

      <div class="container text-center" style="color:#032f60 !important">
          @php $count = 0; @endphp
          @foreach($product as $item)
              @if($item->id == 19) <!-- Condition to check the ID range -->
                  @if($count % 4 == 0)
                  <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center justify-content-center mt-2 mb-2">
                  @endif
                  <div class="col-md-3 col-sm-6 mb-5 d-flex flex-column align-items-center">
                      <div class="mb-30">
                          <div class="item">
                              <div class="menu-item2 filter-starters">
                                  <img src="{{ asset('storage/' . $item->foto_portofolio) }}" class="menu-img2 mb-5" alt="{{ $item->title_portofolio }}">
                                  <h4 class="card-title text-center" style="text-transform: uppercase;">{{ $item->title_portofolio }}</h4>
                                  <p class="text-center otherName" >{{ $item->name }}</p>
                              </div>
                          </div>
                          <div class="seedetail">
                              <a href="{{ url('/portofolio/' . $item->id) }}">see details</a>
                          </div>
                      </div>
                  </div>
                  @php $count++; @endphp
                  @if($count % 4 == 0 || $loop->last)
                  </div>
                  @endif
              @endif
          @endforeach
      </div>
  </section>
<!-- ======= end product Section ======= -->

    

    


  </main><!-- End #main -->

@endsection
