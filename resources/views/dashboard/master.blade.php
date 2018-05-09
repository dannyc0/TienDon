@extends('layouts.master')

@section('pageTitle','Principal')

@section('content')
<div class="card-container light-font">
  <div class="summary-card secondary-color">
    <div class="card-icon">
      <i class="fas fa-dollar-sign fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Ganancias de ayer</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('ganDa')</b></h4>
      </div>
    </div>
  </div>
  <div class="summary-card green-color">
    <div class="card-icon">
      <i class="fas fa-dollar-sign fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Ganancias de ayer</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('ganDa')</b></h4>
      </div>
    </div>
  </div>
</div>
<div class="card-container light-font">
  <div class="summary-card secondary-color">
    <div class="card-icon">
      <i class="fas fa-dollar-sign fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Ganancias de ayer</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('ganDa')</b></h4>
      </div>
    </div>
  </div>
  <div class="summary-card secondary-color">
    <div class="card-icon">
      <i class="fas fa-dollar-sign fa-5x"></i>
    </div>
    <div class="card-content">
      <div class="title">
        <h1 class="display-7">Ganancias de ayer</h1>
      </div>
      <div class="content">
        <h4 class="text-center"><b>@yield('ganDa')</b></h4>
      </div>
    </div>
  </div>
</div>

@endsection