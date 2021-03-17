@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="py-5 d-flex flex-column  ">
                    <h1>Link building is one of the most important thing in <span class="textmaincolor">SEO</span></h1>
                    <h4 class="mt-3">Every little helps. Submit your domain and get defollow backlink from our website</h4>
                    <div class="mt-5"><a class="btn btn-primary" href="{{route('domain.create')}}">Submit your domain</a></div>
                </div>
            </div>{{-- col-6 --}}
            <div class="col-6">
                <div class="d-flex align-items-center justify-content-center">
                    <img class="img-fluid" src="{{asset('img/header.svg')}}" alt="">
                </div>
            </div>{{-- col-6 --}}
        </div>{{-- row --}}

        {{-- =============================================== Categories =================================================== --}}
        <div class="d-flex justify-content-center mt-5  ">
            <h2 class="font-weight-bolder">Categories</h2>
        </div>
        <domains :cats="{{$categories}}" :subcats="{{$subcats}}" :links="{{$domains}}"></domains>
    </div>{{-- container --}}
@endsection