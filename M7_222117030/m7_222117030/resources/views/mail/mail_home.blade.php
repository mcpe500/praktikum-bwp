@extends('templates.main_template')

@section('header')
    <h1>Welcome, {{ Session::get('currentMailLogin')['name'] }}</h1>
@endsection
@section('content')
    <h2>Mail</h2>
    <table>
        <tr>
            <th>Sender Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        @foreach (Session::get('users') as $item)
            <tr>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>Action</td>
            </tr>
        @endforeach
    </table>
@endsection
