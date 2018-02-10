@extends('layout.default')
@section('title')
    - Upload Data
@endsection
@section('content')

<div class="container">
    <div class ="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Upload XML Data</strong>
                </div>
                <div class="panel-body">
                    <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="data">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection