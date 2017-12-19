@extends('layouts.master')

@section('content')
<div class="page">
    <div id="orend-or-sale" class="white-section orend-or-sale">
        <div class="switcher-box">

            <div class="container">
                <!--Switcher-->
                <div class="row text-center d-flex justify-content-around ">
                    <button @click="switchBoxes" class="btn switch-button on">
                        orend
                    </button>
                    <button @click="switchBoxes" class="btn switch-button">
                        sale
                    </button>
                </div>
            </div>

        </div>

        <transition name="custom-classes-transition"
                    enter-active-class="animated flipInY"
        >

            <section v-show="switcher" class="section" style="background-color: #141414; color: white;padding-top: 25px">
                <div class="container" >

                    <div class="row justify-content-around text-center rp items-box">
                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        </transition>

        <transition name="custom-classes-transition"
                    enter-active-class="animated flipInY"
        >

            <section v-show="!switcher" class="section" style="background-color: #141414; color: white;padding-top: 25px">
                <div class="container" >
                    <div class="row justify-content-around text-center rp items-box">
                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        </transition>

    </div>

    <section style="position: relative; height: 100%;">

        <div class="bg-section rp">
            <div style="position: inherit; top:0; bottom: 0; left:0; width:100%; z-index:5; display:flex">
                <div class="container">
                    <div class="row justify-content-around text-center">


                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg-4">
                            <a href="#" style="display: block">
                                <img src="img/test.jpg" class="img-fluid" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                            </a>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="white-section">

        <div class="container">

            <div class="row justify-content-around text-center rp items-box">

                <div class="col-xs-12 col-sm-3 col-lg-4">
                    <a href="#" style="display: block">
                        <img src="img/test.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-4">
                    <a href="#" style="display: block">
                        <img src="img/test.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-3 col-lg-4">
                    <a href="#" style="display: block">
                        <img src="img/test.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at commodi est hic nisi qui vero, voluptatibus?</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script>
        new Vue({
            el:'#app',
            mixins: [VueClickaway.mixin],
            data:{
                menu:false,
                switcher:true
            },
            methods:{
                menuAway:function () {
                    this.menu = false;
                },
                switchBoxes:function (e) {
                    var elem = document.querySelectorAll('.btn.switch-button');
                    for(var i = 0; i < elem.length; i++){
                        elem[i].classList.toggle('on');
                    }
                    this.switcher = !this.switcher;
                }
            }
        });
    </script>
@endsection