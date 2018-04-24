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
                                <th>TieuDe</th>           
                                <th>TomTat</th>       
                                <th>Hinh</th>   
                                <th>TheLoai</th>
                                <th>LoaiTin</th>              
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tintuc as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tt->id}}</td>
                                <td>{{$tt->TieuDe}}</td>
                                <td>{{$tt->TomTat}}</td>
                                <td><img width="100px" src="upload/tintuc/{{$tt->Hinh}}" alt="{{$tt->Hinh}}"></td>
                                <td>{{$tt->LoaiTin->TheLoai->Ten}}</td>
                                <td>{{$tt->LoaiTin->Ten}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/TinTuc/delete/{{$tt->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/TinTuc/update/{{$tt->id}}">Edit</a></td>
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