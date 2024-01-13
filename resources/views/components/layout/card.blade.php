<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Card</h1>
    <div class="flex flex-col gap-y-4 bg-gray-200/60 p-4 lg:p-4 lg:p-10">
        <x-dashui-card>Basic card</x-dashui-card>
        <x-dashui-card variant="subdued">
            <x-slot:heading>
                With subdued background
            </x-slot:heading>
            Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or actions.
        </x-dashui-card>
        <x-dashui-card>
            <x-slot:heading>
                With section
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dashui-card>

        <x-dashui-card hasDivider="true">
            <x-slot:heading>
                With divider
            </x-slot:heading>
            <p>Use when you have a distinct piece of information to communicate to users.</p>
        </x-dashui-card>

        <x-dashui-card>
            <x-slot:heading>
                With multiple sections
            </x-slot:heading>
            <x-slot:subheading>
                Subheading section
            </x-slot:subheading>
            <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
        </x-dashui-card>

        <x-dashui-card-stack>
            <x-dashui-card reset="true">
                <x-slot:heading>
                    With subdued section
                </x-slot:heading>
                <p>View a summary of your online store’s performance, including sales, visitors, top products, and referrals.</p>
            </x-dashui-card>
            <x-dashui-card variant="subdued" reset="true">
                <x-slot:heading>
                    With subdued background
                </x-slot:heading>
                Use for content that you want to deprioritize. Subdued cards don’t stand out as much as cards with white backgrounds so don’t use them for information or
                actions.
            </x-dashui-card>
        </x-dashui-card-stack>


        <x-dashui-card>
            <x-slot:heading>
                With header actions
            </x-slot:heading>
            <x-slot:actions>
                <x-dashui-button variant="plain">Add variant</x-dashui-button>
            </x-slot:actions>
            Add variants if this product comes in multiple versions, like different sizes or colors.
        </x-dashui-card>

        <x-dashui-card>
            <x-slot:heading>
                With footer actions
            </x-slot:heading>
            1 × Oasis Glass, 4-Pack
            <x-slot:footer>
                <x-dashui-button type="button">Edit shipment</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add tracking number</x-dashui-button>
            </x-slot:footer>
        </x-dashui-card>
    </div>
</div>
