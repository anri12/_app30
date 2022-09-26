@extends('layouts.base')

@section('content')
<br>
    <div class="add">
    <a href="{{ url('addUser') }}"><button type="button" class="btn btn-primary">add user</button></a>
</div>

<h2 class="greentxt">User Data Table</h2>


<table class="table">
<tr>
    <th class="head name">Name</th>
    <th class="head country">Country</th>
    <th class="head date">Date of Birth</th>

</tr>
@foreach($customer as $user)
<tr class="obj">
    <td class="nameObj">{{ $user->name }}</td>

    <td class="countryObj">{{ $user->country->country }}</td>

    <td class="dateObj">{{ $user->date }}</td>

</tr>
@endforeach



</table>


