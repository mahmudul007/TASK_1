@extends('layout.app')
@section('content')
<h1>Products available</h1>

<table>
    @foreach($productName as $n)
    <tr><td>{{$n}}</td></tr>
    @endforeach
</table>

@endsection