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
                <h4 class="info-head">Список мов</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-striped">

                    <thead>
                        <tr>

                            <th>

                            </th>

                            <th>
                                Мова
                            </th>

                            <th>
                                Код
                            </th>

                            <th>
                                Активна
                            </th>

                            <th>
                                Останнє оновлення
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                    @if(Auth::user()->super_admin)
                        @foreach($langs as $lang)
                            <tr>

                                <td>
                                    <a href="{{route('lang.show',['id' => $lang['id']])}}" class="avatar-table" style="background-image: url({{$lang['flag']}})">

                                    </a>
                                </td>

                                <td>
                                    {{$lang['name']}}
                                </td>

                                <td>
                                    {{$lang['code']}}
                                </td>

                                <td>
                                    <input type="checkbox" @if($lang['active']) checked @endif class="form-check-input">
                                </td>

                                <td>
                                    {{$lang->UpdatedAgo}}
                                </td>

                                <td>
                                    <form method="post" action="{{route('lang.destroy',['id' => $lang['id']])}}">
                                        {{csrf_field()}}
                                        <button name="submit" class="btn btn-primary btn-sm">Видалити</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    @else

                        @foreach($langs as $lang)
                            <tr>

                                <td>
                                    <a href="" class="avatar-table" style="background-image: url({{$lang['flag']}})">

                                    </a>
                                </td>

                                <td>
                                    {{$lang['name']}}
                                </td>

                                <td>
                                    {{$lang['code']}}
                                </td>

                                <td>
                                    {{$lang['active']}}
                                </td>

                                <td>
                                    {{$lang->TimeAgo}}
                                </td>

                            </tr>
                        @endforeach

                    @endif
                    </tbody>

                </table>

        </div>

    </div>
    </div>
@endsection