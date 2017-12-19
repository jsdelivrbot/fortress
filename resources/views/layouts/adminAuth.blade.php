<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('partials.admin.head')

<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            {{--<ul class="nav navbar-nav">--}}

            {{--</ul>--}}
        </div>
    </nav>

</header>

@yield('content')