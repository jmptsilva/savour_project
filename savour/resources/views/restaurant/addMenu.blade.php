<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Savour - Save the food, save the planet</title>

</head>

<body>
   
    @include('restaurant/sidebar')
    <div class="ml-[220px]">
        <section class="max-w-4xl p-6 mx-auto bg-slate-300 rounded-md shadow-md dark:bg-gray-800 mt-20">

            @if (!$errors->any())
            <div class="alert alert-success text-white">
               {{ session('message') }}
            </div>
            @endif

            <h1 class="text-xl font-bold text-white capitalize mb-3">Add Menu</h1>

            <form action="{{ route('restaurant.insert_offer') }}" method="POST">
                @csrf
                <div class="flex flex-row">
                    <div class="flex flex-col">

                        <!--Edit Name-->
                        <div>
                            <label class="text-black dark:text-gray-200" for="name">Name</label>
                            <input id="name" type="text" name="name" class="block w-[300px] px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!--Edit Description-->
                        <div>
                            <label class="text-black dark:text-gray-200" for="description">Description</label>
                            <textarea id="textarea" type="text" name="description" class="block w-[300px] px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!--Edit Quantity-->
                        <div>
                            <label class="text-black dark:text-gray-200" for="quantity">Quantity</label>
                            <input type="number" id="quantity" min="0" name="quantity" class="mt-2 w-24 h-10 border-gray-200 rounded dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 sm:text-sm" />
                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>

                        <!--Edit Price-->
                        <div>
                            <label class=" text-black dark:text-gray-200" for="price">Price</label>
                            <input id="price" type="price" name="price" class="block w-[300px] px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <!--Edit Allergen-->
                        <div class=" text-black dark:text-gray-200 mt-3">Allergenic</div>
                        <div class="flex flex-col ">
                            <div class="grid grid-cols-4 gap-4">
                                <div>
                                    <input id="moluscs" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="moluscs" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300" data-bs-toggle="tooltip" title="Hi! I'm tooltip">Moluscs</label>
                                </div>

                                <div>
                                    <input id="eggs" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="eggs" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Eggs</label>
                                </div>

                                <div>
                                    <input id="fish" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="fish" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Fish</label>
                                </div>

                                <div>
                                    <input id="lupin" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="lupin" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Lupin</label>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-4">

                                <div>
                                    <input id="soya" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="soya" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Soya</label>
                                </div>

                                <div>
                                    <input id="milk" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="milk" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Milk</label>
                                </div>

                                <div>
                                    <input id="peanuts" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="peanuts" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Peanuts</label>
                                </div>

                                <div>
                                    <input id="gluten" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="gluten" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Gluten</label>
                                </div>
                            </div>

                            <div class="grid grid-cols-4 gap-4">

                                <div>
                                    <input id="crustacean" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="crustacean" class="text-sm font-medium text-black  mr-2 dark:text-gray-300">Crustacean</label>
                                </div>

                                <div>
                                    <input id="mustard" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="mustard" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Mustard</label>
                                </div>

                                <div>
                                    <input id="nuts" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="nuts" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Nuts</label>
                                </div>

                                <div>
                                    <input id="sesame" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="sesame" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Sesame</label>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4">

                                <div>
                                    <input id="celery" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="celery" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Celery</label>
                                </div>

                                <div>
                                    <input id="sulphites" type="checkbox" value="" class="_allergenCheckbox">
                                    <label for="sulphites" class="ml-2 text-sm font-medium text-black  mr-2 dark:text-gray-300">Sulphites</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Edit Image-->
                    <div class="mt-2">
                        <label class="block text-sm font-medium dark:text-gray-200 mb-2">
                            Image
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-black-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-black dark:text-gray-200" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-[] hover:text-[#00391d] focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-[#00391d]">
                                        <span class="">Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1 text-black dark:text-gray-200">or drag and drop</p>
                                </div>
                                <p class="text-xs text-black dark:text-gray-200 mt-4">
                                    PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <!--Edit Status-->
                        <div>
                            <div class="mt-5 text-black dark:text-gray-200">Available?</div>
                            <label class="inline-flex relative items-center mr-5 cursor-pointer mt-1">
                                <input type="checkbox" name="is_active" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                            </label>
                        </div>

                    </div>

                </div>
                <div class="flex flex-row justify-end">
                    <div class="flex justify-end mt-6">

                        <button href="{{ route('restaurant.insert_offer') }}" type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-[#00391d] rounded-md hover:bg-[#00391e95] focus:outline-none focus:bg-gray-600">Add</button>
                    </div>

                    {{-- <div class="flex justify-end mt-6">
                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-slate-600 rounded-md hover:bg-slate-500 focus:outline-none focus:bg-gray-600">Cancel</button>
                    </div> --}}
                </div>
            </form>
        </section>
    </div>
</body>

</html>