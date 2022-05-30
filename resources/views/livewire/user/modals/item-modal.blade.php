<x-modal modal-name="itemModal">
    <div class="px-8 py-2">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Item Information</h3>
            <p class="mt-1 text-sm text-gray-500">In order to keep accurate track of your inventory, fill out everything. However, not everyting is required.</p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-3"
                title="(Unique for each item. (ex. Barcode, Item Number, etc.)">
                <label for="quick_lookup" class="block text-sm font-medium text-gray-700"> Item Lookup Code (Example: Barcode, Item Number, etc.)</label>
                <div class="mt-1">
                    <input type="text" name="quick_lookup" id="quick_lookup" autocomplete="off" wire:model="quick_lookup"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="item_name" class="block text-sm font-medium text-gray-700"> Item Name </label>
                <div class="mt-1">
                    <input type="text" name="item_name" id="item_name" autocomplete="off" wire:model="item_name"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700"> Item Description </label>
                <div class="mt-1">
                    <textarea id="description" name="description" wire:model="description"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="cost" class="block text-sm font-medium text-gray-700"> Cost </label>
                <div class="mt-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm"> $ </span>
                    </div>
                    <input type="text" name="cost" id="cost" wire:model="cost" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="cost-currency">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency"> USD </span>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="list_price" class="block text-sm font-medium text-gray-700"> Item Sell Price </label>
                <div class="mt-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm"> $ </span>
                    </div>
                    <input type="text" name="list_price" id="list_price" wire:model="list_price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="price-currency">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency"> USD </span>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="quantity_on_hand" class="block text-sm font-medium text-gray-700"> Quantity On Hand </label>
                <div class="mt-1">

                    <input type="number" name="quantity_on_hand" id="quantity_on_hand" autocomplete="off" wire:model="quantity_on_hand"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="quantity_on_order" class="block text-sm font-medium text-gray-700"> Quantity On Order </label>
                <div class="mt-1">

                    <input type="number" name="quantity_on_order" id="quantity_on_order" autocomplete="off" wire:model="quantity_on_order"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

        </div>
    </div>
</x-modal>
