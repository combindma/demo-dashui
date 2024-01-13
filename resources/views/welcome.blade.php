@extends('layout')
@section('content')
    <div class="mx-auto mt-14 max-w-7xl p-4 lg:p-6">
        <h1 class="mb-3 text-2xl font-bold lg:text-3xl">Components</h1>
        <p class="mb-10 text-lg">Components are the reusable blade blocks for creating an admin experience like Shopify.</p>

      <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Elements</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.elements.buttons')
                @include('components.elements.avatars')
                @include('components.elements.thumbnail')
                @include('components.elements.badge')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Layout</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.layout.box')
                @include('components.layout.card')
                @include('components.layout.callout-card')
                @include('components.layout.divider')
                @include('components.layout.empty-state')
                @include('components.layout.media-card')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Form & input</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.form.checkbox')
                @include('components.form.inputs')
                @include('components.form.search')
                @include('components.form.drop-zone')
                @include('components.form.tag')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Feedback</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.feedback.banner')
                @include('components.feedback.alert')
                @include('components.feedback.banner')
                @include('components.feedback.inline-error')
                @include('components.feedback.flash-message')
                @include('components.feedback.circle-loader')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Overlay</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.overlay.popover')
                @include('components.overlay.tooltip')
                @include('components.overlay.modal')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Tables</h4>
            </div>
            <div class="lg:col-span-9">
                @include('components.table.index-table')
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">Navigation</h4>
            </div>
            <div class="lg:col-span-9">
               @include('components.navigation.action-link')
               @include('components.navigation.tabs')
               @include('components.navigation.page-header')
               @include('components.navigation.top-bar')
               @include('components.navigation.navigation')
            </div>
        </div>

        <div class="grid grid-cols-1 items-center gap-4 lg:grid-cols-12 mb-10">
            <div class="lg:col-span-3">
                <h4 class="text-xl font-bold lg:text-2xl">App</h4>
            </div>
            <div class="lg:col-span-9">
                <a href="{{ url('frame') }}" class="underline font-medium text-sl" target="_blank">Show page</a>
            </div>
        </div>
    </div>
@endsection
