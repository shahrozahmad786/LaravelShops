@extends('admin.layouts.app')



@section('content')


<div class="main-panel">
<div class="content">
           
  <div class="advance-table">
        <h3 class="h2">DASHBOARD</h3>
        @if(Session::has('message'))
            <div class="btn-success alert custom-dark-alert-info alert-dismissible">
                <button class="btn btn-primary close" data-dismiss="alert"><span>×</span></button>
                <strong><i class="fa fa-check"></i>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

        <div class="alert custom-dark-alert-danger alert-dismissible" style="display: none;">
            <button class="close" data-dismiss="alert"><span>×</span></button>
            <strong><i class="fa fa-check"></i>Success!</strong> Products deleted successfully.
        </div>

   
@endsection

