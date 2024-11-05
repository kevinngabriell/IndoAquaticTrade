@extends('layouts.home')
@section('content')
<main id="main">
    <section id="productdetail" style="overflow-x: hidden; background-color: white !important;">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-center mb-5 pb-5" style="height: 100vh; margin-left: 3px !important;">
            <!-- Text Section -->
            <div class="col-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center text-section" style="width: 100vh !important; height: 100vh;">
                <h1 class="display-4">{{ $portofolio->title_portofolio }}</h1>
                <h5><i>{{ $portofolio->name }}</i></h5>
                <p class="pt-3"><strong style="color: #6B7280 !important; ">Origin:</strong> {{ $portofolio->country_name }} <span>{!! $portofolio->country_flag !!}</span></p>
                <div class="line-grey" style="padding: 1rem 1rem 1rem !important;">
                    <p class="pl-5" style="color: #6B7280 !important; ">{!! $portofolio->description !!}</p>
                </div>
                <div class="mt-4">
                    <a href="{{ url('/portofolio/' . ($portofolio->id - 1)) }}" class="btn btn-outline-primary mx-2 my-2" {{ $portofolio->id == 1 ? 'disabled' : '' }}>&#8249;</a>
                    <a href="{{ url('/portofolio/' . ($portofolio->id + 1)) }}" class="btn btn-outline-primary mx-2 my-2" {{ $portofolio->id == $maxId ? 'disabled' : '' }}>&#8250;</a>
                </div>
            </div>
            <div class="image-section col-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center">
                <img src="{{ asset('storage/' . $portofolio->foto_portofolio) }}"
                alt="{{ $portofolio->title_portofolio }}"
                class="img-fluid"
                style="width: 70vh; padding: 2rem;">
            </div>
        </div>
    </section>
</main>
@endsection