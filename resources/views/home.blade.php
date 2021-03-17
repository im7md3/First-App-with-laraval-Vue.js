@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="d-flex card-header align-items-center justify-content-between">
                        <div class="">{{ __('Dashboard') }}</div>
                        <div class=""><form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-outline-danger">Logout</button>
                        </form></div>

                    </div>
                    <div class="card-body">
                        {{ __('You are logged in!') }}

                        <div class="d-flex align-items-between">
                            <a href="{{route('category.create')}}" class="btn btn-outline-success w-50 m-1 font-weight-bolder">Add new Categery</a>
                            <a href="{{route('category.index')}}" class="btn btn-outline-success w-50 m-1 font-weight-bolder">Show Category</a>
                        </div>
                        <div class="d-flex align-items-between">
                            <a href="{{route('subcategory.create')}}" class="btn btn-outline-success w-50 m-1 font-weight-bolder">Add new SubCategery</a>
                            <a href="{{route('subcategory.index')}}" class="btn btn-outline-success w-50 m-1 font-weight-bolder">Show SubCategery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
