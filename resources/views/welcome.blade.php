<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/tailwind.css'])
    @livewireStyles
</head>
<body class="antialiased">
<div class="mx-auto max-w-5xl py-14">
    @include('elements')
    @include('layout')
    @include('overlay')
    @include('feedback')
    @include('form')
    @include('tables')
    @include('navigation')
    @include('pages')
</div>
@livewireScripts
<script src="https://unpkg.com/codyhouse-framework/main/assets/js/util.js"></script>
@vite(['resources/js/app.js'])
</body>
</html>
