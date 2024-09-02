@extends('layouts.app')
@section('title', 'Login')
@section('content')

    <x-header />

    <div class="grid grid-cols-12">
        <div class="col-span-2">
            <x-sidebar />
        </div>

        @livewire('branch-table')

@endsection
