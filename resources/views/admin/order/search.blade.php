@extends('admin.layouts.master')
@section('content')
	    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Order Search by {{$search}}
                        </h1>
                    </div>
                    
                    <?php
                    function ChangeColor($str,$search){
                        return str_replace($search, "<span style='color:red;font-weight:bolder;'>$search</span>", $str);
                    }
                    ?>

                    <!-- /.col-lg-12 -->
                   <form action="admin/search" method="post" role="search">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                        <div class="form-group">
                            <input class="form-control" name="search" placeholder="Type ID or Date">
                        </div>
                            <button type="submit" class="btn btn-default">Search</button>         
                   </form>                  
                    <table class="table table-striped table-bordered table-hover">                                       
                        <thead>
                            <tr align="center">
                                <th>ID</th>         
                                <th>Product ID</th>                                    
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Order Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $od)
                            <tr class="odd gradeX" align="center">
                                <td>{!! ChangeColor($od->id,$search) !!}</td>
                                <td>{{$od->product_id}}</td>
                                <td>{{$od->quantity}}</td>
                                <td>{{$od->price}}</td>
                                <td>{{$od->status}}</td>
                                <td>{!! ChangeColor($od->order_date,$search) !!}</td>    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop