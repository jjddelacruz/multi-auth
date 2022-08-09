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
                            id
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            name

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            email
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                           verify date
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            roles
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



    <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('admin.users.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">Search</button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-danger mt-1">Refresh</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New user</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ ++$count }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->detail }}</td>
            <td>
                <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ URL::to('users/' . $user->id)  }}">Show</a>

                    <a class="btn btn-primary" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $users->links() !!}

</x-admin-layout>
