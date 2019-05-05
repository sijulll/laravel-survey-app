<!DOCTYPE html>
<html lang="en">
    
<head>
   {{-- Bagian Head dari frontend  --}}
@include('Surevey.layoutfrontend.head')
</head>
  <body>
    
    {{-- Bagian Header Dari Frontend  --}}
    @include('Surevey.layoutfrontend.header')
    
    {{-- Bagian Content dari Frontend --}}
    @yield('content')
    
    {{-- InI Bagian dari footer  --}}
    @include('Surevey.layoutfrontend.footer')


  @include('Surevey.layoutfrontend.script')

</body>
</html>
