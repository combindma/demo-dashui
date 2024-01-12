@extends('layout')
@section('content')
    <x-dashui-top-bar userName="Dharma" userInitials="OH" menuId="sidebar-nav" logo="https://cdn.shopify.com/s/files/1/2376/3301/files/Shopify_Secondary_Inverted.png" url="#">
        <x-slot:searchField>
            <form action="#">
                <x-dashui-search-input iconLeft="true" type="search" name="search" placeholder="Search..." aria-label="Search" class="!mb-0 bg-neutral-700 text-white placeholder:text-primary-400"/>
            </form>
        </x-slot:searchField>
        <x-slot:userMenu>
            <div class="p-2">
                <span class="font-bold">Daniel Piers</span>
                <span class="text-neutral-500">email@company.com</span>
            </div>
            <x-dashui-action-link as="link" href="#0" label="Manage account"/>
            <x-dashui-action-link as="link" href="#0" label="Sign out"/>
        </x-slot:userMenu>
    </x-dashui-top-bar>
    <div class="lg:flex mt-[60px] bg-[rgb(241,241,241)]">
        <aside class="sidebar sidebar--static@md js-sidebar" data-static-class="relative z-[1] w-full max-w-[15rem]" id="sidebar-nav">
            <div class="sidebar__panel">
                <!-- 👇 header visible only on mobile -->
                <header class="sidebar__header bg-primary-900 text-white py-3 lg:py-5 px-5 lg:px-8 border-b border-gray-300 z-[2]">
                    <img class="w-[95px] h-auto" src="https://cdn.shopify.com/s/files/1/2376/3301/files/Shopify_Secondary_Inverted.png" alt="Logo">

                    <button class="sidebar__close-btn hover:bg-neutral-600 js-sidebar__close-btn js-tab-focus">
                        <svg class="icon inline-block text-inherit fill-current leading-none shrink-0 w-[16px] h-[16px]" viewBox="0 0 16 16">
                            <g stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
                    </button>
                </header>

                <div class="relative z-[1]">
                    <!-- start sidebar content -->
                    <div class="p-5 lg:p-8">
                        <p class="text-base">Navigation menu.</p>
                    </div>
                    <!-- end sidebar content -->
                </div>
            </div>
        </aside>

        <main class="relative z-[1] grow h-screen sidebar-loaded:show">
            <!-- start main content -->
            <div class="p-5 lg:p-8">
                <p class="text-lg">Main content.</p>
            </div>
            <!-- end main content -->
        </main>
    </div>
@endsection
