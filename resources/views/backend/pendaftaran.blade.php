<x-app-layout>
    <div class="flex flex-col capitalize mt-4 text-3xl">
        <span class="font-semibold">hello, {{ Auth::user()->name }}</span>
    </div>
    <div class="flex">
        <div class="mr-6 w-full mt-8 flex-shrink-0 flex flex-col bg-white dark:bg-gray-600 rounded-lg">
            <!-- Card list container -->
            <h3 class="flex items-center px-8 my-3 text-lg font-semibold capitalize dark:text-gray-300">
                <!-- Header -->
                <span>Pendaftar</span>
            </h3>

            <div>
                <!-- List -->
                <div class="-my-4 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">No. Daftar</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">NISN</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Nama Lengkap</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Sekolah Asal</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Status</th>
                                <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Updated</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($murids as $murid)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">#{{ $murid->nomor_pendaftaran }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $murid->nisn }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">{{ ucwords($murid->murid) }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $murid->sekolah_asal }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    @if($murid->status == 1)
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">aktif</span>
                                    </span>
                                    @elseif($murid->status == 0)
                                    <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">not active</span>
                                    </span>
                                    @else
                                    <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-yellow-300 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">belum</span>
                                    </span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">{{ Date('d-m-Y', strtotime($murid->created_at)) }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Lihat Details</button>
                                </td>
                            </tr>
                            @endforeach

                            {{--<tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">#1</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">Damilare Anjorin</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">damilareanjorin1@gmail.com</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">+2348106420637</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">not active</span>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">September 12</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">#1</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">Damilare Anjorin</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">damilareanjorin1@gmail.com</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">+2348106420637</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <span class="relative text-xs">disabled</span>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">September 12</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>
                                </td>
                            </tr>--}}
                            </tbody>
                        </table>
                        <div class="py-2 work-sans">
                            {{ $murids->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
