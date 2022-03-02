@extends('layouts.main')
@section('content')
    <h2><center>Войдите</center></h2>
    <form method="post">
        @csrf
        <div>
            <input type="text" name="login" value="{{ old('login') }}">
            @error('login')
            <small>{{ $message }}</small>
            @enderror
        </div>
        <div>
            <input type="password" name="password" value="{{old('password')}}">
            @error('password')
            <small>{{ $message }}</small>
            @enderror
        </div>
        <button>Войти</button>
    </form>
@endsection
