<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<h2 class="font-semibold text-xl text-gray-800 leading-tight ml-8 mt-8">
    Car Details
</h2>

<div>
    <div class="mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex flex-col align-items-center">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Car Makes
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Car Model
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Manufactured Year
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categories
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-900 text-center">
                                    {{$car->id}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-900">
                                    @foreach($carMakes as $make)
                                        @foreach($make as $currentMake)
                                            {{$currentMake['make']}}
                                            <br>
                                        @endforeach
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-900">
                                    {{$car->car_model}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-900">
                                    {{$car->year}}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-xl text-gray-900">
                                    @foreach($categories as $category)
                                        @foreach($category as $currentCategory)
                                            {{$currentCategory['name']}}
                                            <br>
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
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
