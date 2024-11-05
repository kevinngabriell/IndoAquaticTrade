<x-app-layout>
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
  </head>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Profil') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <form action="{{ route('hero.update', $hero->id) }}" method="POST">
              @csrf
              @method('put')
              <div class="w-full">
                <div class="title">
                  <p>Title</p>
                  <input type="text" required class="w-full" name="title" value="{{ $hero->title }}">
                </div>
                <div class="description mt-5">
                  <p>Description</p>
                  <input id="description" type="hidden" name="description">

                  <trix-editor input="description" class="mb-3 h-56">{!! $hero->description !!}</trix-editor>
                </div>
                <div class="description mt-5">
                  <p>Why Us</p>
                  <input id="why_us" type="hidden" name="why_us">
                  <trix-editor input="why_us" class="mb-3 h-56">{!! $hero->why_us !!}</trix-editor>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                  Update
                </button>
              </div>
            </form>
          </div>
      </div>
  </div>
  <script>
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>
</x-app-layout>
