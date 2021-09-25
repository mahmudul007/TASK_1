@extends('layout.app')
@section('content')

<h1> Name:Ikram</h1>
<p>Id:18-38095-2</p>


<!-- <table>
    <?php
    // foreach($names as $n){
    //     echo"<tr>";
    //     echo "<td>".$n. "</td>";
    //     echo "";

    // }
    ?>
</table> -->
<table>
    @foreach($names as $n)
    <tr><td>{{$n}}</td></tr>
    @endforeach
</table>

 @endsection