@extends('layouts.home')

@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($blogs->content), 160) }}">
    <meta name="keywords" content="{{ $blogs->keyword ?? 'skipjack tuna, frozen tuna, seafood industry' }}">
@endsection

@section('content')
<main id="main">
    <section id="blogdetail" style="background-color: transparent !important;color:#032f60 !important">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 mb-4">
                    <h1 class="mb-3">{{ $blogs->title }}</h1>
                    <p class="text-muted">{{ date('F d, Y', strtotime($blogs->date)) }}</p>
                </div>
                <div class="col-12 col-md-10 col-lg-8">
                    <img src="{{ asset('storage/' . $blogs->image_blog) }}" alt="Blog Image" class="img-fluid rounded mb-4">
                </div>
                <div class="col-12 col-md-10 col-lg-8">
                    {!! $blogs->content !!}
                </div>
            </div>
        </div>
    </section>
</main>
@endsection