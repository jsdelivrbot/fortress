@extends('layouts.admin')


@section('content')

    <div class="row pageInner">
        <div class="info-block">
            <h4 class="info-head">Адміністратори</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">

                <thead>
                    <tr>

                        <th>

                        </th>

                        <th>
                            Ім'я
                        </th>

                        <th>
                            Прізвище
                        </th>

                        <th>
                            Онлайн
                        </th>

                        <th>
                            Delete
                        </th>

                    </tr>
                </thead>

                <tbody>
                    @if(Auth::user()->super_admin)
                        @foreach($admins as $admin)
                            <tr>

                                <td>
                                    <a href="{{route('edit.profile',['id' => $admin['id']])}}" class="avatar-table" style="background-image: url({{$admin['avatar']}})">

                                    </a>
                                </td>

                                <td>
                                    {{$admin['name']}}
                                </td>

                                <td>
                                    {{$admin['surname']}}
                                </td>

                                <td>
                                    {{$admin->TimeAgo}}
                                </td>

                                <td>
                                    <form method="post" action="{{route('destroy.profile',['id' => $admin['id']])}}">
                                        {{csrf_field()}}
                                        <button name="submit" class="btn btn-primary btn-sm">Видалити</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                        @else

                        @foreach($admins as $admin)
                            <tr>

                                <td>
                                    <a href="{{route('look.profile',['id' => $admin['id']])}}" class="avatar-table" style="background-image: url({{$admin['avatar']}})">

                                    </a>
                                </td>

                                <td>
                                    {{$admin['name']}}
                                </td>

                                <td>
                                    {{$admin['surname']}}
                                </td>

                                <td>
                                    {{$admin->TimeAgo}}
                                </td>

                            </tr>
                        @endforeach

                    @endif
                </tbody>

            </table>
        </div>
    </div>

@endsection