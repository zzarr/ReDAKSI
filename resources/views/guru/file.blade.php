@extends('guru.layout.app')

@section('content')
    <main>
        <div class="container relative ml-auto w-4/5 md:mr-10">
            <h1 class="mt-4 text-4xl">Dashboard</h1>
            <ol class="mb-4 mt-2 flex items-center space-x-1">
                <li class="text-sky-400"><a href="{{ url('guru/dashboard_guru') }}">Dashboard</a></li>
                <li class="text-slate-500">/</li>
                <li class="text-slate-500">File</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Arsip File
                </div>
                <a href="{{ url('guru/file/create') }}"
                    class="box mb-2 ml-3 mt-4 flex h-10 w-32 items-center rounded-full bg-white drop-shadow-md">

                    <i class="fa-solid fa-file-circle-plus mx-3 h-5 w-5 text-black"></i>
                    <p class="text-sm font-bold text-black">Add File</p>
                </a>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th><select id="jenis-file-dropdown">
                                        <option value="" selected disabled class="border-b-4 border-black">Standar
                                            Akreditasi
                                        </option>
                                        @foreach ($format as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nm_standar }}</option>
                                        @endforeach
                                    </select></th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th>Ubah</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th>Kategori Standar</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th>Ubah</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($get_file as $item)
                                <tr>
                                    <td>{{ $item->nama_file }}</td>
                                    <td>{{ $item->formatfile }}</td>
                                    <td>{{ $item->standarakreditasi }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="flex">
                                            <div class="mr-4 flex h-9 w-20 rounded-lg bg-yellow-400">
                                                <i class="fa-solid fa-file-pen my-auto ml-2 mr-2 h-7 w-7 text-black"></i>
                                                <p class="my-auto text-sm font-bold text-black">Edit</p>
                                            </div>
                                            <div class="flex h-9 w-24 rounded-lg bg-red-800">
                                                <i class="fa-solid fa-trash my-auto ml-2 mr-2 h-7 w-7 text-white"></i>
                                                <p class="my-auto text-sm font-bold text-white">Hapus</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('external-scripts')
    <script src="{{ asset('js/formatfile.js') }}" defer></script>
@endpush
