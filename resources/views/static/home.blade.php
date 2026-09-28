@extends('layouts.main')

@section('header-title', 'Главная страница | itProger App')

@section('content')
    <div style="flex: 3; display: flex; flex-direction: column; gap: 20px;"
        <div class="hero">
            <div style="text-align: center; color: white; z-index: 2;">
                <h1 style="font-size: 32px; margin-bottom: 10px; font-weight: bold;">Добро пожаловать в itProger App</h1>
                <p style="font-size: 16px; margin-bottom: 20px;">Учитесь программированию легко и удобно вместе с нами</p>
                <a href="#" style="background: #ff5722; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">Начать</a>
            </div>
        </div>

        <div class="main-block">
            <h1>Home page</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non totam qui quo nihil est deserunt aut possimus asperiores odit ea, itaque sed voluptate rem eligendi at accusamus quos debitis perferendis.</p>
        </div>

    @include('includes.aside')
    </div>

@endsection
