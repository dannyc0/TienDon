<div class="sidenav primary-color light-font">
  <a href="{{url('home')}}" id="home"><div class="icon-nav"><i class="fas fa-home fa-2x"></i></div><div class="text-nav">Escritorio</div></a>
  <a href="{{url('iniciarVenta')}}" id="iniciarVenta"><div class="icon-nav"><i class="fab fa-opencart fa-2x"></i></div><div class="text-nav">Iniciar venta</div></a>
  <a href="{{url('categorias')}}" id="categorias"><div class="icon-nav"><i class="fas fa-cube fa-2x"></i></div><div class="text-nav">Categorias</div></a>
  <a href="{{url('inventario')}}" id="inventario"><div class="icon-nav"><i class="fas fa-box-open fa-2x"></i></div><div class="text-nav">Inventario</div></a>
  <a href="{{url('productos')}}" id="productos"><div class="icon-nav"><i class="fas fa-th-large fa-2x"></i></div><div class="text-nav">Productos</div></a>
  <a href="{{url('proveedores')}}" id="proveedores"><div class="icon-nav"><i class="fas fa-shipping-fast fa-2x"></i></div><div class="text-nav">Proveedores</div></a>
  @if (Auth::user()->role_id==1)
    <a href="{{url('venta')}}" id="venta"><div class="icon-nav"><i class="fas fa-shopping-basket fa-2x"></i></div><div class="text-nav">Ventas</div></a>
  @endif
  @if (Auth::user()->role_id==1)
    <a href="{{url('reportes')}}" id="reportes"><div class="icon-nav"><i class="fas fa-chart-pie fa-2x"></i></div><div class="text-nav">Reportes</div></a>
  @endif
  @if (Auth::user()->role_id==1)
    <a href="{{url('administrarUsuarios')}}" id="administrarUsuarios"><div class="icon-nav"><i class="fas fa-cogs fa-2x"></i></div><div class="text-nav">Administrar usuarios</div></a>
  @endif

  <a href="{{url('acercaDe')}}" id="acercaDe"><div class="icon-nav"><i class="fas fa-info-circle fa-2x"></i></div><div class="text-nav">Acerca de</div></a>
</div>
