@extends('layouts.admin')


@section('content')
    <div class="row pageInner">

        <div class="col-xs-12">
            <a href="{{route('lang.index')}}" class="btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
        </div>

        <div class="col-xs-12">
            <form method="post" action="{{route('lang.edit',['id' => $lang['id']])}}" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="info-block">
                                <h4 class="info-head"> іконка</h4>
                                <div class="col-xs-12">
                                    <div class="editAvatar" style="background-image: url('{{$lang['flag']}}')">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="info-block">
                                <h4 class="info-head"> змінити зображення</h4>
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
                                <label for="Name">Мова </label>
                                <input name="name" type="text" class="form-control" id="Name" value="{{$lang['name']}}" placeholder="введіть мову">
                            </div>

                            <div class="form-group">
                                <label for="Name">Код мови </label>
                                <input name="code" type="text" class="form-control" id="Name" value="{{$lang['code']}}" placeholder="введіть мовний код">
                            </div>
                        </div>

                        <div class="info-block">

                            <h4 class="info-head">Публікація</h4>
                                <div class="checkbox">
                                    <label>
                                        <input name="active" type="checkbox" @if($lang['active'] == 1) checked @endif> Активна мова
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="updated">Оновлено</label>
                                    <input type="text" class="form-control" id="updated" value="{{$lang->UpdatedAgo}}" placeholder="оновлено" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="created">Створено </label>
                                    <input type="text" class="form-control" id="created" value="{{$lang->CreatedAgo}}" placeholder="Створено" disabled>
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