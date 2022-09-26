
@extends('layouts.base')

@section('content')
<div class="row">

    <div class="col-lg-6 col-sm-12 firstbg">
        <div class="hello">
        <h2 class="green">Hello Friend!</h2>
        <h5 class="white">Enter your personal details and start journey with us!</h5>
        </div>
    </div>
    <!-- user form -->
    
    <div class="col-lg-6 col-sm-12"><br>
    <div class="add">
    <a href="{{ url('') }}"><button type="button" class="btn btn-primary">back</button></a>
</div>
@if(Session::get('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
@if(Session::get('fail'))
<div class="alert alert-success">
{{ Session::get('fail') }}
</div>
@endif
        <form action="{{ url('insert_data') }}" method="post">
            @csrf
        <center class="secondbg">
            <h1 class="addUser">Add a User</h1>
            <h6>Type in your info</h6>
            
            <div class="form-group mb-3">
                
                <input type="text" name="name" class="input form-control" placeholder="Name" value="{{ old('name') }}">
                <span class="error">@error('name'){{ $message }} @enderror</span>

            </div>

            <select class="input form-select" name="country">

                <option  selected>Country</option>
               
                @foreach($country as $cou)
                <option value="{{ $cou->id }}">{{ $cou->country }}</option>

                @endforeach


            </select>
            <br>
            <span class="error">@error('country'){{ $message }} @enderror</span>


            <div class="input form-group mb-3">
            <input placeholder="Date of Birth" name="date" value="{{ old('date') }}" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />       
            <span class="error">@error('date'){{ $message }} @enderror</span>

        </div>

            <button class="save" type="submit">SAVE</button>
        </center>
        </form>

    </div>
  </div>

