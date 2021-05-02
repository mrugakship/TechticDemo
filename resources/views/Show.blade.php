@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Available Product Details</div>

               
                <div class=" table table-responsive">
                  <table class="table table-striped table-hover table-condensed">
                    <thead>
                      <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>description</strong></th>
                        <th><strong>Category</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($pro_data as $key => $data)
                            <tr>    
                              <th>{{$data->name}}</th>
                              <th>{{$data->description}}</th>
                              <th>{{$data->Pro_Name}}</th>               
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection