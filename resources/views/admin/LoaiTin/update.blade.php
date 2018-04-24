@extends('admin.layouts.master')
@section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                       @endif


                        <form action="" method="POST">                
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" value="{{$loaitin->Ten}}">
                            </div>
                            <div class="form-group">
                                <label>Tên Loại Tin</label>
                                <select class="form-control" name="TheLoai">
                                    @foreach($theloai as $tl)
                                    <option                                        
                                            @if($loaitin->idTheLoai == $tl->id)
                                                {{"selected"}}
                                            @endif                                    
                                        value="{{$tl->id}}">{{$tl->Ten}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <br><button type="submit" class="btn btn-default">Category Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@stop