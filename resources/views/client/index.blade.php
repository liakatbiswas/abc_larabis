<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Clients') }}
            </h2>
            <a href="{{ route('client.create') }}"
                class="border border-emerald-400 px-3 py-1 w-28 text-center text-gray-800 dark:text-gray-200 rounded-lg">
                Add Client
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="border py-2 w-32 text-center">Image</th>
                                <th class="border py-2">Name</th>
                                <th class="border py-2">Username</th>
                                <th class="border py-2">Phone</th>
                                <th class="border py-2">Country</th>
                                <th class="border py-2">Status</th>
                                <th class="border py-2">Active</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <th class="border py-2 w-32 text-center">
                                        <img src="{{ $client->thumbnail }}" width="80" class="mx-auto rounded-lg"
                                            alt="{{ $client->name }}">
                                    </th>
                                    <th class="border py-2 w-32 text-center"> {{ $client->name }}</th>
                                    <th class="border py-2 w-32 text-center"> {{ $client->username }}</th>
                                    <th class="border py-2 w-32 text-center"> {{ $client->phone }}</th>
                                    <th class="border py-2 w-32 text-center"> {{ $client->country }}</th>
                                    <th class="border py-2 w-32 text-center"> {{ $client->status }}</th>
                                    <th class="border py-2 w-32 text-center">
                                        <a href="#" class="bg-emerald-400 text-white px-3 py-1">Edit</a>
                                        <a href="#" class="bg-emerald-400 text-white px-3 py-1">Delete</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div class="mt-5">
                        {{ $clients->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
