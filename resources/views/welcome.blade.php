@extends('layouts.admin')
@section('style')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 ">
            <!-- general form elements -->
            <div class="box">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="box-header with-border">
                    <h3 class="box-title">Upload File</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('import-excel')}}" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="box-body">
                    <div class="form-group">
                        <label>

                        </label>
                        <input name="file"  type="file"
                               class="form-control" required >
                    </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->


        </div>
    </div>
@endsection
