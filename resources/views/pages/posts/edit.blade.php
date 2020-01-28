@extends('layouts.app')

@section('content')
    @can('update', $post)
        {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]])!!}
        <div class="form-group">
            {!! Form::label('title', 'عنوان') !!}
            {!! Form::text('title', $post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'توضیحات') !!}
            {!! Form::textarea('description', $post->content,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('بروزرسانی', ['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::model($post, ['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    @endcan

@endsection