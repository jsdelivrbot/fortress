<head>
    <base href="{{URL::asset('/')}}" target="_top">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/AdminLTE.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/_all-skins.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('administrator/css/admin.css')}}" />
    @yield('styles')
</head>