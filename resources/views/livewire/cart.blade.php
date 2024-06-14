<section class="py-8 antialiased md:py-16 ">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-black sm:text-2xl">Carrito</h2>

        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    @foreach($products as $product)
                        <livewire:cart-row :$product wire:key="{{ Str::uuid() }}"></livewire:cart-row>
                    @endforeach
                </div>
            </div>

            <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                <div class="space-y-4 rounded-lg bg-neutral-300 border border-gray-200 p-4 shadow-sm">
                    <p class="text-xl font-semibold text-gray-900 dark:text-black">Sumario de compra</p>

                    <div class="space-y-4">
                        <div class="space-y-2">

                        <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                            <dt class="text-base font-bold text-gray-900 dark:text-red-500">Total</dt>
                            <dd class="text-base font-bold text-gray-900  dark:text-red-500">{{$price}}€</dd>
                        </dl>
                    </div>

                    <a href="#" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-red-500 dark:hover:bg-primary-700 dark:focus:ring-primary-800" wire:click="pay">Pagar</a>

                    <div class="flex items-center justify-center gap-2">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> o </span>
                        <a href="{{route('seeall')}}" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
                            Continuar comprando
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
