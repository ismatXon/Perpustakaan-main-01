<!DOCTYPE html>
<html lang="en">
    <head>
      @include('header')
    </head>

    <body>
        <div class="container" style="background:#ccc">
            <!--awal MENU NAVBAR-->
           @include('menu')
            <!--akhir MENU NAVBAR-->

            <!--awal BANNER-->
           @include('banner')
            <!--akhir BANNER-->

            @include('sidebar')

            @include('content')

            <!--awal FOOTER-->
          @include('footer')
            <!--akhir FOOTER-->

        </div>
    </body>
</html>