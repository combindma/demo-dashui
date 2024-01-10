<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Buttons</h1>
    <div class="flex flex-wrap items-center gap-3 bg-[rgba(241,241,241,1)] p-10">
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
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
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


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Avatars</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dashui-avatar size="xs"/>
            <x-dashui-avatar size="sm"/>
            <x-dashui-avatar/>
            <x-dashui-avatar size="lg"/>
            <x-dashui-avatar size="xl"/>
        </div>
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dashui-avatar initials="ww" size="xs"/>
            <x-dashui-avatar initials="az" size="sm" class="bg-amber-500"/>
            <x-dashui-avatar initials="fg" class="bg-red-300"/>
            <x-dashui-avatar initials="sd" size="lg" class="bg-sky-600"/>
            <x-dashui-avatar initials="ho" size="xl" class="bg-rose-400"/>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <x-dashui-avatar size="xs" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dashui-avatar size="sm" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dashui-avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dashui-avatar size="lg" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dashui-avatar size="xl" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Thumbnail</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dashui-thumbnail size="xs" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dashui-thumbnail size="sm" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dashui-thumbnail src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dashui-thumbnail size="lg" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <x-dashui-thumbnail size="xs"><x-gmdi-image-o class="h-full w-full"/></x-dashui-thumbnail>
            <x-dashui-thumbnail size="sm"><x-gmdi-category-o class="h-full w-full"/></x-dashui-thumbnail>
            <x-dashui-thumbnail><x-gmdi-sell-o class="h-full w-full"/></x-dashui-thumbnail>
            <x-dashui-thumbnail size="lg"><x-gmdi-browse-gallery class="h-full w-full"/></x-dashui-thumbnail>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Badge</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <x-dashui-card>
            <div class="flex flex-wrap items-center gap-3">
                <x-dashui-badge>Default</x-dashui-badge>
                <x-dashui-badge tone="info">Informational</x-dashui-badge>
                <x-dashui-badge tone="success">Success</x-dashui-badge>
                <x-dashui-badge tone="attention">Attention</x-dashui-badge>
                <x-dashui-badge tone="warning">Warning</x-dashui-badge>
                <x-dashui-badge tone="critical">Critical</x-dashui-badge>
                <x-dashui-badge progress="incomplete" tone="attention">Incomplete</x-dashui-badge>
                <x-dashui-badge progress="partiallyComplete" tone="warning">Partially complete</x-dashui-badge>
                <x-dashui-badge progress="complete">Complete</x-dashui-badge>
                <x-dashui-badge progress="complete" tone="success">Published</x-dashui-badge>
            </div>
        </x-dashui-card>
    </div>
</div>
