
@extends('layouts.master')


    @section('top-script')

        <title>Posts Edit Form</title>

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
    

       
        <div id="wrapper" class="col-md-10">

            <h1>Edit a comment</h1>
            
             <h1>Post: {{{$comment->post->title}}}</h1>
            <?php $comment->id ?>
            {{ Form::model($comment,array('action' => array('CommentsController@update', $comment->id),'method' =>'PUT'))}}
             
               
                {{Form::label('comment')}}
                {{Form::textarea('comment',null,[ 'rows' => '3' ])}}
             
             
                    
                    <br>
                    {{ Form::submit('Submit!', array('name' => 'Save')) }}
                       
                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div> 
    @stop

    @section('bottom-script')

    @stop