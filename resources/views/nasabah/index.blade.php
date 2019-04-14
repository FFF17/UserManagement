@extends('layouts.template')
@section('content')



    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            @if(Auth::user()->company_code == 'A')
                                <h4 class="title">List Nasabah Company A</h4>
                                @else
                                <h4 class="title">List Nasabah Company B</h4>
                                @endif
                                 <div class="text-right">
                                 <div class="row">


                                                    
 <a href="{{url('nasabah/excel')}}" class="btn btn-sm btn-success btn-icon" > 
                                                       Excel</a>

<a href="{{{route('downloadpdf_allnasabah')}}}" class="btn btn-sm btn-success btn-icon" > 
                                                       PDF</a>
 <a href="{{url('nasabah/create')}}" class="btn btn-sm btn-success btn-icon" > 
                                                      Create New</a>
                            </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Code Nasabah</th>
                                        <th>Nama Nasabah</th>
                                        <th>SID</th>
                                        <th>Status</th>
                                        <th>Company Code</th>

                                        <th>Pilihan</th>
                                  
                                    </thead>
                                    <tbody>
                                    @php ($no = 1)

                                    @foreach($nasabah as $data)

                                     <td>{{$no++}}</td>
                                     <td>{{$data->code_nasabah}}</td>
                                     <td>{{$data->nama_nasabah}}</td>
                                     <td>{{$data->sid}}</td>
                                     <td>{{$data->status}}</td>
                                     <td>{{$data->company_code}}</td>
                             
                                     <td>
                                            @if(Auth::user()->role == 'admin')
                                          <a href="{{url('nasabah/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>

                                            <a href="{{ route('deletenasabah',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                            </td>
                                @elseif(Auth::user()->role == 'Supervisi')
 <a href="{{url('nasabah/edit/'.$data->id) }} " class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>

                                            <a href="{{ route('deletenasabah',[$data->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>
                                            @else
<td>



                                     </td>
                                     @endif
                                    </tbody>
                                @endforeach
                                </table>

                            </div>
                        </div>
                    </div>


  







@endsection