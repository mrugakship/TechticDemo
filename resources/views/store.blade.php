@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Import Product Excel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                   <form action="/Product" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input type="file" name="file" />

                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                   </form>

                   <a href="/Product/show">Show All the available data</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection