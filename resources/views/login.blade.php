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

    <title>Login</title>
</head>
<body>
    <div class="grid md:grid-cols-2 grid-cols-1">
        <div class="image">
            <img src="{{ asset('img/image_school.jpg') }}" alt="Login image" class="hidden md:block w-full h-screen object-cover" />
        </div>

        <div class="login">
            <div class="gap-8 mt-8 md:mx-28 mx-24 columns-2 mb-24 md:mb-28 flex items-center justify-start">
                <img src="{{ asset('img/logo2.png') }}" alt="Logo MKGR" class="w-16 lg:w-20" />
                <span class="font-bold text-2xl lg:text-3xl">SMP MKGR</span>
            </div>

            <div class="text-center">
                <div class="text-4xl md:text-5xl font-bold">ReDAKSI</div>
                <div class="text-sm md:text-xl font-semibold">
                    Rekap Data Akreditasi
                </div>
            </div>

            <div class="md:mx-28 mx-24 justify-center mt-24 md:mt-28">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @error('gagal')
                        <div class="bg-slate-700 py-1.5 border-y-4 border-yellow-500 my-2" id="alert" role="alert">
                            <div class="px-4 text-sm md:text-base tracking-wide">
                                <div class="flex flex-row">
                                    <i data-feather="alert-triangle" class="w-5 text-slate-100"></i>
                                    <a class="ml-4 text-slate-100">{{ $message }}</a>
                                </div>
                            </div>
                        </div>
                    @enderror
                    <h2 class="font-semibold text-xl lg:text-2xl pb-4 mb-4 text-black">Login</h2>
                    <div class="md:col-span-2 mb-2">
                        <label for="username" class="block text-sm md:text-base font-medium leading-6 text-black">Username</label>
                        <div class="mt-2">
                            <input type="text" name="Username" id="Username" autocomplete="username" required
                                class="block w-full px-4 rounded-md py-1.5 text-black border border-amber-300 cursor-text hover:border-blue-600 focus:border-blue-600 text-sm md:text-base sm:leading-6" />
                        </div>
                    </div>

                    <div class="md:col-span-2 mb-8">
                        <label for="password" class="block text-sm md:text-base font-medium leading-6 text-black">Password</label>
                        <div class="mt-2">
                            <input type="password" name="Password" id="Password" required
                                class="block w-full px-4 rounded-md py-1.5 text-black border border-amber-300 cursor-text hover:border-blue-600 focus:border-blue-600 text-sm md:text-base sm:leading-6" />
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <input type="submit" id="submit"
                            class="block w-full text-white text-sm font-bold tracking-widest rounded-md py-3 bg-blue-600 cursor-pointer hover:text-base hover:py-2.5" value="LOGIN" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--<script src="{{ asset('js/alert.js') }}"></script>-->
    <script>
      feather.replace();
    </script>
</body>
</html>
