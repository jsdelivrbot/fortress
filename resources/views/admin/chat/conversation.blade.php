@extends('layouts.admin')


@section('content')


    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('chat')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12">
            <div class="messages">
                @foreach($dialogs as $dialog)
                    {{--@foreach($dialog['messages'] as $message)--}}
                        @if($dialog['user']['id'] == Auth::user()->id)

                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-sm-offset-8 message-box my-message">
                                    <div class="row">

                                        <div class="col-xs-8 text-center">
                                            <div class="row">

                                                <div class="col-xs-12">
                                                    <a href="">
                                                        <strong>
                                                            {{$dialog['user']['name']}}
                                                        </strong>
                                                        <strong>
                                                            {{$dialog['user']['surname']}}
                                                        </strong>
                                                    </a>
                                                </div>

                                                <div class="col-xs-12">
                                                    {{$dialog['message']}}
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xs-4 text-center">
                                            <a href="" class="avatar" style="background-image: url('{{$dialog['user']['avatar']}}')">

                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-xs-12 col-sm-4  message-box my-message">
                                    <div class="row">

                                        <div class="col-xs-4 text-center">
                                            <a href="" class="avatar" style="background-image: url('{{$dialog['user']['avatar']}}')">

                                            </a>
                                        </div>

                                        <div class="col-xs-8 text-center">
                                            <div class="row">

                                                <div class="col-xs-12">
                                                    <a href="">
                                                        <strong>
                                                            {{$dialog['user']['name']}}
                                                        </strong>
                                                        <strong>
                                                            {{$dialog['user']['surname']}}
                                                        </strong>
                                                    </a>
                                                </div>

                                                <div class="col-xs-12">
                                                    {{$dialog['message']}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    {{--@endforeach--}}
                @endforeach



            </div>

            <nav class="navbar navbar-default navbar-fixed-bottom message-form">
                <div class="container-fluid ">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="row">
                            <div class="col-xs-12">
{{--                                {{dd($dialogs)}}--}}
                                <form action="{{route('message',['id' => $room])}}" method="post" class="navbar-form navbar-left">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input name="message" type="text" class="form-control" placeholder="введіть повідомлення">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </nav>

        </div>

    </div>
@endsection