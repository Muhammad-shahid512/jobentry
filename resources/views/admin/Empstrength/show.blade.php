@extends('admin.template.master')
@section('content')
     <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Emp Strength MGMT</span>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                        <a href="{{route("empstrength.create")}}" class="btn btn-primary btn-sm">ADD</a>
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
                                <h4 class="card-title">Employee Strength</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data as  $value)
                                                  <tr>
                                                <td>{{$value->strength}}</td>
                                                <td>
                                             <a href="" class="">
                                                <svg class="text-danger h-6 w-6" style="width:23px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
													<path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
												</svg>
                                             </a>  
                                                  <a href="{{route('empstrength.edit',$value->id)}}" class="">
                                               <svg class="filament-link-icon w-4 h-4 mr-1" style="width:23px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
														<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
													</svg>
                                             </a> 

                                            <form action="{{ route('empstrength.destroy', $value->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" style="background:none; border:none; padding:0; cursor:pointer;" onclick="return confirm('Are you sure?')">
        <svg style="width:23px" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>
    </button>
</form>

                                                </td>
                                              
                                            </tr>
                                        @endforeach
                                      
                                     
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Action</th>
                                             
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
@endsection