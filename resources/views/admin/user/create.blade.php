@extends('admin.layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0">Create User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                        <li class="breadcrumb-item active" >Adaugare User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.user.store')}}" method="POST" class="w-25"  >
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control"  name="name" placeholder="Name" value="{{old('name')}}">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="email" placeholder="Email" value="{{old('email')}}">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

{{--                        Role--}}
                        <div class="form-group w-50">
                            <label>Alege Rolul</label>
                            <select class="custom-select" name="role">
                                @foreach($roles as $key=>$value)
                                    <option value="{{$key}}"
                                        {{$key== old('role') ? 'selected' : ''}}>{{$value}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
