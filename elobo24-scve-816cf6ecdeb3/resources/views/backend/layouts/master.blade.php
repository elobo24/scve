<!doctype html>
<html class="no-js" lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">

  @section('htmlheader')
      @include('backend.includes.htmlheader')
  @show

<body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }} sidebar-mini fixed hold-transition">
  @include('includes.partials.logged-in-as')

  <div class="wrapper">
    @include('backend.includes.header')
    @include('backend.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @yield('page-header')
      </section>

      <!-- Main content -->
      <section class="content">

        @yield('content')
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('backend.includes.footer')
  </div><!-- ./wrapper -->

  @section('scripts')
      @include('backend.includes.scripts')
  @show

</body>
</html>
