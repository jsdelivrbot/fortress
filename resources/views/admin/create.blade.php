@extends('layouts.admin')


@section('content')


    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('admins.list')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="col-sm-12 col-md-6">

                    <div class="info-block">
                        <h4 class="info-head">особисті дані</h4>
                        <div class="form-group">
                            <label for="Name">Ім'я </label>
                            <input name="name" type="text" class="form-control" id="Name"  placeholder="введіть ім'я">
                        </div>

                        <div class="form-group">
                            <label for="Name">Прізвище </label>
                            <input name="surname" type="text" class="form-control" id="Name"  placeholder="введіть прізвище">
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="info-block">

                        <h4 class="info-head">Дані аккаунту</h4>

                            <div class="form-group">
                                <label for="Email">Email </label>
                                <input name="email" type="email" class="form-control" id="Email"  placeholder="Email">
                            </div>

                        <div class="form-group">
                            <label for="Password">Гасло</label>
                            <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="Confirm_password">Підтвердіть гасло </label>
                            <input name="confirm_password" type="password" class="form-control" id="Confirm_password" placeholder="Password">
                        </div>

                    </div>


                </div>
                {{csrf_field()}}
                <div class="col-xs-12">
                    <button type="submit" id="submit-all" class="btn btn-primary btn-lg btn-block">ЗБЕРЕГТИ</button>
                </div>


        </form>
        </div>
    </div>
@endsection