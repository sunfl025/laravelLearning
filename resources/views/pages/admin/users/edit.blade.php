


@extends('pages.admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Datatables</h4>
            </div>
        </div>
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title">Horizontal form</h4>

            <form class="form-horizontal" role="form" action="{{route('userUpdate',$user->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputName3" class="col-3 col-form-label">Name</label>
                    <div class="col-9">
                        <input name="name" value="{{$user->name}} " type="name" class="form-control" id="inputEmail3" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                    <div class="col-9">
                        <input name="email" value="{{$user->email}} " type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                    <div class="col-9">
                        <input name="password" value="{{$user->password}} " type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                    <div class="col-9">
                        <input name="rePassword" type="password" class="form-control" id="inputPassword5" placeholder="Retype Password">
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class=" col-9">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox2" type="checkbox">
                            <label for="checkbox2">
                                Check me out !
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 justify-content-end row">
                    <div class="col-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="col-2"></div>
</div> <!-- end row -->
@endsection
