@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #333333;">


<!-- Login Form Section Start -->
  <section class="flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md mt-52" style="width: 500px; height: 400px;">
        <h2 class="text-2xl font-bold mb-6 text-center" style="color: #a9e405; font-size: 35px;">Login</h2>
        <form method="POST" action="{{ route('home') }}" class="mt-24">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                <input type="email" id="email" class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="mb-4 mt-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-green-500" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700" for="remember">Remember Me</span>
                </label>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" style="background-color: #a3de00;" class="text-white font-bold py-4 px-12 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="inline-block align-baseline font-bold text-2xl text-blue-500 hover:text-blue-800">
                    Forgot your password?
                </a>
                @endif
            </div>
        </form>
    </div>
  </section>

<!-- Login Form Section End -->
</body>
</html>

@endsection
