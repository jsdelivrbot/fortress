@extends('layouts.admin')


@section('content')

    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('admins.list')}}" class="btn ">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="row">
                <div class="info-block">
                    <h4 class="info-head"> аватар</h4>
                    <div class="col-xs-12">
                        <div class="editAvatar" style="background-image: url('{{$admin['avatar']}}')">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="row">
                <div class="info-block">
                    <h4 class="info-head"> особиста інформація</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>
                                    Ім'я
                                </td>

                                <th>
                                    {{$admin['name']}}
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Прізвище
                                </td>

                                <th>
                                    {{$admin['surname']}}
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    Email
                                </td>

                                <th>
                                    {{$admin['email']}}
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="info-block">
                        <h4 class="info-head"> активність</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>
                                        Онлайн
                                    </td>

                                    <th>
                                        {{$admin['last_visited']}}
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        Оновлення профілю
                                    </td>

                                    <th>
                                        {{$admin['updated_at']}}
                                    </th>
                                </tr>

                                <tr>
                                    <td>
                                        Дата реєстрації
                                    </td>

                                    <th>
                                        {{$admin['created_at']}}
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
