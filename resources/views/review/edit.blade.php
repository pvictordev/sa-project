<x-app-layout>
    <x-slot name="title">
        Create
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">
        <x-back-link></x-back-link>

        <div class="mx-auto max-w-2xl container bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-slate-200 mb-4">Do you want to say something else to say ?</h2>
                <form method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Update the review</label>
                        <textarea id="description" name="description" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>{{ $review->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-slate-300">How would you rate this project ?</label>
                        <select id="rating" name="rating" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="{{ $review->rating }}">{{ $review->rating }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="flex gap-2 justify-end">
                        <a href="/dashboard" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Skip
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>