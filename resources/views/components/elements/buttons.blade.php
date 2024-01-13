<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Buttons</h1>
    <div class="flex flex-wrap items-center gap-3 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-button type="button">Default</x-dashui-button>
        <x-dashui-button type="button" variant="primary">Primary</x-dashui-button>
        <x-dashui-button type="button" variant="primary" tone="critical">Primary critical</x-dashui-button>
        <x-dashui-button type="button" variant="primary" tone="success">Primary success</x-dashui-button>
        <x-dashui-button type="button" variant="secondary">Secondary</x-dashui-button>
        <x-dashui-button type="button" variant="subtle">Subtle</x-dashui-button>
        <x-dashui-button type="button" variant="plain">Plain</x-dashui-button>
        <x-dashui-button type="button" variant="plain" tone="critical">Plain critical</x-dashui-button>
        <x-dashui-button type="button" size="large">Large</x-dashui-button>

        <x-dashui-button type="button" disabled="true">Disabled</x-dashui-button>
        <x-dashui-button type="button" variant="primary" disabled="true">Primary disabled</x-dashui-button>
        <x-dashui-button type="button" variant="secondary" disabled="true">Secondary disabled</x-dashui-button>
        <x-dashui-button type="button" variant="subtle" disabled="true">Subtle disabled</x-dashui-button>
        <x-dashui-button type="button" variant="plain" disabled="true">Plain disabled</x-dashui-button>

        <x-dashui-button type="button" fullWidth="true" size="large">Full width</x-dashui-button>
        <x-dashui-button as="link" href="#" variant="plain" class="p-0 text-left">
            This is a really long string of text that overflows onto the next line we
            need to put in a lot of words now you can see the alignment. It is very
            long but a customer could potentially name something this long.
        </x-dashui-button>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Button group</h1>
    <div class="flex flex-col gap-y-3 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-button-group>
            <x-dashui-button type="button">Cancel</x-dashui-button>
            <x-dashui-button type="button" variant="primary">Save</x-dashui-button>
        </x-dashui-button-group>

        <x-dashui-button-group variant="segmented">
            <x-dashui-button type="button" class="rounded-r-none">Bold</x-dashui-button>
            <x-dashui-button type="button" class="rounded-none">Italic</x-dashui-button>
            <x-dashui-button type="button" class="rounded-l-none">underline</x-dashui-button>
        </x-dashui-button-group>

        <x-dashui-button-group variant="segmented">
            <x-dashui-button type="button" class="rounded-r-none" pressed="true">Pressed</x-dashui-button>
            <x-dashui-button type="button" class="rounded-none">Italic</x-dashui-button>
            <x-dashui-button type="button" class="rounded-l-none">underline</x-dashui-button>
        </x-dashui-button-group>
    </div>
</div>
