@extends('FuelStationAttender.layouts.master')
@section('title','E-SHOP || DASHBOARD')
@section('main-contents')

<div class="card shadow mb-4">
    <div class="row">
        <div class="col-md-12">
           {{-- @include('backend.layouts.notification') --}}
        </div>
    </div>
   <div class="card-header py-3">
     <h4 class=" font-weight-bold">user</h4>
     <ul class="breadcrumbs">
         <li><a href="{{route('HOD')}}" style="color:#999">Dashboard</a></li>
         <li><a href="" class="active text-primary">user Page</a></li>
     </ul>
   </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="image">
                        @if($user->photo)
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{$user->photo}}" alt="user picture">
                        @else
                        <img class="card-img-top img-fluid roundend-circle mt-4" style="border-radius:50%;height:80px;width:80px;margin:auto;" src="{{asset('backend/img/avatar.png')}}" alt="user picture">
                        @endif
                    </div>
                    <div class="card-body mt-4 ml-2">
                      <h5 class="card-title text-left"><small><i class="fas fa-user"></i> {{$user->name}}</small></h5>
                      <h5 class="card-title text-left"><small><i class="fas fa-user"></i>Department:{{$user->department->name}}</small></h5>

                      <p class="card-text text-left"><small><i class="fas fa-envelope"></i> {{$user->email}}</small></p>
                      <p class="card-text text-left"><small class="text-muted"><i class="fas fa-hammer"></i> {{$user->role}}</small></p>
                    </div>
                  </div>
            </div>
            <div class="col-md-8">
                <form class="border px-4 pt-2 pb-3" method="POST" action="{{route('update.profile',$user->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Name</label>
                      <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$user->name}}" class="form-control">
                      @error('name')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>


                      <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Phone</label>
                      <input id="inputTitle" type="number" name="phone" placeholder="Enter phone"  value="{{$user->phone}}" class="form-control">
                      @error('phone')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                      </div>












                      <div class="form-group">
                          <label for="inputEmail" class="col-form-label">Email</label>
                        <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$user->email}}" class="form-control">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>


                      <div class="form-group">
                        <label for="inputsap" class="col-form-label">SAP</label>
                      <input id="inputsap" disabled type="sap" name="sap" placeholder="Enter sap"  value="{{$user->sap}}" class="form-control">
                      @error('sap')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>


                      <div class="form-group">
                      <label for="inputPhoto" class="col-form-label">Photo</label>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                              </a>
                          </span>
                          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
                      </div>
                        @error('photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>












                             {{-- <div class="form-group">
                        <label for="password" class="col-form-label">Current Password </label>
                      <input id="password"   type="password" name="oldpassword" placeholder="Current Password"  value="{{$user->password}}" class="form-control" >
                      @error('password')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>






                    <div class="form-group">
                      <label for="newpassword" class="col-form-label"> New Password </label>
                    <input id="newpassword"  type="newpassword" name="newpassword" placeholder="New Password"  value="{{$user->password}}" class="form-control" >
                    @error('newpassword')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div> --}}




                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                </form>
            </div>
        </div>
   </div>
</div>

@endsection

<style>
    .breadcrumbs{
        list-style: none;
    }
    .breadcrumbs li{
        float:left;
        margin-right:10px;
    }
    .breadcrumbs li a:hover{
        text-decoration: none;
    }
    .breadcrumbs li .active{
        color:red;
    }
    .breadcrumbs li+li:before{
      content:"/\00a0";
    }
    .image{
        background:url('{{asset('backend/img/background.jpg')}}');
        height:150px;
        background-position:center;
        background-attachment:cover;
        position: relative;
    }
    .image img{
        position: absolute;
        top:55%;
        left:35%;
        margin-top:30%;
    }
    i{
        font-size: 14px;
        padding-right:8px;
    }
  </style>

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush
