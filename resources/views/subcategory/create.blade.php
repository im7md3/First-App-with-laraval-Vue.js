@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="d-flex card-header align-items-center justify-content-between">
                        <div class="">{{ __('Add new Sub Categery') }}</div>
                        <div class=""><a href="{{ route('home') }}" class="btn btn-warning">Back</a></div>

                    </div>
                    <div class="card-body">

                        <div class="">
                            <form action="{{ route('subcategory.store') }}" method="POST">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" name="name" class="mr-2 form-control" placeholder="Name of Sub Category">
                                    <select name="cat_id" id="" class="form-control" required>
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($Categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
