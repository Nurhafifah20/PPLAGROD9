<x-app-layout>

    <div class="relative rounded h-[100vh]">
        <img src="{{ asset('img/bg.png') }}" class="w-full h-full absolute object-cover object-center" alt="">
        <div class="relative flex flex-col mx-96 h-[100vh] justify-between">
            <ul class="spaxe-y-2 overflow-y-auto no-scrollbar">
              @foreach ($pesan as $item)
                  @if ($item->id == Auth::user()->id)
                  <li class="flex justify-end">
                    <div class="relative bg-green-600 max-w-xl my-5 px-4 py-2 text-gray-700 rounded shadow">
                        <span class="font-bold">{{ $item->name }}</span>
                        <span class="block">{{ $item->pesan }}
                      </span>
                      {{-- <span class="text-gray-400 text-xs">12.40</span> --}}
                    </div>
                  </li>
                  @else
                    <li class="flex justify-start">
                      <div class="relative bg-white my-5 max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                          <span class="font-bold">{{ $item->name }}</span>
                          <span class="block">{{ $item->pesan }}</span>
                          {{-- <span class="text-gray-400 text-xs">12.40</span> --}}
                      </div>
                    </li>
                  @endif
              @endforeach

            </ul>
            <form action="{{ route('pesan') }}" method="post" class="mb-3">
                @csrf
                <div class="w-full flex gap-x-2 mt-3">
                    <input type="text" class="bg-input border-none h-[50px] w-full shadow-inners" name="pesan">
                    <input type="submit" class="bg-input px-5 rounded" value="send">
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>