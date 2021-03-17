@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="py-5">
            <h3 class="text-center">Add Your Domain to our website and get backlink!</h3>
        </div>{{-- py-5 --}}

        <domain-reg :cats="{{$categories}}" :subcats="{{$subCats}}"></domain-reg>


    </div>{{-- container --}}
@endsection
