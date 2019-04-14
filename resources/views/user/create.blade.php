@extends('layouts.template')
@section('content')

        <form  action="{{url('user/create')}}" method="post"  enctype="multipart/form-data">
                                                {!! csrf_field() !!}

        <div class="col-lg-8 col-md-7">
                        <div class="card" >
                            <div class="header">
                                <h4 class="title">Tambah User</h4>
                            </div>
                            <div class="content">



                  

    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control border-input"  required="" name="username" >
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
                           <label for="inputState">Role</label>
                           <select id="inputState" class="form-control" name="role">
                               <option selected>Choose...</option>
                        

                               <option value="Staff">Staff</option>
                           
                               <option value="Supervisi">Supervisi</option>

                                @if(Auth::user()->role == 'superadmin')
                               <option value="Admin">Admin</option>
                               @endif

                                    
                            

                           </select>

                       </div>

    </div>
        
                                        
                                @if(Auth::user()->role == 'superadmin')
                   <div class="col-md-5">
                        <div class="form-group">
                           <label for="inputState">Role</label>
                           <select id="inputState" class="form-control" name="company_code">
                               <option selected>Choose...</option>
                        

                               <option value="A">A</option>
                           
                               <option value="B">B</option>


                                    
                            

                           </select>

                       </div>

                               @endif
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