@extends('admin.template.master')
@section('content')
     <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">DepartementAdd</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li> --}}
                            {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li> --}}
                        </ol>
                    </div>
                </div>
                <!-- row -->
@if(Session::has('success'))
  <div class="alert alert-block alert-success">
    <i class="fa fa-check cool-green"></i> 
    {{ Session::get('success') }}
  </div>
@endif


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Departement</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                            <form action="{{route('empstrength.update',$data->id)}}" method="post">
                            @csrf
                                @method('PUT') {{-- Important for update --}}

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Add Emp Strength</label>
                                        <input type="text" class="form-control @error('strength') is-invalid @enderror" value="{{$data->strength}}" name="strength" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0-0000 employee">
                                   @error('strength')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                 
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
@endsection