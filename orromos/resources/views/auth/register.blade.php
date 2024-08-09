@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #333333;">


<!-- Registration Section Start -->
  <section class="flex items-center justify-center ">
    <div class="bg-white p-8 rounded-md shadow-md mt-40" style="width: 500px; height: 500px;">
        <h2 class="text-2xl font-bold mb-6 text-center" style="color: #a9e405; font-size: 35px;">Register</h2>
        <form method="POST" action="{{ route('home') }}" class="mt-24">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name" class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" placeholder="Enter your name">
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline is-valid @error('email') @enderror" placeholder="Enter your email address" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" required autocomplete="new-password" name="password" placeholder="Enter your password">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" required autocomplete="new-password" id="password-confirm" class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm your password">
            </div>
            <div class="flex items-center justify-between mt-6">
                <button type="submit" style="background-color: #a3de00; hover: background-color: red" class= "text-white font-bold py-4 px-10 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button>
            </div>
        </form>
    </div>
  </section>
  <!-- Registration Section Start -->
</body>
</html>

@endsection
