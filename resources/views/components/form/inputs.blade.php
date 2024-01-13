<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Form inputs</h1>
    <div class="bg-gray-200/60 p-4 lg:p-10">
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Default</h4>
            <label for="email" class="form-label">Email</label>
            <x-dashui-input type="email" autocomplete="email" name="email" id="email" placeholder="you@example.com"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Number</h4>
            <label for="quantity" class="form-label">Quantity</label>
            <x-dashui-input type="number" name="quantity" id="quantity"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Textarea</h4>
            <label for="address" class="form-label">Shipping address</label>
            <x-dashui-textarea name="address" autocomplete="address-line1" id="address" placeholder="Enter your address" rows="3"></x-dashui-textarea>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">Select</h4>
            <label for="date" class="form-label">Date range</label>
            <x-dashui-select name="date" id="date">
                <option value="1">Today</option>
                <option value="2">Yesterday</option>
                <option value="3">Last 7 days</option>
            </x-dashui-select>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With label Action</h4>
            <label for="action" class="form-label justify-between items-baseline"><span>Title</span><x-dashui-button type="button" variant="plain">Translate to french</x-dashui-button></label>
            <x-dashui-input type="text" name="action" id="action" placeholder="Post title"/>
        </div>
        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With help text</h4>
            <label for="email-help" class="form-label">Email</label>
            <x-dashui-input type="email" autocomplete="email" name="email-help" id="email-help" placeholder="you@example.com" helpText="We’ll use this address if we need to contact you about your account."/>
        </div>

        <div class="mb-5">
            <h4 class="mb-3 text-contrast-higher font-medium">With prefix or suffix</h4>
            <label for="price" class="form-label">Price</label>
            <x-dashui-input type="number" name="price" id="price" prefix="$" suffix="USD" value="2.00"/>
        </div>

        <div>
            <h4 class="mb-3 text-contrast-higher font-medium">With validation error</h4>
            <label for="name" class="form-label">Store name</label>
            <x-dashui-input type="text" name="name" autocomplete="name" id="name" error="Store name is required"/>
            <div class="mt-2">
                <label for="address-1" class="form-label">Shipping address</label>
                <x-dashui-textarea name="address-1" id="address-1" placeholder="Enter your address" rows="3" error="Address is required"></x-dashui-textarea>
            </div>
            <div class="mt-2">
                <label for="date-error" class="form-label">Date range</label>
                <x-dashui-select name="date-error" id="date-error" error="Select an option">
                    <option value="1">Today</option>
                    <option value="2">Yesterday</option>
                    <option value="3">Last 7 days</option>
                </x-dashui-select>
            </div>
        </div>
    </div>
</div>
