<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Search input</h1>
    <div class="bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <div class="mb-5 max-w-sm">
            <x-dashui-search-input type="search" name="search-input" placeholder="Search..." aria-label="Search"/>
        </div>
        <div class="mb-5 max-w-sm">
            <x-dashui-search-input iconLeft="true" type="search" name="search-input-left" placeholder="Search..." aria-label="Search"/>
        </div>

        <div class="max-w-sm">
            <x-dashui-card>
                <x-slot:heading>
                    Expandable search input
                </x-slot:heading>
                <x-dashui-expandable-search type="search" name="expandable-search" id="expandable-search" placeholder="Search..."/>
            </x-dashui-card>
        </div>
    </div>
</div>
