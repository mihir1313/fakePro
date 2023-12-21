<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('dashboard-title')</title>
    <link rel="icon" href="{{ asset('assets/logo/logo.png') }}" sizes="16x16" type="image/png">
    {{-- <link href="{{ asset('assets\common\bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets\common\style.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main_wrapper" style="user-select:none">
        <div class="container">
    @yield('dashboard-content')
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script ript src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
    integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('dashboard-footer')
</body>
</html>