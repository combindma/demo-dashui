<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Modal default</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-default">Show modal window</x-dashui-button>

        <x-dashui-modal activator="modal-default" title="Reach more shoppers with Instagram product tags" role="alertdialog" aria-labelledby="modal-title"
                        aria-describedby="modal-description">
            <p>Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">Learn more</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add Instagram</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Small Modal</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-small">Show modal window</x-dashui-button>

        <x-dashui-modal activator="modal-small" title="Reach more shoppers with Instagram product tags" size="small">
            <p>Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">Learn more</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add Instagram</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Large Modal</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-large">Show modal window</x-dashui-button>

        <x-dashui-modal activator="modal-large" title="Reach more shoppers with Instagram product tags" size="large">
            <p>Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">Learn more</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add Instagram</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>


<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Modal without a title</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-untitled">Show modal window</x-dashui-button>

        <x-dashui-modal activator="modal-untitled">
            <p>Use Instagram posts to share your products with millions of people. Let shoppers buy from your store without leaving Instagram.</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">Learn more</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Add Instagram</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>

<div class="mb-10">
    <h1 class="mb-4 text-xl font-medium">Full width Modal</h1>
    <div class="bg-[rgba(241,241,241,1)] p-4 lg:p-10">
        <x-dashui-button type="button" aria-controls="modal-full">Show modal window</x-dashui-button>

        <x-dashui-modal activator="modal-full" title="Reach more shoppers with Instagram product tags" size="fullScreen">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium provident nulla minus velit, voluptas voluptatem in libero hic quaerat saepe quae, labore,
                qui illo eum ullam ea. Repudiandae excepturi aut earum ipsa vitae modi, non eos hic? Atque fugit ullam est ab nam numquam id pariatur, esse voluptates, ipsa aperiam
                consequatur laboriosam perspiciatis. Nemo culpa reprehenderit tenetur alias dolor veritatis ducimus, numquam ipsa incidunt harum dolorem quod perspiciatis autem
                quis soluta, nobis assumenda aliquam perferendis ut commodi inventore sunt.</p>
            <x-slot:actions>
                <x-dashui-button type="button" class="js-modal__close">Cancel</x-dashui-button>
                <x-dashui-button type="button" variant="primary">Save</x-dashui-button>
            </x-slot:actions>
        </x-dashui-modal>
    </div>
</div>
