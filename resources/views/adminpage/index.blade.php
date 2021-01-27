<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>App Name - </title>
        @include('adminpage.header')
        @include('adminpage.script')
    </head>
    <body>
            @include('adminpage.manubar')
            <div class="conten">
                @include('adminpage.bodyheader')
                <div class="cbody">
                    @yield('cbody')
                </div>
            </div>
    </body>
</html>

