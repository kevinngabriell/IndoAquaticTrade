<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data About') }}
        </h2>
    </x-slot>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="p-5">
                    <table class="table-auto w-full mt-5">
                        <tr>
                            <th class="border px-4 py-2" width="30%">Name</th>
                            <th class="border px-4 py-2" width="30%">Perusahaan</th>
                            <th class="border px-4 py-2" width="30%">phone</th>
                            <th class="border px-4 py-2" width="30%">email</th>
                            <th class="border px-4 py-2" width="10%">Aksi</th>
                          </tr>
                          @forelse ($about as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->name }}</td>
                                <td class="border px-4 py-2">{{ $item->perusahaan }}</td>
                                <td class="border px-4 py-2">{{ $item->phone }}</td>
                                <td class="border px-4 py-2">{{ $item->email }}</td>
                                <td class="border px-4 py-2 justify-between">
                                    <a href="{{ route('about.edit', $item->id) }}" class="py-1 px-4 rounded-md bg-yellow-400">Edit</a>
                                    <br>
                                    <a href="{{ route('about.show', $item->id) }}" class="py-1 px-4 rounded-md bg-red-500">Detail</a>
                                </td>
                            </tr>
                          @empty
                            <tr >
                                <td class="border px-4 py-2 text-center" colspan="4">Tidak ada data</td>
                            </tr>
                          @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  