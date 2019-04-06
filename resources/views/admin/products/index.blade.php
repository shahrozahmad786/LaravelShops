@extends('admin.layouts.app')

@section('content')

<div class="main-panel">
<div class="content">


  <div class="advance-table">
        <h3 class="h2">{{$name}} Management</h3>
        @if(Session::has('message'))
            <div class="btn-success alert custom-dark-alert-info alert-dismissible">
                <button class="btn btn-primary close" data-dismiss="alert"><span>×</span></button>
                <strong><i class="fa fa-check"></i>Success!</strong> {{Session::get('message')}}.
            </div>
        @endif

        <div class="alert custom-dark-alert-danger alert-dismissible" style="display: none;">
            <button class="close" data-dismiss="alert"><span>×</span></button>
            <strong><i class="fa fa-check"></i>Success!</strong> {{$name}} deleted successfully.
        </div>


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <a href="">
          <button type="button" rel="tooltip" title="Create Products" class="btn btn-success btn-looks btn-sm">
               <i class="material-icons">add</i>
                              </button>
          </a>

     
        </div>
        <div class="box-body">
           <div class="box">
            <div class="card-header">
               <div class="card">
                  <div class="card-header card-header-primary">
              <h3 class="card-title">{{$name}}</h3></div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table ">
                <thead>
                <tr>
                  <th>Sr.No</th>
                <th>Product Name</th>
              
                </tr>
                </thead>
                <tbody>
                 @foreach( $products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
   
                   

         
        
                </tr>
                
                </tbody>
                @endforeach
          
                <tfoot>
                <tr>

                <th>Sr.No</th>
                <th>Product Name</th>
         
                </tr>
                </tfoot>

              </table>
                <strong></strong>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>




@stop

