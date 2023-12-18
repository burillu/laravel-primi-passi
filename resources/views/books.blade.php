@extends('layouts.app')
@section('content')
<div class="container">
    <h1> Il libro di oggi: </h1>
    <div class="d-flex">
        <div class="col-12 col-md-4 col-lg-3 ">
            <div class="card">
                <img src=" {{$image}}" class="card-img-top my-ratio" alt=" {{$title}} ">
                <div class="card-body bg-white">
                    <h5 class="card-title">
                        {{$title}}
                    </h5>

                    <p class="card-text d-flex">
                        {{$content}}
                    </p>


                    <div>
                        {{$custom}}
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection