
@extends('layouts.master')


@section('top-script')

    <title>User Comments </title>
    
     <style>
    .btn {

        margin: 0px 0px 20px 0px;

    }

    #buttons{

        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    </style>

@stop


@section('content')
    <div class="sign-up-form container">    
        <div class="col-md-4 sign-up-txt"><h1 id="sign-up-direction">{{$user->first_name}}'s Comments</h1></div>
        <div class="col-md-8"> 
        
            <h3 class="sign-placeholders"></h3>
                
                @foreach($user->comments as $comment)

                    {{ Form::model($comment, array('action'=> array('CommentsController@update',$comment->id), 'method'=>'PUT', 'class' => 'form-horizontal')) }}

                        <textarea type="text" class="form-control form1" name="comment"  aria-describedby="basic-addon1">{{{$comment->comment}}}</textarea>

                       
                        <div id="buttons">
                            <button name="update-comment" value="update" type="submit" class="btn btn-default">Edit Comment</button>

                    {{Form::close()}}

                    {{ Form::model($comment, array('action'=> array('CommentsController@destroy',$comment->id), 'method'=>'DELETE', 'class' => 'form-horizontal')) }}
                            
                            <button  name="delete-comment" value="delete" type="submit" class="btn btn-default">Delete Comment</button>
                        </div>

                    {{Form::close()}}

                 @endforeach
           
        </div>
    </div>
@stop

@section('bottom-script')

@stop
    