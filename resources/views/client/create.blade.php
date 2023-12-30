<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Clients') }}
            </h2>
            <a href="{{ route('client.index') }}"
                class="border border-emerald-400 px-3 py-1 w-28 text-center text-gray-800 dark:text-gray-200 rounded-lg">
                Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-6 flex">
                            <div class="flex-1 mr-4">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" class="formInput"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex-1 mr-4">
                                <label for="username" class="formLabel">User Name</label>
                                <input type="text" name="username" id="username" class="formInput"
                                    value="{{ old('username') }}">
                                @error('username')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-4">
                                <label for="email" class="formLabel">Email</label>
                                <!-- type will be email but we use text because we will validate in client side -->
                                <input type="text" name="email" id="email" class="formInput"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex-1 mr-4">
                                <label for="phone" class="formLabel">Phone</label>
                                <input type="text" name="phone" id="phone" class="formInput"
                                    value="{{ old('email') }}">
                                @error('phone')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between">
                            <div class="flex-1 mr-4">
                                <label for="country" class="formLabel">Country</label>
                                <input type="text" name="country" id="country" class="formInput"
                                    value="{{ old('email') }}">
                                @error('country')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex-1 mr-4">
                                <label for="thumbnail" class="formLabel">Thumbnail</label>
                                <label for="thumbnail"
                                    class="formLabel border rounded border-dashed border-emerald-700 py-3 text-center hover:text-red-600">
                                    Click to upload image
                                </label>
                                <input type="file" name="thumbnail" id="thumbnail" class="formInput hidden">
                            </div>

                            <div class="flex-1 mr-4">
                                <label for="status" class="formLabel">Status</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none">Select Status</option>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                @error('status')
                                    <span class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="px-3 py-2 uppercase bg-emerald-800 text-white  rounded-lg">Create</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
