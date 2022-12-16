<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <v-row no-gutters>
        <v-col
            id="navbar"
            cols="12"
            no-gutter
        >
            <navbar />
        </v-col>
    </v-row>
    <v-row no-gutters class="content-container">
        <v-col
            id="dashboard"
            cols="12"
            lg="2"
        >
            <v-container fluid class="dashboard h-100">
                <dashboard class="pt-2"/>
            </v-container>
        </v-col>
        <v-col
            id="content-inner"
            cols="6"
            lg="10"
        >
            <v-container fluid>
                @yield('content')
            </v-container>
        </v-col>
    </v-row>
</div>

@vite('resources/js/app.js')
</body>
</html>
