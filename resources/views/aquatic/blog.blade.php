@extends('layouts.home')

@section('content')
 
<main id="main">
  
  <section id="hero3" class="hero-section">
      <div class="row">
        <div class="blog-header">BLOG</div>
        <div class="blog-header-title">Latest Seafood Insights</div>
        <div class="blog-header-desc">Discover the newest developments and essential updates in the seafood industry. Our commitment to<br/>sustainability and quality ensures that we provide not only the freshest products but also the most relevant<br/>information. Explore our blogs to enhance your seafood knowledge and experience.</div>
      </div>
  </section>

  <br>
  <br>
  <br>
  <div class="product-category">Top Blog</div>
  <br>
  <br>

  <!-- Blog Section -->
  <section id="blog">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        @forelse ($latestBlogs ?? [] as $item)
          <div class="col">
            <div class="card h-70">
              <div class="card-img-top" style="position: relative; min-height: 400px;">
                <a href="{{ url('/blogs/' . $item->slug) }}" style="text-decoration: none;">
                  <img src="{{ asset('storage/' . $item->image_blog) }}" style="width: 100%; height: 550px; object-fit: cover;">
                  <div class="overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.5); color: white; padding: 15px; min-height: 150px;">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p>{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p>No blog posts available.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>
  <div class="product-category">Our Latest Blog</div>
  <br>
  <br>

  <section id="blog">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($blogs ?? [] as $item)
          <div class="col">
            <div class="card h-100">
              <img src="{{ asset('storage/' . $item->image_blog) }}" class="card-img-top" alt="Blog Image" style="height: 250px; object-fit: cover;">
              <div class="card-body">
                <a href="{{ url('/blogs/' . $item->slug) }}">
                  <h5 class="card-title mb-4" style="color: black !important;">{{ $item->title }}</h5>
                  <p class="card-text" style="color: black !important;">{{ \Illuminate\Support\Str::limit(strip_tags($item->content), 100) }}</p>
                  <!-- <p class="card-text"><small class="text-muted">12 Days Ago</small></p> -->
                  <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</small></p> <!-- This line calculates "X days ago" -->
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p>No blog posts available.</p>
          </div>
        @endforelse
      </div>

      <div class="d-flex justify-content-center mt-4">
          {{ $blogs->links('vendor.pagination.custom-pagination') }}
      </div>
    </div> 
  </section>

</main>

@endsection