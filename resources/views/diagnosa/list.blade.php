<x-app-layout>
    <div class="bg-navbar-young px-[35px] py-[30px] shadow-inners rounded justify-between flex gap-x-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-black uppercase bg-input">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bentuk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kerusakan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Umur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">tambah diagnosa</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lists as $list)
                        
                    
                            <tr class="bg-navbar border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $list->warna }}
                                </th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $list->bentuk }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $list->kerusakan }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $list->umur }}
                                </td>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $list->status }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('diagnosa.tambah', $list->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah diagnosa</a>
                                </td>
                            </tr> 
                        @endforeach 


                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>