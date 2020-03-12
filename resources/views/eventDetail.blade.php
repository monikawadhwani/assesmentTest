@extends('layouts.header')
            <div class="content col-sm-12">
                <div class="event_link"><a href="{{ url('/')}}">Events</a></div>
                <div class="title m-b-md">
                    {{$eventData->title}}
                </div>
                <p class="descCls">{{$eventData->description}}</p>    
                <p>Location: {{$eventData->location}}</p>
            
            </div>
@extends('layouts.footer')