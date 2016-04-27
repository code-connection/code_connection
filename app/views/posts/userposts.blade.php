
@extends('layouts.master')


@section('top-script')

    <title>User Posts </title>

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
        <div class="col-md-4 sign-up-txt"><h1 id="sign-up-direction">{{$user->first_name}}'s Posts</h1></div>
        <div class="col-md-8">  

            <h3 class="sign-placeholders"></h3>
                
                @foreach($user->posts as $post)

                    {{ Form::model($post, array('action'=> array('PostsController@update',$post->id), 'method'=>'PUT', 'class' => 'form-horizontal')) }}

                        <textarea type="text" class="form-control form1" name="title"  aria-describedby="basic-addon1">{{{$post->title}}}</textarea>

                         <textarea type="text" class="form-control form1" name="body"  aria-describedby="basic-addon1">{{{$post->body}}}</textarea>
                        
                        <br>

                        <div id="buttons">
                            <button  value="update" name="update-post" type="submit" class="btn btn-default">Edit Post</button>

                    {{Form::close()}}   

                    {{ Form::model($post, array('action'=> array('PostsController@destroy',$post->id), 'method'=>'DELETE', 'class' => 'form-horizontal')) }}
                        
                        <button  value="delete" name="delete-post" type="submit" class="btn btn-default">Delete Post</button>
                        </div>

                    {{Form::close()}}

                @endforeach
                
            

        </div>
    </div>
@stop

@section('bottom-script')

@stop
    