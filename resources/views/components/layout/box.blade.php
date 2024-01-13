<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Box</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-box>
            <div class="bg-gray-400">Content inside a box</div>
        </x-dashui-box>
        <x-dashui-box border="true">Content box with border=true</x-dashui-box>
        <x-dashui-box shadow="true">Content box with shadow=true</x-dashui-box>
        <x-dashui-box rounded="true" class="bg-white">
            <div class="p-2">Content box with rounded=true</div>
        </x-dashui-box>
        <x-dashui-box class="bg-blue-200 p-3">
            <div class="bg-blue-900 text-white">Content box with padding</div>
        </x-dashui-box>
    </div>
</div>
