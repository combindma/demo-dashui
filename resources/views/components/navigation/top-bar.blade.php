<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Top bar</h1>
    <div class="relative bg-gray-200/60">
        <x-dashui-top-bar class="absolute" userName="Dharma" userInitials="OH" menuId="menu-sidebar" logo="{{ asset('assets/img/logo-alt.svg') }}" url="#">
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
        <div class="min-h-[200px] pt-20 px-4">
            <p class="text-sm">Page content</p>
        </div>
    </div>
</div>
