
@extends('layouts.master')


@section('top-script')

    <title>User Posts </title>

    <style>
        .container {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .panel-default .panel-heading {
            background-color: #6C8096;
            border-color: #506378;
            color: #F1F1F1;
        }

        .panel-body {
            border: 1.5px solid;
            border-color: #506378;
        }

        .account-txt {
            padding-bottom: 30px;
        }

        textarea {
            resize: none;
        }

        .btn-default {
            background-color: #F67366;
            color:white;
        }

        .btn-default:hover {
            background-color: #F67366;
            color:white;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

   
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

 <div class="container">
    <div class="panel panel-default">    
        <div class="panel-heading"><h1 id="sign-up-direction">{{Auth::User()->first_name}}'s Posts</h1></div>
        <div class="panel-body">
            <div class="col-md-12 account-txt">
                <h3 class="sign-placeholders"></h3>
                    
                    @foreach(Auth::User()->posts as $post)

                        {{ Form::model($post, array('action'=> array('PostsController@update',$post->id), 'method'=>'PUT', 'class' => 'form-horizontal')) }}
                            <h2 class='Title'>Title</h2>
                            <textarea type="text" class="form-control form1" name="title"  aria-describedby="basic-addon1">{{{$post->title}}}</textarea>
                          
                            <h1 class='Content'>Content</h1>
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
    </div>
</div>
@stop

@section('bottom-script')

@stop
    