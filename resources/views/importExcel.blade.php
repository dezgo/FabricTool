@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="card-header">Select file to upload</div>

                <div class="card-body">
                    <form action="{{ URL::to('importExcel') }}" enctype="multipart/form-data" method="POST">
                        <p>
                            <label for="datafile">
                                <input type="file" name="import_file">
                            </label>
                        </p>
                        <button>Upload</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
