@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">

                    <div class="card-header d-flex card-header align-items-center justify-content-between">
                        <div class="">{{ __('All our categories') }}</div>
                        <div class=""><a href="{{route('home')}}" class="btn btn-warning">Back</a></div>
                    </div>{{-- card-header  --}}

                    <div class="card-body">
                        <show-cats :cats="{{$categories}}"></show-cats>
                    </div>{{-- card-body --}}
                </div>{{-- card --}}
            </div>
        </div>
    </div>
@endsection
