<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Monitoring') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for Admin.

           <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 w-full">
                <thead>
                    <tr>
                        <th scope="col" width="50"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email Verified At
                        </th>
                        <th scope="col"
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Roles
                        </th>
                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href=""
                                class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                            <a href=""
                                class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                            <form class="inline-block" action="" method="POST"
                                onsubmit="return confirm('Are you sure?');">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        </div>
    </div>

</x-admin-layout>
