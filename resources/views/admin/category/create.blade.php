@extends('layouts/admin')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Create new a category</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <form action="/admin/category/store" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('name_category') ? 'has-error' : '' }}">
                            <label>Name category</label>
                            <input type="text" class="form-control" name="name_category" placeholder="Name category" value="">
                            @if($errors->has('name_category'))
                                <span class="help-block">{{ $errors->first('name_category') }}</span>
                            @endif
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-primary">Create new</button>
            </div>
        </form>
    </div>
@endsection