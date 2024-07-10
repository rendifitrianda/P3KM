<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P3M || POLTEK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/toastr/build/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">


    <form action="{{ url('/aksiLogin') }}" method="POST" class="form-login">
        @csrf
        <div class="flex flex-col items-center justify-center w-full h-full">
            <div class="w-full">
                <div class="flex flex-col items-center justify-center w-full h-full">
                    <div class="w-full flex items-center justify-center flex-col">
                        <img src="{{ asset('public/img/logo.png') }}" alt="logo" class="w-[5rem]">
                        <h2 class="inline-block text-2xl font-semibold text-gray-800 mt-2">P3M</h2>
                        <h1 class="inline-block text-xl font-medium text-gray-500">POLITEKNIK NEGERI KETAPANG</h1>
                    </div>
                    <div class="w-full mt-4">
                        <x-input.input label="Username" name="username" placeholder="Username" />
                        <x-input.input label="Password" name="password" placeholder="Password" />
                    </div>

                    <div class="w-full mt-4">
                        <button class="btn btn-primary w-full flex items-center justify-center">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <script src="{{ asset('public/js/jquery.js') }}"></script>


    <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('node_modules/toastr/toastr.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
    <x-notif.notif />
    @stack('js')
</body>
</html>
