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

                <div class="col-xs-9">
                    <div class="info-block">
                        <h4 class="info-head"> Месенджер </h4>
                        <table class="table table-responsive">
                        @foreach($rooms as $room)
                                <tr>
                                    <td>
                                        <a href="{{route('dialog',['id' => $room['id']])}}" class="avatar" style="background-image: url('@if($room['second_user']['id'] == Auth::user()->id) {{$room['first_user']['avatar']}} @else {{$room['second_user']['avatar']}}  @endif')">

                                        </a>
                                    </td>
                                    <td>
                                        @if($room['first_user']['id'] == Auth::user()->id)
                                            {{$room['second_user']['name']}}
                                        @else
                                            {{$room['first_user']['name']}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($room['first_user']['id'] == Auth::user()->id)
                                            {{$room['second_user']['surname']}}
                                        @else
                                            {{$room['first_user']['surname']}}
                                        @endif
                                    </td>
                                    <td>
                                        {{--{{$admin->TimeAgo}}--}}
                                    </td>
                                </tr>
                                {{--@endif--}}
                        @endforeach
                        </table>

                    </div>

                </div>

                <div class="col-xs-3 chat-list">
                    <div class="info-block">
                        <h4 class="info-head">  </h4>
                        <ul>
                            @foreach($admins as $admin)
                                @if($admin['id'] != Auth::user()->id)
                                <li class="item">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <a href="{{route('chat.find',['id' =>$admin['id'] ])}}" class="avatar" style="background-image: url('{{$admin['avatar']}}')">

                                            </a>
                                        </div>
                                        <div class="col-xs-8">
                                            <h5>{{$admin['name']}} {{$admin['surname']}}</h5>
                                            <p class="time-ago">{{$admin->TimeAgo}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>



        </div>

    </div>

@endsection