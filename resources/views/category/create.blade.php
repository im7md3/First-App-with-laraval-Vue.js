@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="d-flex card-header align-items-center justify-content-between">
                        <div class="">{{ __('Add new Categery') }}</div>
                        <div class=""><a href="{{route('home')}}" class="btn btn-warning">Back</a></div>

                    </div>
                    <div class="card-body">
                        
                        <div class="">
                            <form action="{{route("category.store")}}" method="POST">
                                @csrf
                                <input type="text" name="name" class="form-control" placeholder="Name of category" >
                                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
