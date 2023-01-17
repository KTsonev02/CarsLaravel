<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<h2 class="font-semibold text-xl text-gray-800 leading-tight text-center mt-8">
    Cars List
</h2>

<div>
    <div class="mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col align-items-center">
            <form class="mb-2" method="POST" action="{{ route('cars.search') }}">
                @csrf
                <input type="text" placeholder="{{ __('Model') }}" name="model" class="block rounded p-1 mb-1"/>
                <input type="text" placeholder="{{ __('Year') }}" name="year" class="block rounded p-1"/>
                <button type="submit" class="mt-1">{{ __('Search') }}</button>
            </form>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Car Model
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Manufactured Year
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50">

                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($cars as $car)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <img src="{{ $car->image }}" alt="{{ $car->car_model }}" class="w-1/2 h-1/2 rounded-full"/>
                                    </td>

                                    <td class="text-4xl text-gray-900 mr-6 dark:text-white px-6 py-4">
                                        {{ $car->car_model }}
                                    </td>

                                    <td class="text-4xl whitespace-nowrap text-xl text-gray-900 mr-6">
                                        {{ $car->year }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-xl font-medium">
                                        <a href="{{ route('cars.show', $car->id) }}"
                                           class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
