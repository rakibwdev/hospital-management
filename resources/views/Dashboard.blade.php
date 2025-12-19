<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.app')
@section('title', 'Welcome Page');


<body>

    @section('content')
        <div>
            <h1>?Dashboard?</h1>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary text-white p-3">
                        <h3>{{ $brandCount }}</h3>
                        <p>Total Brands</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white p-3">
                        <h3>{{ $companyCount }}</h3>
                        <p>Total Companies</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
