@extends('layouts.app')
@section('title', 'Users')
@section('content')

    <x-header />

    <div class="grid grid-cols-12">
        <div class="col-span-2">
            <x-sidebar />
        </div>

        @livewire('users-table')

@endsection
