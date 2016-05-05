
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
            <div class="panel-heading"><h1>Edit a Post</h1></div>
            <div class="panel-body">
                <div class="col-md-12 account-txt">
                    <h3 class="sign-placeholders"></h3>

                        {{ Form::model($post, array('action' => array('PostsController@update', $post->id) , 'method'=>'PUT')) }}


                           
                            {{ Form::label('title:') }}
                            {{ Form::textarea('title',null,['placeholder'=> $post->body, 'rows' => '3','class' => 'form-control form1' ]) }}
                            <br>

                            {{ Form::label('body:') }}
                            {{ Form::textarea('body',null,['placeholder'=> $post->body, 'class' => 'form-control form1' ]) }}
                            <br>

                            <button  value="delete" name="submit-post" type="submit" class="btn btn-default">Submit</button>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    
    @stop

    @section('bottom-script')

    @stop