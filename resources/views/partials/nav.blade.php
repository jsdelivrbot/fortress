<transition name="bounce">

    <aside v-show="menu" class="m-navbar text-center">

        <div>

            <ul>

                <li>
                    <a href="#">test</a>
                </li>

                <li>
                    <a href="#">test</a>
                </li>

                <li>
                    <a href="#">test</a>
                </li>

                <li>
                    <a href="#">test</a>
                </li>

                <li>
                    <a href="#">test</a>
                </li>

                <li>
                    <a href="#">test</a>
                </li>

            </ul>

        </div>

    </aside>

</transition>

<nav class="navbar top-navigation fixed-top ">

    <div class="container">
        <div class="row d-flex flex-row-reverse align-items-center w-100">

            <div class="col-4 text-right">

                <label for="menu-btn">
                    @lang('locale.menu')
                </label>

                <button v-on-clickaway="menuAway" @click="menu = !menu" id="menu-btn" class="navbar-toggler navbar-toggler-right" type="button">
                    <i class="ion-grid" aria-hidden="true"></i>
                </button>

            </div>

            <div class="col-4 text-center">
                <ul class="list-inline lang-switcher">
                    @foreach($langs as $lang)
                        <li class="list-inline-item">
                            <a href="{{route('set.locale',['locale' => $lang['code'] ])}}" class='flags-img' style="background-image: url('{{$lang['flag']}}')"></a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

</nav>