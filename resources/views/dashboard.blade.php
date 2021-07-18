<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('submit_pay') }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
    <div class="mt-4">
        <x-label for="payment_pic" :value="__('Submit Proof of Payment')" />

        <x-input id="payment_pic" class="block mt-1 w-full"
                        type="file"
                        name="payment_pic" />
    </div>
    <button type="submit"
                        class="w-2/3 sm:w-1/3 lg:w-1/4 mt-8 self-center bg-yellow rounded-2xl py-4 font-bold mt-16">Upload Image</button>
    </form>

    <h1>{{$verification}}</h1>
</x-app-layout>
