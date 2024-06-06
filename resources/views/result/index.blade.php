<x-app-layout>
    <x-slot name="title">
        Results
    </x-slot>

    <div class="h-screen flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">Results</h2>
            <p class="text-slate-400">Hurry up! you have some projects done.</p>
        </div>

        <div class="mx-auto relative max-w-2xl container overflow-y-auto max-h-52  flex flex-col gap-2">
            @if($results->isEmpty())
            <span class="min-h-24 text-red-500 text-xl flex items-center flex-col">Currently you have no results.</span>
            @else
            @foreach ($results as $result)
            <div class="min-h-24 flex items-start flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
                <p class="text-slate-400 p-2 dark:slate-800">{{ $result->description }}</p>
                <!-- <a href=" {{ route('result.edit', $result->id )}}" class="p-2 m-2 bg-green-500 rounded-lg">
                    Accept result
                </a> -->
                <button x-data x-on:click="$dispatch('open-modal')" class="p-2 m-2 bg-green-500 rounded-lg">Accept</button>
            </div>

            <div x-data="{ show: false }" x-show="show" x-transition x-on:open-modal.window="show = true" x-on:close-modal.window="show = false" x-on:keydown.escape.window="show = false" style="display:none;" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div x-data x-on:click="$dispatch('close-modal')" class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                        <div class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white dark:bg-slate-700 dark:text-slate-200 px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #699f4c;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="cls-1" d="M800,510a30,30,0,1,1,30-30A30,30,0,0,1,800,510Zm-16.986-23.235a3.484,3.484,0,0,1,0-4.9l1.766-1.756a3.185,3.185,0,0,1,4.574.051l3.12,3.237a1.592,1.592,0,0,0,2.311,0l15.9-16.39a3.187,3.187,0,0,1,4.6-.027L817,468.714a3.482,3.482,0,0,1,0,4.846l-21.109,21.451a3.185,3.185,0,0,1-4.552.03Z" id="check" transform="translate(-770 -450)" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-slate-200" id="modal-title">Accept the result</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500 dark:text-slate-200">Would you like to accept this result ? The process cannot be undone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-slate-600 gap-2 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <form action="{{ route('result.edit', $result->id )}}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <input type="hidden" value="1" name="choice">
                                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-green-600 rounded-lg cursor-pointer">Accept</button>
                                </form>

                                <button x-data x-on:click="$dispatch('close-modal')" class="p-2 mt-2 text-light-800 dark:text-slate-200 bg-slate-300 dark:bg-slate-800 rounded-lg cursor-pointer">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</x-app-layout>