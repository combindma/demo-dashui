<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Form elements</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <form class="mb-4">
            <fieldset class="mb-5 lg:mb-8">
                <legend class="mb-3 text-contrast-higher font-medium">Custom Radio Buttons</legend>

                <ul class="flex flex-col gap-1 lg:gap-1.5">
                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-1" checked>
                        <label for="radio-1">Choice 1</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-2">
                        <label for="radio-2">Choice 2</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-3">
                        <label for="radio-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, vero. Dolore et eveniet maxime hic tempora neque explicabo eaque doloremque!</label>
                    </li>
                </ul>
            </fieldset>

            <fieldset>
                <legend class="mb-3 text-contrast-higher font-medium">Custom Checkboxes</legend>

                <ul class="flex flex-col gap-1 lg:gap-1.5">
                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-1" checked>
                        <label for="checkbox-1">Option 1</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-2">
                        <label for="checkbox-2">Option 2</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-3">
                        <label for="checkbox-3">Option 3</label>
                    </li>
                </ul>
            </fieldset>
        </form>

        <form>
            <fieldset class="mb-5 lg:mb-8">
                <legend class="mb-3 text-contrast-higher font-medium">Inline custom Radio Buttons</legend>

                <ul class="flex flex-wrap gap-5">
                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-4" checked>
                        <label for="radio-4">Choice 1</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-5">
                        <label for="radio-5">Choice 2</label>
                    </li>

                    <li>
                        <input class="radio" type="radio" name="radio-button" id="radio-6">
                        <label for="radio-6">Choice 3</label>
                    </li>
                </ul>
            </fieldset>

            <fieldset>
                <legend class="mb-3 text-contrast-higher font-medium">Inline custom Checkboxes</legend>

                <ul class="flex flex-wrap gap-5 lg:gap-8">
                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-4" checked>
                        <label for="checkbox-4">Option 1</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-5">
                        <label for="checkbox-5">Option 2</label>
                    </li>

                    <li>
                        <input class="checkbox" type="checkbox" id="checkbox-6">
                        <label for="checkbox-6">Option 3</label>
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</div>
<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Form inputs</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Default</h4>
            <label for="email" class="form-label">Email</label>
            <x-dash-ui-input type="email" autocomplete="email" name="email" id="email" placeholder="you@example.com"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Number</h4>
            <label for="quantity" class="form-label">Quantity</label>
            <x-dash-ui-input type="number" name="quantity" id="quantity"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Textarea</h4>
            <label for="address" class="form-label">Shipping address</label>
            <x-dash-ui-textarea name="address" autocomplete="address-line1" id="address" placeholder="Enter your address" rows="3"></x-dash-ui-textarea>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Select</h4>
            <label for="date" class="form-label">Date range</label>
            <x-dash-ui-select name="date" id="date">
                <option value="1">Today</option>
                <option value="2">Yesterday</option>
                <option value="3">Last 7 days</option>
            </x-dash-ui-select>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With label Action</h4>
            <label for="action" class="form-label justify-between items-baseline"><span>Title</span><x-dash-ui-button type="button" variant="plain">Translate to french</x-dash-ui-button></label>
            <x-dash-ui-input type="text" name="action" id="action" placeholder="Post title"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With help text</h4>
            <label for="email-help" class="form-label">Email</label>
            <x-dash-ui-input type="email" autocomplete="email" name="email-help" id="email-help" placeholder="you@example.com" helpText="We’ll use this address if we need to contact you about your account."/>
        </div>

        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With prefix or suffix</h4>
            <label for="price" class="form-label">Price</label>
            <x-dash-ui-input type="number" name="price" id="price" prefix="$" suffix="USD" value="2.00"/>
        </div>

        <div>
            <h4 class="mb-3 text-contrast-higher font-medium">With validation error</h4>
            <label for="name" class="form-label">Store name</label>
            <x-dash-ui-input type="text" name="name" autocomplete="name" id="name" error="Store name is required"/>
            <div class="mt-2">
                <label for="address-1" class="form-label">Shipping address</label>
                <x-dash-ui-textarea name="address-1" id="address-1" placeholder="Enter your address" rows="3" error="Address is required"></x-dash-ui-textarea>
            </div>
            <div class="mt-2">
                <label for="date-error" class="form-label">Date range</label>
                <x-dash-ui-select name="date-error" id="date-error" error="Select an option">
                    <option value="1">Today</option>
                    <option value="2">Yesterday</option>
                    <option value="3">Last 7 days</option>
                </x-dash-ui-select>
            </div>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Search input</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
        <div class="mb-5 max-w-sm">
            <x-dash-ui-search-input type="search" name="search-input" placeholder="Search..." aria-label="Search"/>
        </div>
        <div class="mb-5 max-w-sm">
            <x-dash-ui-search-input iconLeft="true" type="search" name="search-input-left" placeholder="Search..." aria-label="Search"/>
        </div>

        <div class="max-w-sm">
            <x-dash-ui-card>
                <x-slot:heading>
                    Expandable search input
                </x-slot:heading>
                <x-dash-ui-expandable-search type="search" name="expandable-search" id="expandable-search" placeholder="Search..."/>
            </x-dash-ui-card>
        </div>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">File upload input</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Tag</h1>
    <div class="bg-[rgba(241,241,241,1)] p-10">
    </div>
</div>
