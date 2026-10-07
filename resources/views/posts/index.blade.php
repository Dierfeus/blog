@extends('layouts.main')

@section('header-title')
    Страница посты тут будут
@endsection


@section('content')
    @section('content')
        <div class="hero">
        </div>
        <div class="wrapper-content">
            <div class="main-container">
                <div class="main-block">
                    <h1>Посты</h1>
                    <p>посты будуут.</p>
                </div>
            </div>
            @include('includes.aside')
        </div>
@endsection
