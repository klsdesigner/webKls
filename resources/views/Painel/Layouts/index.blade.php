<!DOCTYPE html>
<html>
<!-- head -->
@include('Painel.Layouts.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->    
@include('Painel.Layouts.header')

<!-- Menu lateral -->
@include('Painel.Layouts.sidebarlateral')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Painel de Controle</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('painel.index') }}">Home</a></li>

              @if (isset($url))
              
                <li class="breadcrumb-item active">{{ $url }}</li>
              
              @endif
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content  -->
    <div class="container-fluid">
      @yield('content')
    </div>
    

  </div>
  <!-- /.content-wrapper -->

  @include('Painel.Layouts.footer')

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside> --}}
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- Inclusao de arquivos js -->
@include('Painel.Layouts.jquerys')

</body>
</html>
