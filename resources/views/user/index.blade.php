@extends('layouts.template')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            @if(Auth::user()->company_code == 'A')
                                <h4 class="title">List User Company A</h4>
                                @elseif(Auth::user()->company_code == 'B')
                                <h4 class="title">List User Company B</h4>
                                @else
                                                                <h4 class="title">List User Company</h4>

@endif
                                 <div class="text-right">
 <a href="{{url('user/create')}}" class="btn btn-sm btn-success btn-icon" > 
                                                        <i class="fa fa-plus"></i></a>

                                                    </div>
                                                    
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Jabatan</th>
                                        <th>Pilihan</th>
                                  
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)

                                    @foreach($user as $data)

                                     <td>{{$no++}}</td>
                                                                            
                                                                            <td>{{$data->username}}</td>
                                                                          
                                                                          <td>{{$data->role}}</td>

                    
                               <td> 
                                          <a href="{{url('user/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>
                                          
                                            <a href="{{ route('deleteuser',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                           



                                     </td>
                                    
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


  







@endsection