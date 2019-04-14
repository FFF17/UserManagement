@extends('layouts.template')
@section('content')

        <form  action="{{url('user/dashboard')}}" method="post"  enctype="multipart/form-data">
                                                {!! csrf_field() !!}

        <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create New Password</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                               


                               
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control border-input" name="password">
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