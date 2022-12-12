@extends('layouts.admin');

@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3>Add Colors
                    <a href="{{url('admin/colors')}}" class="btn btn-primary btn-sm float-end">Back </a>
                </h3>

            </div>
            <div class="card-body">
                 @if(session('message'))
                    <h2>{{session('message') }}</h2>
                 @endif
              
                       
                 <form action="{{url('admin/colors')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Code</label>
                                    <input type="text" name="code" class="form-control">
                                    @error('code') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                          
                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label><br>
                                    <input type="checkbox" name="status" value="1">
                                    @error('status') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            
                                <div class="col-md-12 mb-3">
                                   <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>
                            </div>
                        </form>
            </div>

        </div>
    </div>
</div>
@endsection
