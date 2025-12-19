<!DOCTYPE html>
@extends('layouts.app')
@section('title', 'Dashboard')

<body>
    @section('content')
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
                <div class="col-md-4">
                    <div class="card bg-info text-white p-3">
                        <h1>{{ $genericCount }}</h1>
                        <p>Total Generics</p>
                    </div>
                </div>
            </div>
    @endsection
</body>

</html>
