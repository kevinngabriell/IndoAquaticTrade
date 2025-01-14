<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Data Hero') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
              <div class="p-5">
                  <table class="table-auto w-full mt-5">
                      <tr>
                          <th class="border px-4 py-2" width="30%">Title</th>
                          <th class="border px-4 py-2" width="60%">Description</th>
                          <th class="border px-4 py-2" width="60%">Why Us</th>
                          <th class="border px-4 py-2" width="10%">Aksi</th>
                        </tr>
                        @forelse ($hero as $item)
                          <tr>
                              <td class="border px-4 py-2">{{ $item->title }}</td>
                              <td class="border px-4 py-2">
                                @php
                // Split the description into individual items
                $description = explode('', $item->description);
            
                // Remove the empty first element
                array_shift($description);
            
                // Iterate through the items
                foreach ($description as $itemdescription) {
                    // Output the list item HTML structure
                    echo '<li class="d-flex align-items-center">';
                    echo '<i class="bi bi-check-circle text-primary me-2"></i>';
                    echo '<span>' . trim($itemdescription) . '</span>';
                    echo '</li>';
                }
            @endphp
                                {{-- {!! $item->description !!} --}}
                            </td>
                              <td class="border px-4 py-2">
                                {{-- {{ $item->why_us }} --}}
                                {{ substr(strip_tags($item->why_us), 0, 100) }}</td>
                              <td class="border px-4 py-2 justify-between">
                                  <a href="{{ route('hero.edit', $item->id) }}" class="py-1 px-4 rounded-md bg-yellow-400">Edit</a>
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
