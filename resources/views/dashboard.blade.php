<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 justify-center">
                    <div class="mt-3 text-2xl">
                        Data Mahasiwa Baru <?= date('Y');?> HMISI
                    </div>

                </div>

                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <table class="table-auto">
                            <thead>
                              <tr>
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Nama Mahasiwa</th>
                                <th class="px-4 py-2">NPM</th>
                                <th class="px-4 py-2">Kelas</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">No. Whatsapp</th>
                                <th class="px-4 py-2">Question 1</th>
                                <th class="px-4 py-2">Question 2</th>
                                <th class="px-4 py-2">Question 3</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  @foreach ($mabas as $item)
                                  <td class="border px-4 py-2">{{$loop->iteration}}</td>
                                  <td class="border px-4 py-2">{{$item->name}}</td>
                                  <td class="border px-4 py-2">{{$item->npm}}</td>
                                  <td class="border px-4 py-2">{{$item->cls}}</td>
                                  <td class="border px-4 py-2">{{$item->email}}</td>
                                  <td class="border px-4 py-2">{{$item->wa}}</td>
                                  <td class="border px-4 py-2">{{$item->q1}}</td>
                                  <td class="border px-4 py-2">{{$item->q2}}</td>
                                  <td class="border px-4 py-2">{{$item->q3}}</td>
                                  @endforeach
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
