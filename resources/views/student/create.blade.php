@extends('layouts.app')

@section('content')
    <div>
        <h1>Add Student</h1>

        <a class="btn btn-secondary " type="button" href="{{ route('sindex') }}">Back</a>


        <form  class="col-lg-12" method="POST" action="{{ route('store') }}" >
            @csrf
            <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter your name">
            @error('name')
                <div>{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email" placeholder="Enter your email">
            @error('email')
                <div>{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label>year</label>
            <input class="form-control" type="text" name="year" placeholder="Enter your year of study">
            @error('year')
                <div>{{ $message }} </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" placeholder="Enter your password">
            @error('password')
                <div>{{ $message }} </div>
            @enderror
        </div>
            <button class="btn btn-primary col-lg-12" type="submit">Submit</button>
        </form>
    </div>
@endsection
