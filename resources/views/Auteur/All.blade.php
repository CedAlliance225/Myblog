<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-1 gap-4">
        @foreach ($article as $art)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{$art->Titre}}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{$art->auteur}}</p>
                </div>
                <div class="border-t border-gray-200">
                    <div class="px-4 py-5 sm:p-0">
                        <dl>
                            <dd class="mt-2 text-base text-gray-500">{{ $art->Text }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

</x-app-layout>