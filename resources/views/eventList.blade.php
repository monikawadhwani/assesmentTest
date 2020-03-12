
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                text-align: right;
               
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                /*position: absolute;*/
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .descCls{font-size: 20px;}
            .name_title{font-size: 20px;}
            h2 i{
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Events</a>
                        <a href="{{ url('/home') }}">Home</a>

                        
                        
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

            <div class="content col-sm-12">
                <div class="title m-b-md">
                    Events
                </div>
                
                @foreach($events as $event)
                <div class="col-sm-6">
                     <h2><a href="{{ url('/event') }}/{{$event->id}}">{{$event->title}}</a>
                        @if (Auth::check() && Auth::user()->id == 1)
                        <i class="fas fa-pencil"><a id="edit_event" href="{{url('/edit')}}/{{$event->id}}">Edit</a></i>
                        <i class="fas fa-delete"><a id="delete_event" data-id="{{$event->id}}" href="javascript:void(0)">Delete</a></i>
                        @endif
                     </h2>

                     <p>{{$event->description}}</p>
                </div>
                @endforeach                
            </div>
@extends('layouts.footer')

<script type="text/javascript">
    
$(document).ready(function(){
    $('#delete_event').click(function(){
        let event_id = $(this).attr("data-id");
        let d = confirm("Are you sure you want to delete this event?");
        if(d){
            $.post( "/event/delete/"+event_id, function( data ) {
              alert("Event deleted successfully");
            });
        }
    })
})

</script>