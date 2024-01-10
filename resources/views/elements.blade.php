<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Buttons</h1>
    <div class="flex flex-wrap items-center gap-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-button type="button">Default</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="primary">Primary</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="primary" tone="critical">Primary critical</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="primary" tone="success">Primary success</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="secondary">Secondary</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="subtle">Subtle</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="plain">Plain</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="plain" tone="critical">Plain critical</x-dash-ui-button>
        <x-dash-ui-button type="button" size="large">Large</x-dash-ui-button>

        <x-dash-ui-button type="button" disabled="true">Disabled</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="primary" disabled="true">Primary disabled</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="secondary" disabled="true">Secondary disabled</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="subtle" disabled="true">Subtle disabled</x-dash-ui-button>
        <x-dash-ui-button type="button" variant="plain" disabled="true">Plain disabled</x-dash-ui-button>

        <x-dash-ui-button type="button" fullWidth="true" size="large">Full width</x-dash-ui-button>
        <x-dash-ui-button as="link" href="#" variant="plain" class="p-0 text-left">
            This is a really long string of text that overflows onto the next line we
            need to put in a lot of words now you can see the alignment. It is very
            long but a customer could potentially name something this long.
        </x-dash-ui-button>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Button group</h1>
    <div class="flex flex-col gap-y-3 bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-button-group>
            <x-dash-ui-button type="button">Cancel</x-dash-ui-button>
            <x-dash-ui-button type="button" variant="primary">Save</x-dash-ui-button>
        </x-dash-ui-button-group>

        <x-dash-ui-button-group variant="segmented">
            <x-dash-ui-button type="button" class="rounded-r-none">Bold</x-dash-ui-button>
            <x-dash-ui-button type="button" class="rounded-none">Italic</x-dash-ui-button>
            <x-dash-ui-button type="button" class="rounded-l-none">underline</x-dash-ui-button>
        </x-dash-ui-button-group>

        <x-dash-ui-button-group variant="segmented">
            <x-dash-ui-button type="button" class="rounded-r-none" pressed="true">Pressed</x-dash-ui-button>
            <x-dash-ui-button type="button" class="rounded-none">Italic</x-dash-ui-button>
            <x-dash-ui-button type="button" class="rounded-l-none">underline</x-dash-ui-button>
        </x-dash-ui-button-group>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Avatars</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dash-ui-avatar size="xs"/>
            <x-dash-ui-avatar size="sm"/>
            <x-dash-ui-avatar/>
            <x-dash-ui-avatar size="lg"/>
            <x-dash-ui-avatar size="xl"/>
        </div>
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dash-ui-avatar initials="ww" size="xs"/>
            <x-dash-ui-avatar initials="az" size="sm" class="bg-amber-500"/>
            <x-dash-ui-avatar initials="fg" class="bg-red-300"/>
            <x-dash-ui-avatar initials="sd" size="lg" class="bg-sky-600"/>
            <x-dash-ui-avatar initials="ho" size="xl" class="bg-rose-400"/>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <x-dash-ui-avatar size="xs" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dash-ui-avatar size="sm" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dash-ui-avatar src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dash-ui-avatar size="lg" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
            <x-dash-ui-avatar size="xl" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"/>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Thumbnail</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <x-dash-ui-thumbnail size="xs" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dash-ui-thumbnail size="sm" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dash-ui-thumbnail src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
            <x-dash-ui-thumbnail size="lg" src="https://burst.shopifycdn.com/photos/black-leather-choker-necklace_373x@2x.jpg" alt="text"/>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <x-dash-ui-thumbnail size="xs"><x-gmdi-image-o class="h-full w-full"/></x-dash-ui-thumbnail>
            <x-dash-ui-thumbnail size="sm"><x-gmdi-category-o class="h-full w-full"/></x-dash-ui-thumbnail>
            <x-dash-ui-thumbnail><x-gmdi-sell-o class="h-full w-full"/></x-dash-ui-thumbnail>
            <x-dash-ui-thumbnail size="lg"><x-gmdi-browse-gallery class="h-full w-full"/></x-dash-ui-thumbnail>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Badge</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <x-dash-ui-card>
            <div class="flex flex-wrap items-center gap-3">
                <x-dash-ui-badge>Default</x-dash-ui-badge>
                <x-dash-ui-badge tone="info">Informational</x-dash-ui-badge>
                <x-dash-ui-badge tone="success">Success</x-dash-ui-badge>
                <x-dash-ui-badge tone="attention">Attention</x-dash-ui-badge>
                <x-dash-ui-badge tone="warning">Warning</x-dash-ui-badge>
                <x-dash-ui-badge tone="critical">Critical</x-dash-ui-badge>
                <x-dash-ui-badge progress="incomplete" tone="attention">Incomplete</x-dash-ui-badge>
                <x-dash-ui-badge progress="partiallyComplete" tone="warning">Partially complete</x-dash-ui-badge>
                <x-dash-ui-badge progress="complete">Complete</x-dash-ui-badge>
                <x-dash-ui-badge progress="complete" tone="success">Published</x-dash-ui-badge>
            </div>
        </x-dash-ui-card>
    </div>
</div>
