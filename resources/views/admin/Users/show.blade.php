@extends('admin.layouts.master')
@section('content')
	    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                       @endif
 
                    @if(session('thongbao_create'))
                            <div class="alert alert-success">
                                {{session('thongbao_create')}}
                            </div>
                    @endif

                    @if(session('thongbao_delete'))
                            <div class="alert alert-success">
                                {{session('thongbao_delete')}}
                            </div>
                    @endif

                    @if(session('thongbao_update'))
                            <div class="alert alert-success">
                                {{session('thongbao_update')}}
                            </div>
                    @endif                    
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>           
                                <th>Ten Không Dấu</th>                                    
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($theloai as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->id}}</td>
                                <td>{{$tl->Ten}}</td>
                                <td>{{$tl->TenKhongDau}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/TheLoai/delete/{{$tl->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/TheLoai/update/{{$tl->id}}">Edit</a></td>
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