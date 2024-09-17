@extends('layouts.app')
@section('title', 'Login')
@section('content')


    <form action="{{ route('login') }}" method="POST">
        @csrf
        <section class="h-screen flex items-center">
            <div class="m-auto w-1/3 shadow-lg rounded-lg border border-slate-50 p-2">
                <img src="{{ Vite::asset('resources/images/MMML-LOGO.jpg') }}" class="w-24 h-24 rounded-full mx-auto mb-6"
                    alt="Company Logo">
                <h1 class="text-2xl font-bold text-center">Login</h1>
                <div class="grid grid-cols-1 gap-5 px-4 py-2">


                    <div class="relative">
                        <input type="text" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                            placeholder="Username" name="username">

                        <i class="fa-regular fa-user absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>
                    </div>
                    <div class="relative">
                        <input type="password" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                            placeholder="Password" name="password">
                        <i class="fas fa-unlock-alt absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>
                    </div>

                    @if ($errors->has('username'))
                        <div class="text-red-500 text-sm mt-2 w-full bg-red-100 rounded py-2 px-2">
                            {{ $errors->first('username') }}
                        </div>
                    @endif

                    <button class="w-full bg-yellow-500 hover:bg-yellow-600 rounded-lg py-2 font-semibold text-white"
                        type="submit">
                        Login
                    </button>

                    <hr>
                    <a href="">
                        <p class="text-xs text-slate-500 text-center hover:text-slate-900">Forgot Password?</p>
                    </a>
                </div>
            </div>

        </section>
    </form>
@endsection
