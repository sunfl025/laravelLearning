@extends('pages.admin.layouts.app')

@section('content')
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Users</h4>
                </div>
            </div>
            <div class="card-box">
                <a href="{{ route('createUser') }}" class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i
                        class="fa fa-plus"></i>
                </a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>CreatedAt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersView as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {{ $usersView->links('pages.admin.layouts.paginate') }}</div>
            </div>

        </div>
        <div class="col-2"></div>
    </div> <!-- end row -->
@endsection
