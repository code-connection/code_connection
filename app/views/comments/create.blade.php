

@extends('layouts.master')


@section('top-script')

    <title>Create Comment </title>

@stop


@section('content')
    <div class="sign-up-form container">    
        <div class="col-md-4 sign-up-txt"><h1 id="sign-up-direction">Comment on Post {{$id}}: {{Post::find($id)->title}}</h1></div>
        <div class="col-md-8">  

            {{ Form::open(['action' => ['CommentsController@store',$id], 'method'=>'POST', 'class'=>'form-horizontal']) }}
        
                <h3 class="sign-placeholders"></h3>
                
                <textarea type="text" class="form-control form1" name="comment"  id="comment" aria-describedby="basic-addon1"></textarea>

                <br>
                <button  id="save-comment-button" type="submit" class="btn btn-default">Save Comment</button>
            {{Form::close()}}
        </div>
    </div>
@stop

@section('bottom-script')

@stop
    