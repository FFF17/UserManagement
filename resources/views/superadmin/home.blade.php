@extends('layouts.template')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List User Management</h4>
                                 <div class="text-right">
 <a href="{{url('superadmin/create')}}" class="btn btn-sm btn-success btn-icon" > 
                                                        <i class="fa fa-plus"></i></a>

                                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                  
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)

                                    @foreach($user as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->username}}</td>
                                     <td>{{$data->role}}</td>
                             
                                       <td>
                                      
                                          <a href="{{url('superadmin/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>

                                            <a href="{{ route('deleteuser',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                




                                     </td>
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


  







@endsection