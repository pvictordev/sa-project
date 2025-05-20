<x-app-layout>
    <x-slot name="title">
        {{ __('offersList.title') }}
    </x-slot>

    @include('components.flash-alert')
    <div class="h-screen relative flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">{{ __('offersList.title') }}</h2>
            <p class="text-slate-400">{{ __('offersList.subtitle') }}</p>
        </div>

        <div class="mx-auto p-6 relative max-w-2xl overflow-y-auto h-52 container flex flex-col gap-2">
            @if($offers->isEmpty())
            <span class="h-32 text-red-500 text-xl flex items-center flex-col">
                {{ __('offersList.empty') }}
            </span>
            @else
            @foreach ($offers as $offer)
            <div class="flex items-start p-2 flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg">
                <h2 class="text-slate-800 text-xl px-2 py-1 dark:slate-800">{{ $offer->project->title }}</h2>
                <p class="text-slate-500 p-2 dark:slate-800">
                    {{ __('offersList.offeredBy') }}
                    <a class="font-bold hover:underline" href="/freelancers/{{ $offer->freelancer_id }}">
                        {{ __('offersList.user') }}
                    </a>
                </p>
                <p class="text-slate-500 p-2 dark:slate-800">{{ $offer->description }}</p>
                <x-custom-modal-button class="bg-green-600">
                    {{ __('offersList.accept') }}
                </x-custom-modal-button>
            </div>

            <x-custom-modal title="{{ __('offersList.modalTitle') }}" message="{{ __('offersList.modalMessage') }}" fill="fill-green-500">
                <form action="{{ route('offer.edit', $offer->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <input type="hidden" value="1" name="choice">
                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-green-600 rounded-lg cursor-pointer">
                        {{ __('offersList.confirm') }}
                    </button>
                </form>

                <button x-data x-on:click="$dispatch('close-modal')" class="p-2 mt-2 text-light-800 dark:text-slate-200 bg-slate-300 dark:bg-slate-800 rounded-lg cursor-pointer">
                    {{ __('offersList.cancel') }}
                </button>
            </x-custom-modal>
            @endforeach
            @endif
        </div>
    </div>
</x-app-layout>