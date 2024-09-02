@extends('layouts.app')
@section('title', 'Login')
@section('content')


    <section class="h-screen flex items-center">
        <div class="m-auto w-1/3 shadow-lg rounded-lg border border-slate-50 p-2">
            <img src="{{ Vite::asset('resources/images/MMML-LOGO.jpg') }}" class="w-24 h-24 rounded-full mx-auto mb-6"
                alt="Company Logo">
            <h1 class="text-2xl font-bold text-center">Login</h1>
            <div class="grid grid-cols-1 gap-5 px-4 py-2">

                <div class="relative">

                    <select class="outline-none border border-slate-200 px-2 py-3 rounded-lg w-full pl-10">
                        <option value="">Select Branch</option>
                        <option value="gensan">Gensan</option>
                        <option value="isulan">Isulan</option>
                        <option value="koronadal">Koronadal</option>
                        <option value="polomolok">Polomolok</option>
                        <option value="surallah">Surallah</option>
                        <option value="tacurong">Tacurong</option>
                    </select>
                    <i class="fa-solid fa-code-branch absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>
                </div>

                <div class="relative">
                    <input type="text" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                        placeholder="Username">

                    <i class="fa-regular fa-user absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>
                </div>
                <div class="relative">
                    <input type="text" class="w-full outline-none border border-slate-200 rounded-lg pe-4 pl-10 py-3"
                        placeholder="Password">
                    <i class="fas fa-unlock-alt absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5"></i>
                </div>

                <button class="w-full bg-yellow-500 hover:bg-yellow-600 rounded-lg py-2 font-semibold text-white">
                    Login
                </button>

                <hr>
                <a href="">
                    <p class="text-xs text-slate-500 text-center hover:text-slate-900">Forgot Password?</p>
                </a>
            </div>
        </div>
    </section>
@endsection
