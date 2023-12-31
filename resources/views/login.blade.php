<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FeatherIcon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>{{ $webtitle }}</title>
</head>

<body>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="image">
            <img src="{{ asset('img/image_school.jpg') }}" alt="Login image"
                class="hidden h-screen w-full object-cover md:block" />
        </div>

        <div class="login h-full overflow-y-auto md:h-screen">
            <div class="mx-24 mb-20 mt-8 flex columns-2 items-center justify-start gap-8 md:mx-28 md:mb-24">
                <img src="{{ asset('img/logo2.png') }}" alt="Logo MKGR" class="w-16 lg:w-20" />
                <a href="{{ route('login') }}" class="text-2xl font-bold lg:text-3xl">SMP MKGR</a>
            </div>

            <a href="{{ route('login') }}" class="text-center">
                <div class="text-4xl font-bold md:text-5xl">ReDAKSI</div>
                <div class="text-sm font-semibold md:text-xl">
                    Rekap Data Akreditasi
                </div>
            </a>

            <div class="mx-24 mt-20 justify-center md:mx-28 md:mt-24">
                <form action="{{ route('login_proses') }}" method="POST">
                    @csrf
                    @error('gagal')
                        <div class="my-2 border-y-4 border-yellow-500 bg-slate-700 py-1.5" id="alert" role="alert">
                            <div class="px-4 text-sm tracking-wide md:text-base">
                                <div class="flex flex-row">
                                    <i data-feather="alert-triangle" class="w-5 text-slate-100"></i>
                                    <a class="ml-4 text-slate-100">{{ $message }}</a>
                                </div>
                            </div>
                        </div>
                    @enderror
                    <h2 class="mb-4 pb-4 text-xl font-semibold text-black lg:text-2xl">Login</h2>
                    <div class="mb-2 md:col-span-2">
                        <label for="username"
                            class="block text-sm font-medium leading-6 text-black md:text-base">Username</label>
                        <div class="mt-2">
                            <input type="text" name="username" id="username" autocomplete="off" required
                                class="block w-full cursor-text rounded-md border border-amber-300 px-4 py-1.5 text-sm text-black hover:border-blue-600 focus:border-blue-600 sm:leading-6 md:text-base" />
                        </div>
                    </div>

                    <div class="mb-8 md:col-span-2">
                        <label for="password"
                            class="block text-sm font-medium leading-6 text-black md:text-base">Password</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="off" required
                                class="block w-full cursor-text rounded-md border border-amber-300 px-4 py-1.5 text-sm text-black hover:border-blue-600 focus:border-blue-600 sm:leading-6 md:text-base" />
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <button type="submit" id="submit"
                            class="block w-full cursor-pointer rounded-md bg-blue-600 py-3 text-sm font-bold tracking-widest text-white hover:py-2.5 hover:text-base">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/alert.js') }}"></script>
</body>

</html>
