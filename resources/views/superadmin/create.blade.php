@extends('layouts.template')
@section('content')

        <form  action="{{url('superadmin/create')}}" method="post"  enctype="multipart/form-data">
                                                {!! csrf_field() !!}

        <div class="col-lg-8 col-md-7">
                        <div class="card" >
                            <div class="header">
                                <h4 class="title">Tambah User Management</h4>
                            </div>
                            <div class="content">



                  

    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control border-input" name="username" >
            </div>
        </div>


        <div class="col-md-5">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control border-input" name="password" >
            </div>
            </div>
            </div>
<div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Company Code</label>
                <input type="text" class="form-control border-input" name="company_code" >
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