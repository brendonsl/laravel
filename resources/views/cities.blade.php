@extends('layout.main')

@section("content")
    <h1>Cities</h1>
    <table class="table-striped table-dark table h-100>">
        <thead>
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Country Id</th>
                <th>Last update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{$city->city_id}}</td>
                    <td>{{$city->city}}</td>
                    <td>{{$city->country_id}}</td>
                    <td>{{$city->last_update}}</td>
                </tr>
            @endforeach
        </tbody>

@endsection
