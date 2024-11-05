<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit About') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route('about.update', $about->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sejarah">
                                <p>Name</p>
                                <input type="text" name="name" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->name }}">
                            </div>
                            <div class="visi_misi mt-5">
                                <p>Perusahaan</p>
                                <input type="text" name="perusahaan" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->perusahaan }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profil mt-5">
                                <p>Sub</p>
                                <input type="text" name="perusahaan" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->sub }}">
                            </div>
                            <div class="profil mt-5">
                                <p>Keywords</p>
                                <input type="text" name="perusahaan" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->keywords }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="profil mt-5">
                                <p>Email</p>
                                <input type="text" name="email" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->email }}">
                            </div>
                            <div class="profil mt-5">
                                <p>Phone</p>
                                <input type="text" name="phone" class="w-full rounded-md py-4 px-6 border border-solid border-body-color" value="{{ $about->phone }}">
                            </div>
                        </div>

                        {{-- <div class="profil mt-5">
                            <p>Logo</p>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="image_blog">
                        </div>

                        <div class="profil mt-5">
                            <p>Favicon</p>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 my-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="file" name="image_blog">
                        </div> --}}

                    </div>
                    <br>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    
  </x-app-layout>
  