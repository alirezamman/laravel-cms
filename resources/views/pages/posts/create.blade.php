@extends('layouts.app')

@section('content')
    @if($errors)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}<br/>
                    </li>
                @endforeach
            </div>

    @endif
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true])!!}
        <div class="form-group">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::textarea('description', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'تصویر اصلی') !!}
            {!! Form::file('file', ['class'=>'form-control']) !!}
        </div>
       <div class="form-group">
            {!! Form::submit('دخیره', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب"></textarea>--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="body" placeholder="بدنه"></textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">دخیره</button>--}}
{{--    </form>--}}
@endsection