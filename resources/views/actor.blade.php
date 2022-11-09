@extends('layout.main')

@section("content")
    <h1>Actor</h1>
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
            @foreach ($actor as $actor)
                <tr>
                    <td>{{$actor->actor_id}}</td>
                    <td>{{$actor->first_name}}</td>
                    <td>{{$actor->last_name}}</td>
                    <td>{{$actor->last_update}}</td>
                </tr>
            @endforeach
        </tbody>

@endsection
aiefiew