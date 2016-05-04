
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
    <div class="container">  
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Edit a Comment</h1></div>
            <div class="panel-body">
                <div class="col-md-12 account-txt">
                    <h3>Post: {{{ $comment->post->title }}}</h3>
                    <?php $comment->id ?>
                    {{ Form::model($comment,array('action' => array('CommentsController@update', $comment->id),'method' =>'PUT'))}}
                       
                        {{ Form::label('comment') }}
                        {{ Form::textarea('comment',null,[ 'rows' => '3' ]) }}              
                            <br>
                            <button type="submit" class="btn btn-default" name="save" value="save">Submit</button>                               
                        {{ Form::close() }}
                 </div>   
            </div>
        </div>
    </div> 
    @stop

    @section('bottom-script')

    @stop