<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    {{-- @include('includes.spinner') --}}
    @include('includes.navbar'){{-- done --}}

   @yield('content')

    @include('includes.footer'){{-- done --}}
    @include('includes.script'){{-- done --}}

</body>

</html>
