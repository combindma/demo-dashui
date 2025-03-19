@extends('layout')
@section('content')
    <x-dashui-top-bar userName="Dharma" userInitials="OH" menuId="sidebar-nav" logo="{{ asset('assets/img/logo-alt.svg') }}" url="#">
        <x-slot:searchField>
            <form action="#">
                <x-dashui-search-input iconLeft="true" type="search" name="search" placeholder="Search..." aria-label="Search" class="mb-0! bg-neutral-700 text-white placeholder:text-primary-400"/>
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
    <div class="frame">
        <aside class="sidebar sidebar--static@md js-sidebar" data-static-class="w-full z-1 max-w-[15rem]" id="sidebar-nav">
            <div class="sidebar__panel">
                <!-- 👇 header visible only on mobile -->
                <header class="sidebar__header">
                    <img class="h-auto w-[95px]" src="{{ asset('assets/img/logo-alt.svg') }}" alt="Logo">

                    <button class="sidebar__close-btn js-sidebar__close-btn js-tab-focus bg-neutral-700 hover:bg-neutral-600">
                        <svg class="inline-block shrink-0 fill-current leading-none text-inherit icon w-[16px] h-[16px]" viewBox="0 0 16 16">
                            <g stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
                    </button>
                </header>

                <x-dashui-navigation>
                    <x-dashui-navigation-section>
                        <x-dashui-navigation-item label="Dashboard" url="#" :selected="true">
                            <x-slot:icon>
                                <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M8.344 3.692a2.25 2.25 0 0 1 3.312 0l3.854 4.19a3.75 3.75 0 0 1 .99 2.538v3.33a2.75 2.75 0 0 1-2.75 2.75h-1.75a1.5 1.5 0 0 1-1.5-1.5v-2h-1v2a1.5 1.5 0 0 1-1.5 1.5h-1.75a2.75 2.75 0 0 1-2.75-2.75v-3.33c0-.94.353-1.847.99-2.539l3.854-4.189Zm2.208 1.016a.75.75 0 0 0-1.104 0l-3.854 4.189a2.25 2.25 0 0 0-.594 1.523v3.33c0 .69.56 1.25 1.25 1.25h1.75v-2a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v2h1.75c.69 0 1.25-.56 1.25-1.25v-3.33a2.25 2.25 0 0 0-.594-1.523l-3.854-4.19Z"></path></svg>
                            </x-slot:icon>
                        </x-dashui-navigation-item>

                        <x-dashui-navigation-item label="Orders" url="#" badge="15">
                            <x-slot:icon>
                                <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M6.976 3.5a2.75 2.75 0 0 0-2.72 2.347l-.662 4.46a8.75 8.75 0 0 0-.094 1.282v1.661a3.25 3.25 0 0 0 3.25 3.25h6.5a3.25 3.25 0 0 0 3.25-3.25v-1.66c0-.43-.032-.858-.095-1.283l-.66-4.46a2.75 2.75 0 0 0-2.72-2.347h-6.05Zm-1.237 2.567a1.25 1.25 0 0 1 1.237-1.067h6.048c.62 0 1.146.454 1.237 1.067l.583 3.933h-2.484a1.25 1.25 0 0 0-1.185.855l-.159.474a.25.25 0 0 1-.237.171h-1.558a.25.25 0 0 1-.237-.17l-.159-.475a1.25 1.25 0 0 0-1.185-.855h-2.484l.583-3.933Zm-.738 5.433-.001.09v1.66c0 .966.784 1.75 1.75 1.75h6.5a1.75 1.75 0 0 0 1.75-1.75v-1.75h-2.46l-.1.303a1.75 1.75 0 0 1-1.66 1.197h-1.56a1.75 1.75 0 0 1-1.66-1.197l-.1-.303h-2.46Z"></path></svg>
                            </x-slot:icon>
                        </x-dashui-navigation-item>

                        <x-dashui-navigation-item label="Products" url="#" :open="true" :childSelected="true" active="true">
                            <x-slot:icon>
                                <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path d="M13 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path><path fill-rule="evenodd" d="M11.276 3.5a3.75 3.75 0 0 0-2.701 1.149l-4.254 4.417a2.75 2.75 0 0 0 .036 3.852l2.898 2.898a2.5 2.5 0 0 0 3.502.033l4.747-4.571a3.25 3.25 0 0 0 .996-2.341v-2.187a3.25 3.25 0 0 0-3.25-3.25h-1.974Zm-1.62 2.19a2.25 2.25 0 0 1 1.62-.69h1.974c.966 0 1.75.784 1.75 1.75v2.187c0 .475-.194.93-.536 1.26l-4.747 4.572a1 1 0 0 1-1.401-.014l-2.898-2.898a1.25 1.25 0 0 1-.016-1.75l4.253-4.418Z"></path></svg>
                            </x-slot:icon>
                            <x-slot:subNavigation>
                                <x-dashui-sub-navigation-item label="Collections" url="#" :selected="true"/>
                                <x-dashui-sub-navigation-item label="Inventory" url="#" :selected="false"/>
                            </x-slot:subNavigation>
                        </x-dashui-navigation-item>
                    </x-dashui-navigation-section>

                    <x-dashui-navigation-section title="Sales channel">
                        <x-dashui-navigation-item label="Online store" url="#" :external="true">
                            <x-slot:icon>
                                <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M13.96 2.5c.448 0 .863.24 1.085.63l1.79 3.133c.108.188.165.402.165.62v.867c0 .965-.497 1.815-1.25 2.305v1.445a2.75 2.75 0 0 1-2.75 2.75h-.5v1.25h.75a.75.75 0 0 1 0 1.5h-6.5a.75.75 0 0 1 0-1.5h.75v-1.25h-.5a2.75 2.75 0 0 1-2.75-2.75v-1.445a2.748 2.748 0 0 1-1.25-2.305v-.867c0-.218.057-.432.165-.62l1.79-3.133a1.25 1.25 0 0 1 1.085-.63h7.92Zm-7.775 1.5-1.685 2.95v.8c0 .69.56 1.25 1.25 1.25h.25c.69 0 1.25-.56 1.25-1.25v-.5a.75.75 0 0 1 1.5 0v.5a1.25 1.25 0 1 0 2.5 0v-.5a.75.75 0 0 1 1.5 0v.5c0 .69.56 1.25 1.25 1.25h.25c.69 0 1.25-.56 1.25-1.25v-.8l-1.685-2.95h-7.63Zm8.065 6.5h-.25a2.742 2.742 0 0 1-2-.863 2.742 2.742 0 0 1-2 .863 2.742 2.742 0 0 1-2-.863 2.742 2.742 0 0 1-2 .863h-.25v1c0 .69.56 1.25 1.25 1.25h6c.69 0 1.25-.56 1.25-1.25v-1Zm-5.25 5v-1.25h2v1.25h-2Z"></path></svg>
                            </x-slot:icon>
                            <x-slot:action>
                                <x-dashui-button as="link" href="#" target="_blank" variant="subtle" class="p-1">
                                    <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M13 10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-1.5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"></path><path fill-rule="evenodd" d="M10 4c-2.476 0-4.348 1.23-5.577 2.532a9.266 9.266 0 0 0-1.4 1.922 5.98 5.98 0 0 0-.37.818c-.082.227-.153.488-.153.728s.071.501.152.728c.088.246.213.524.371.818.317.587.784 1.27 1.4 1.922 1.229 1.302 3.1 2.532 5.577 2.532 2.476 0 4.348-1.23 5.577-2.532a9.265 9.265 0 0 0 1.4-1.922 5.98 5.98 0 0 0 .37-.818c.082-.227.153-.488.153-.728s-.071-.501-.152-.728a5.984 5.984 0 0 0-.371-.818 9.269 9.269 0 0 0-1.4-1.922c-1.229-1.302-3.1-2.532-5.577-2.532Zm-5.999 6.002v-.004c.004-.02.017-.09.064-.223a4.5 4.5 0 0 1 .278-.608 7.768 7.768 0 0 1 1.17-1.605c1.042-1.104 2.545-2.062 4.487-2.062 1.942 0 3.445.958 4.486 2.062a7.77 7.77 0 0 1 1.17 1.605c.13.24.221.447.279.608.047.132.06.203.064.223v.004c-.004.02-.017.09-.064.223a4.503 4.503 0 0 1-.278.608 7.768 7.768 0 0 1-1.17 1.605c-1.042 1.104-2.545 2.062-4.487 2.062-1.942 0-3.445-.958-4.486-2.062a7.766 7.766 0 0 1-1.17-1.605 4.5 4.5 0 0 1-.279-.608c-.047-.132-.06-.203-.064-.223Z"></path></svg>
                                </x-dashui-button>
                            </x-slot:action>
                        </x-dashui-navigation-item>
                    </x-dashui-navigation-section>

                    <x-dashui-navigation-section :sticky="true">
                        <x-dashui-navigation-item label="Settings" url="#">
                            <x-slot:icon>
                                <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M8.013 4.389c0-.767.621-1.389 1.389-1.389h1.196c.767 0 1.39.622 1.39 1.389v.66c0 .153.101.33.307.436.141.074.278.155.411.241.196.128.402.13.536.052l.576-.332a1.389 1.389 0 0 1 1.897.508l.599 1.037a1.39 1.39 0 0 1-.509 1.897l-.621.359c-.131.075-.232.249-.225.477a5.135 5.135 0 0 1-.004.427c-.012.233.09.412.223.489l.627.362c.665.384.892 1.233.509 1.897l-.599 1.037a1.39 1.39 0 0 1-1.897.508l-.672-.388c-.132-.076-.332-.076-.526.045a4.928 4.928 0 0 1-.325.185c-.206.108-.308.284-.308.437v.778a1.39 1.39 0 0 1-1.389 1.39h-1.196a1.389 1.389 0 0 1-1.39-1.39v-.778c0-.153-.102-.33-.307-.437a4.96 4.96 0 0 1-.325-.185c-.194-.121-.395-.12-.526-.045l-.672.388a1.39 1.39 0 0 1-1.898-.508l-.598-1.037a1.389 1.389 0 0 1 .509-1.897l.627-.362c.133-.077.235-.256.223-.49a5.03 5.03 0 0 1-.004-.426c.007-.228-.094-.401-.225-.477l-.621-.359a1.389 1.389 0 0 1-.509-1.897l.598-1.037a1.389 1.389 0 0 1 1.898-.508l.576.332c.133.078.34.076.535-.052a4.81 4.81 0 0 1 .412-.24c.205-.108.308-.284.308-.437v-.66Zm1.987 7.611a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path></svg>
                            </x-slot:icon>
                        </x-dashui-navigation-item>
                    </x-dashui-navigation-section>
                </x-dashui-navigation>
            </div>
        </aside>

        <main class="relative min-h-screen grow sidebar-loaded:show">
            <!-- start main content -->
            <div class="p-5 lg:p-8">
                <p class="text-lg">Main content.</p>
            </div>
            <!-- end main content -->
        </main>
    </div>
@endsection
