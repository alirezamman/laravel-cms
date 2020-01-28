@extends('layouts.app')
@section('content')
    <h3>به صفحه ما خوش آمدید</h3>

    <h3> ای دی:{{$id}} </h3>
    <h3>نام:{{$name}}</h3>
    <h3>رمز عبور:{{$password}}</h3>
@endsection

@section('footer')
    <p>در این قسمت بعدا فوتر قرار میگیرد</p>
@endsection