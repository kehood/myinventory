<div class="py-10">
    @livewire('user.modals.item-modal')
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">My Inventory</h3>
                <p class="mt-1 text-sm text-gray-500">
                    A list of your entire inventory.  You can filter by quick lookup, description, name, cost, or list prices.
                </p>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
                <button type="button"
                    wire:click="$emitTo('user.modals.item-modal', 'openItemModal')"
                    class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Item
                </button>
            </div>
        </div>
    </div>

    @if (count($items) > 0)
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="table w-full divide-y divide-gray-200">
                            <div class="bg-gray-50 table-row-group">
                                <div class="table-row">
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Item Code
                                    </div>
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Item Name
                                    </div>
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Item Cost
                                    </div>
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Item List
                                    </div>
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Quantity On Hand
                                    </div>
                                    <div
                                        class="table-cell px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">
                                        Quantity On Order
                                    </div>
                                </div>
                            </div>
                            <div class="table-row-group">
                                @foreach ($items as $item)
                                    <a href="#"
                                        class="bg-white hover:bg-gray-200 hover:border-gray-500 hover:border table-row cursor-pointer">
                                        <div
                                            class="table-cell px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-left">
                                            {{ $item->quick_lookup }}
                                        </div>
                                        <div class="table-cell px-6 py-4 text-sm text-gray-500">
                                            {{ $item->quick_name }}
                                        </div>
                                        <div class="table-cell px-6 py-4 text-sm text-gray-500">
                                            {{ $item->cost }}
                                        </div>
                                        <div class="table-cell px-6 py-4 text-sm text-gray-500">
                                            {{ $item->list_price }}
                                        </div>
                                        <div class="table-cell px-6 py-4 text-sm text-gray-500">
                                            {{ $item->quantity_on_hand }}
                                        </div>
                                        <div class="table-cell px-6 py-4 text-sm text-gray-500">
                                            {{ $item->quantity_on_order ?? 0 }}
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-4 text-gray-500 text-md px-6">
            <span>
                You don't have any items in your inventory. Click "Add Item" to get started.
            </span>
        </div>
    @endif
</div>
