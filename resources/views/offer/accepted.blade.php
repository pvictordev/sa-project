<x-app-layout>
    <x-slot name="title">
        {{ __('offersAccepted.title') }}
    </x-slot>

    <div class="h-screen relative flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">{{ __('offersAccepted.title') }}</h2>
            <p class="text-slate-400">{{ __('offersAccepted.subtitle') }}</p>
        </div>

        <div class="mx-auto p-6 relative max-w-2xl overflow-y-auto h-52 container flex flex-col gap-2">
            @if($acceptedOffers->isEmpty())
            <span class="h-32 text-red-500 text-xl flex items-center flex-col">
                {{ __('offersAccepted.empty') }}
            </span>
            @else
            @foreach ($acceptedOffers as $acceptedOffer)
            <div class="flex items-start flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg">
                <h2 class="text-slate-800 text-xl px-2 py-1 dark:slate-800">{{ $acceptedOffer->project->title }}</h2>
                <p class="text-slate-500 p-2 dark:slate-800">
                    {{ __('offersAccepted.acceptedBy') }}
                    <a class="font-bold hover:underline" href="/freelancers/{{ $acceptedOffer->client_id }}">
                        {{ __('offersAccepted.user') }}
                    </a>
                </p>
                <p class="text-slate-500 p-2 dark:slate-800">{{ $acceptedOffer->description }}</p>
                <a href="{{ route('result.create', $acceptedOffer->id) }}" class="p-2 m-2 text-white bg-green-500 rounded-lg">
                    {{ __('offersAccepted.submitResult') }}
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</x-app-layout>