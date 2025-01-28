<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Bizmatech - Login Page - POS</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        {{-- Links Compiled --}}
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        {{-- Scripts Compiled --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="d-flex justify-content-center align-items-center h-100 p-3">
            <div class="card ">
                <div class="card-body">
                    <div class="row align-items-stretch h-100">
                        <div class="col-md-6">
                            {{-- Logo Column --}}
                            <div class="border rounded p-3 w-100 mt-2">
                                <img src="{{asset('images/pictures/bizma-logo.png')}}" alt="BizmaTech Logo"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-center mt-custom">
                            <div class="w-100">
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="fw-bold mb-0">
                                        <span style="color: #3b5998;">BizmaTech POS</span> - Login
                                    </h4>
                                </div>
                                <form id="loginForm">
                                    @csrf
                                    {{-- Input Credentials --}}
                                    <label class="form-label">Username:</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Enter Username">
                                    <label class="form-label mt-3">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control mb-3"
                                        placeholder="Enter Password">

                                    {{-- Show Password --}}
                                    <div class="d-flex justify-content-end mb-3">
                                        <input type="checkbox" class="form-check-input" id="showPassword">
                                        <label class="form-check-label ms-2" for="showPassword">Show
                                            Password</label>
                                    </div>

                                    {{-- Login Button --}}
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary w-100 btn-glow">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scripts Compiled --}}
        <script src="{{asset('js/auth.js')}}"></script>
    </body>

</html>