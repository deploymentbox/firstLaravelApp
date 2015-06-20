@extends('layout')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Laravel 5</div>
            <div class="quote">{{ Inspiring::quote() }}</div>
        </div>

        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
