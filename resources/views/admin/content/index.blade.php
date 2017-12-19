@extends('layouts.admin')


@section('content')


    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('dashboard')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12">

            <div class="info-block">
                <h4 class="info-head">Переклади</h4>
            </div>




                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($content as $lang)
                            <li role="presentation" @if($loop->iteration === 1)class="active"@endif>
                                <a href="#{{$lang['name']}}" aria-controls="{{$lang['name']}}" role="tab" data-toggle="tab" class="flag-img" style="background-image: url('{{$lang['flag']}}')"></a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($content as $lang)
                            <div role="tabpanel" class="tab-pane @if($loop->iteration === 1) active @endif " id="{{$lang['name']}}">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>

                                                <th>
                                                    №
                                                </th>

                                                <th>
                                                    Ключ
                                                </th>

                                                <th>
                                                    Переклад
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($lang['content'] as $item )

                                                <tr>

                                                    <td>
                                                        {{$loop->iteration}}
                                                    </td>

                                                    <td>
                                                        {{$item['key']}}
                                                    </td>

                                                    <td>
                                                        <form action="{{ route('content.edit',['id' => $item['id']]) }}" method="post">
                                                            {{csrf_field()}}
                                                            <textarea name="{{$item['key']}}" id="" class="text-left noResize" cols="80" rows="1">{{$item['value']}}</textarea>
                                                            <button type="submit" id="submit-all" class="btn btn-primary btn-xs ">зберегти</button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    {{--@endforeach--}}
                    </div>

            </div>

        </div>
    </div>
@endsection