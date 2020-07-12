@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <div class="text-center">
                    <img class="mb-6" src="{{ asset('assets/images/logo.png') }}" width="15%"/>
                </div>
                <div class="text-center text-uppercase text-bold mb-6"><br/>
                    <h4>Laravel 7 Boilerplate</h4>
                </div>
            </div>
        </div>
    </div>
@endsection