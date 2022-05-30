@props([
        'type' => 'modalName'
    ])
<div x-data="{ modal: @entangle($modalName) }">
    <div class="fixed z-20 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        style="display: none" x-show="modal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center lg:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
                x-show="modal" wire:click="close">
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-y-auto shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-7xl h-3/4screen sm:w-full sm:p-6 overflow-x-hidden"
                x-show="modal" x-transition>
                {{-- CONTENT STARTS HERE --}}
                {{ $slot }}
                <div class="flex flex-row-reverse mt-4">
                    <x-jet-button wire:click="close">
                        Close
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
