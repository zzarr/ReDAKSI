@extends('guru.layout.app')

@section('content')
    <main>
        <div class="container relative ml-auto w-4/5 md:mr-10">
            <h1 class="mt-4 text-4xl">Dashboard</h1>
            <ol class="mb-8 mt-2 flex items-center space-x-1">
                <li class="text-sky-400"><a href="{{ url('guru/dashboard_guru') }}">Dashboard</a></li>
                <li class="text-slate-500">/</li>
                <li class="text-sky-400"><a href="{{ url('guru/file') }}">File</a></li>
                <li class="text-slate-500">/</li>
                <li class="text-slate-500">Add File</li>
            </ol>
            <div class="card h-110 mx-auto w-1/2 rounded-xl bg-white p-16 drop-shadow-lg">
                <form action="{{ url('guru/file/') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2 md:col-span-2">
                        <label for="standar"
                            class="block text-base font-semibold leading-6 text-black md:text-base">Standar
                            Akreditasi</label>
                        <div class="mt-2">
                            <select name="standar" id="standar" required
                                class="block w-full cursor-pointer rounded-md border-2 border-amber-300 px-2 py-1.5 text-sm text-black hover:border-blue-600 focus:border-blue-600 sm:leading-6 md:text-base">
                                <!-- Tambahkan opsi default jika diperlukan -->
                                <option value="" selected disabled class="border-b-4 border-black">Pilih Standar
                                </option>

                                <!-- Iterasi melalui data ID standar dan membuat opsi dropdown -->
                                @foreach ($standar as $stdr)
                                    <option value="{{ $stdr->id }}">{{ $stdr->nm_standar }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="file" class="text-base font-semibold text-black">Pilih File</label>
                        <div class="mt-2 flex justify-center rounded-lg border-2 border-amber-300 px-6 py-10 hover:border-blue-600 focus:border-blue-600 sm:leading-6 md:text-base"
                            id="drop-area">
                            <div class="text-center">
                                <i class="fa-solid fa-file-import size-10"></i>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input name="file-upload" id="file-upload" type="file" class="sr-only"
                                            onchange="displayFileName(this)" required>
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600" id="file-name-info"></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bukti_file mb-4 mt-1 text-xs text-slate-500">*cantumkan bukti file standar akreditasi</div>
                    <div class="sm:col-span-2">
                        <button type="submit" id="submit"
                            class="block w-full cursor-pointer rounded-md bg-blue-600 py-3 text-sm font-bold tracking-widest text-white hover:py-2.5 hover:text-base">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
