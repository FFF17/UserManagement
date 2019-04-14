@extends('layouts.template')
@section('content')

        <form  action="{{url('nasabah/edit')}}" method="post"  enctype="multipart/form-data">
      

                                                {!! csrf_field() !!}
 <input type="hidden" name="id" value="{{ $nasabah->id }}">

        <div class="col-lg-8 col-md-7">
                        <div class="card" >
                            <div class="header">
                                <h4 class="title">Tambah Nasabah</h4>
                            </div>
                            <div class="content">



                  


<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Nasbah</label>
                <input type="text" class="form-control border-input" value="{{$nasabah->nama_nasabah}}" name="nama_nasabah" >
            </div>
            </div>
          

                
                   <div class="col-md-6">
                        <div class="form-group">
                  
        
                                        

                <label>Nomor Rekening</label>
                <input type="text" class="form-control border-input" value="{{$nasabah->nomor_rekening}}" name="nomor_rekening" >
            </div>
</div>
</div>
<div class="row">


        <div class="col-md-6">
            <div class="form-group">
                <label>SID</label>
                <input type="text" class="form-control border-input" value="{{$nasabah->sid}}" name="sid" >
            </div>
            </div>
            

                   <div class="col-md-5">
                        <div class="form-group">
                           <label for="inputState">Status</label>
                           <select id="inputState" class="form-control" value="{{$nasabah->status}}" name="status">
                               <option selected>Choose...</option>
                        

                               <option value="Active">Active</option>
                           
                               <option value="Non-Active">Non-Active</option>


                                    
                            

                           </select>

                       </div>

    </div>
                   </div>
                   



                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </form>

@endsection