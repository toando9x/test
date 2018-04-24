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
                                <label>TieuDe</label>
                                <input class="form-control" name="TieuDe" value="{{$tintuc->TieuDe}}">
                            </div>

                            <div class="form-group">
                                <label>TomTat</label>
                                <input class="form-control" name="TomTat" value="{{$tintuc->TomTat}}">
                            </div>

                            <div class="form-group">
                                <label>NoiDung</label>
                                <input class="form-control" name="NoiDung" value="{{$tintuc->NoiDung}}">
                            </div>

                            <div class="form-group">
                                <label>HinhAnh</label>
                                <input class="form-control" type="file" name="HinhAnh" value="{{$tintuc->Hinh}}">
                            </div>                            

                            <div class="form-group">
                                <label>Tên Loại Tin</label>
                                <select class="form-control" name="LoaiTin">
                                    @foreach($loaitin as $lt)
                                    <option 
                                    @if($tintuc->idLoaiTin == $lt->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$lt->id}}">{{$lt->Ten}}</option>                               
                                    @endforeach
                                </select>
                            </div>

                            <div>
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