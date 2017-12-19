@extends('layouts.admin')


@section('content')


    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('dashboard')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12 chat">
            <div class="row">

                <div class="col-xs-12">
                    <div class="info-block">
                        <h4 class="info-head"> Месенджер </h4>
                        <table class="table table-responsive">
                        @foreach($rooms as $room)
                            @if($room['first_user'] != $room['second_user'])
                                <tr>
                                    <td>
                                        {{--<a href="" class="avatar" style="background-image: url('{{$admin['avatar']}}')">--}}

                                        {{--</a>--}}
                                    </td>
                                    <td >
                                        {{$room['second_user']}}
                                    </td>
                                    <td>
                                        {{--{{$admin['surname']}}--}}
                                    </td>
                                    <td>
                                        {{--{{$admin->TimeAgo}}--}}
                                    </td>
                                </tr>
                                @endif
                        @endforeach
                        </table>

                    </div>

                </div>

                {{--<div class="col-xs-3 chat-list">--}}
                    {{--<div class="info-block">--}}
                        {{--<h4 class="info-head">  </h4>--}}

                        {{--<ul>--}}
                            {{--@foreach($admins as $admin)--}}
                                {{--<li class="item">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-xs-4">--}}
                                            {{--<a href="" class="avatar" style="background-image: url('{{$admin['avatar']}}')">--}}

                                            {{--</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-xs-8">--}}
                                            {{--<h5>{{$admin['name']}} {{$admin['surname']}}</h5>--}}
                                            {{--<p class="time-ago">{{$admin->TimeAgo}}</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}

                    {{--</div>--}}
                {{--</div>--}}

            </div>



        </div>

    </div>

@endsection