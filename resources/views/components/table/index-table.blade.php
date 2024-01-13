<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Index table</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <p class="font-semibold text-sm mb-3">Default table</p>
        <x-dashui-index-table :headings="[
            ['title' => 'Order'],
            ['title' => 'Date',],
            ['title' => 'Customer'],
            ['title' => 'Total', 'alignment' => 'end'],
            ['title' => 'Payment status'],
            ['title' => 'Fulfillment status'],
            ['title' => '', 'alignment' => 'center'],
        ]">
            <x-dashui-table-row :id="1020">
                <x-dashui-table-cell class="font-bold">#1020</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:34pm</x-dashui-table-cell>
                <x-dashui-table-cell>Jaydon Stanton</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$969.44</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell class="text-center"><x-dashui-button as="link" href="#0" variant="plain">Edit</x-dashui-button></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-dashui-table-row :id="1019">
                <x-dashui-table-cell class="font-bold">#1019</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:44pm</x-dashui-table-cell>
                <x-dashui-table-cell>Ruben Westerfelt</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$701.19</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="partiallyComplete">Partially paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell class="text-center"><x-dashui-button as="link" href="#0" variant="plain">Edit</x-dashui-button></x-dashui-table-cell>
            </x-dashui-table-row>
            <x-dashui-table-row :id="1018">
                <x-dashui-table-cell class="font-bold">#1018</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:54pm</x-dashui-table-cell>
                <x-dashui-table-cell>Leo Carder</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$798.24</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell class="text-center"><x-dashui-button as="link" href="#0" variant="plain">Edit</x-dashui-button></x-dashui-table-cell>
            </x-dashui-table-row>
        </x-dashui-index-table>

        <p class="font-semibold text-sm mb-3 mt-5">Table with row navigation url</p>
        <x-dashui-index-table :headings="[
            ['title' => 'Order'],
            ['title' => 'Date',],
            ['title' => 'Customer'],
            ['title' => 'Total', 'alignment' => 'end'],
            ['title' => 'Payment status'],
            ['title' => 'Fulfillment status'],
        ]">
            <x-dashui-table-row :id="1020" url="#0">
                <x-dashui-table-cell><a href="#0" class="font-bold text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer hover:underline">#1020</a></x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:34pm</x-dashui-table-cell>
                <x-dashui-table-cell>Jaydon Stanton</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$969.44</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-dashui-table-row :id="1019" url="#0">
                <x-dashui-table-cell><a href="#0" class="font-bold text-sm text-blue-600 hover:text-blue-800 hover:cursor-pointer hover:underline">#1019</a></x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:44pm</x-dashui-table-cell>
                <x-dashui-table-cell>Ruben Westerfelt</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$701.19</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="partiallyComplete">Partially paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>
        </x-dashui-index-table>

        <p class="font-semibold text-sm mb-3 mt-5">Table with dropdown actions</p>
        <x-dashui-index-table :headings="[
            ['title' => 'Order'],
            ['title' => 'Date',],
            ['title' => 'Customer'],
            ['title' => 'Total', 'alignment' => 'end'],
            ['title' => 'Payment status'],
            ['title' => 'Fulfillment status'],
            ['title' => '', 'alignment' => 'end'],
        ]">
            <x-dashui-table-row :id="1020">
                <x-dashui-table-cell class="font-bold">#1020</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:34pm</x-dashui-table-cell>
                <x-dashui-table-cell>Jaydon Stanton</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$969.44</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">
                    <x-dashui-button type="button" variant="subtle" aria-controls="popover-table-1">Options <x-gmdi-expand-more class="w-4 h-4"/></x-dashui-button>
                    <x-dashui-popover id="popover-table-1">
                        <x-dashui-action-link type="button" label="Action"/>
                    </x-dashui-popover>
                </x-dashui-table-cell>
            </x-dashui-table-row>

            <x-dashui-table-row :id="1019">
                <x-dashui-table-cell class="font-bold">#1019</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:44pm</x-dashui-table-cell>
                <x-dashui-table-cell>Ruben Westerfelt</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$701.19</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="partiallyComplete">Partially paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">
                    <x-dashui-button type="button" variant="subtle" aria-controls="popover-table-1">Options <x-gmdi-expand-more class="w-4 h-4"/></x-dashui-button>
                    <x-dashui-popover id="popover-table-1">
                        <x-dashui-action-link type="button" label="Action"/>
                    </x-dashui-popover>
                </x-dashui-table-cell>
            </x-dashui-table-row>
        </x-dashui-index-table>

        <p class="font-semibold text-sm mb-3 mt-5">Table with pagination</p>
        <x-dashui-index-table :headings="[
            ['title' => 'Order'],
            ['title' => 'Date',],
            ['title' => 'Customer'],
            ['title' => 'Total', 'alignment' => 'end'],
            ['title' => 'Payment status'],
            ['title' => 'Fulfillment status']
        ]">
            <x-dashui-table-row :id="1020">
                <x-dashui-table-cell class="font-bold">#1020</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:34pm</x-dashui-table-cell>
                <x-dashui-table-cell>Jaydon Stanton</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$969.44</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-dashui-table-row :id="1019">
                <x-dashui-table-cell class="font-bold">#1019</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:44pm</x-dashui-table-cell>
                <x-dashui-table-cell>Ruben Westerfelt</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$701.19</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="partiallyComplete">Partially paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-slot:pagination>
                <x-dashui-pagination label="1-50 of 8,450 orders" next="#0"/>
            </x-slot:pagination>
        </x-dashui-index-table>

        <p class="font-semibold text-sm mb-3 mt-5">Table with filter</p>
        <x-dashui-index-table :headings="[
            ['title' => 'Order'],
            ['title' => 'Date',],
            ['title' => 'Customer'],
            ['title' => 'Total', 'alignment' => 'end'],
            ['title' => 'Payment status'],
            ['title' => 'Fulfillment status']
        ]">
            <x-dashui-table-row :id="1020">
                <x-dashui-table-cell class="font-bold">#1020</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:34pm</x-dashui-table-cell>
                <x-dashui-table-cell>Jaydon Stanton</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$969.44</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="complete">Paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-dashui-table-row :id="1019">
                <x-dashui-table-cell class="font-bold">#1019</x-dashui-table-cell>
                <x-dashui-table-cell>Jul 20 at 4:44pm</x-dashui-table-cell>
                <x-dashui-table-cell>Ruben Westerfelt</x-dashui-table-cell>
                <x-dashui-table-cell class="text-right">$701.19</x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="partiallyComplete">Partially paid</x-dashui-badge></x-dashui-table-cell>
                <x-dashui-table-cell><x-dashui-badge progress="incomplete">Unfulfilled</x-dashui-badge></x-dashui-table-cell>
            </x-dashui-table-row>

            <x-slot:filter>
                <div class="flex flex-wrap items-center gap-x-2">
                    <x-dashui-button as="link" href="#0" variant="subtle" class="bg-neutral-200 hover:bg-neutral-200">All</x-dashui-button>
                    <x-dashui-button type="button" variant="subtle" aria-controls="popover-filter-1">Payment <x-gmdi-expand-more class="w-4 h-4"/></x-dashui-button>
                    <x-dashui-button type="button" variant="subtle" aria-controls="popover-filter-2">Status <x-gmdi-expand-more class="w-4 h-4"/></x-dashui-button>
                    <x-dashui-popover id="popover-filter-1">
                        <x-dashui-action-link as="link" href="#0" label="Paid"/>
                        <x-dashui-action-link as="link" href="#0" label="Partially paid"/>
                    </x-dashui-popover>
                    <x-dashui-popover id="popover-filter-2">
                        <x-dashui-action-link type="button" label="Unfulfilled" :active="true"/>
                        <x-dashui-action-link as="link" href="#0" label="Partially fulfilled"/>
                        <x-dashui-action-link as="link" href="#0" label="Completed"/>
                    </x-dashui-popover>
                </div>
                <div class="flex items-center gap-x-1">
                    <x-dashui-expandable-search type="search" name="filter-search" id="filter-search" placeholder="Search..."/>
                    <x-dashui-button type="button" aria-controls="popover-sort">
                        <x-gmdi-filter-list class="w-4 h-4"/>
                    </x-dashui-button>
                    <x-dashui-popover id="popover-sort" role="dialog">
                        <span class="text-xs">Sort by</span>
                        <x-dashui-action-link type="button" label="Date ascending"/>
                        <x-dashui-action-link type="button" label="Price low"/>
                    </x-dashui-popover>
                </div>
            </x-slot:filter>
            <x-slot:pagination>
                <x-dashui-pagination label="1-50 of 8,450 orders" next="#0"/>
            </x-slot:pagination>
        </x-dashui-index-table>
    </div>
</div>
