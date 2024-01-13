<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Flash Message</h1>
    <div class="flex flex-col gap-3 bg-gray-200/60 p-4 lg:p-10">
        <div><x-dashui-button type="button" aria-controls="flash-message-1">Show flash message</x-dashui-button></div>
        <div><x-dashui-button type="button" aria-controls="flash-message-2">Show flash error</x-dashui-button></div>
    </div>
    <x-dashui-flash-message message="Message sent" id="flash-message-1"/>
    <x-dashui-flash-message message="Server error" :error="true" :show="false" id="flash-message-2" data-duration="5000"/>
</div>
