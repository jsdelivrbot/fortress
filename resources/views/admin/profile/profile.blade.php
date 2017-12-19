@extends('layouts.admin')


@section('content')


    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('admins.list')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12">
            <form method="post" enctype="multipart/form-data">
                <div class="row">

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

                        <div class="row">
                            <div class="info-block">
                                <h4 class="info-head"> змінити аватар</h4>
                                <div class="form-group text-center">
                                    {{--<label for="exampleInputFile">File input</label>--}}
                                    <input name="avatar" type="file" class="btn " id="exampleInputFile">
                                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">

                        <div class="info-block">
                            <h4 class="info-head">особисті дані</h4>
                            <div class="form-group">
                                <label for="Name">Ім'я </label>
                                <input name="name" type="text" class="form-control" id="Name" value="{{$admin['name']}}" placeholder="введіть ім'я">
                            </div>

                            <div class="form-group">
                                <label for="Name">Прізвище </label>
                                <input name="surname" type="text" class="form-control" id="Name" value="{{$admin['surname']}}" placeholder="введіть прізвище">
                            </div>
                        </div>

                        <div class="info-block">

                            <h4 class="info-head">Дані аккаунту</h4>
                            @if(Auth::user()->super_admin === 1 )
                            <div class="form-group">
                                <label for="Email">Email </label>
                                <input name="email" type="email" class="form-control" id="Email" value="{{$admin['email']}}" placeholder="Email">
                            </div>
                                @else
                                <div class="form-group">
                                    <label for="Email">Email </label>
                                    <input name="email" type="email" class="form-control" id="Email" value="{{$admin['email']}}" placeholder="Email" disabled>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="Password">Нове гасло</label>
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
                </div>

            </form>
        </div>
    </div>



@endsection

@section('scripts')
    <script src="{{asset('administrator/js/dropzone.js')}}"></script>
    <script>
        Dropzone.options.myDropzone = {

            // Prevents Dropzone from uploading dropped files immediately
            autoProcessQueue: false,

            init: function() {
                var submitButton = document.querySelector("#submit-all")
                myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when
                // files are dropped here:
                this.on("addedfile", function() {
                    // Show submit button here and/or inform user to click it.
                });

            }
        };
    </script>
@endsection