@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Edit User</h4>
                    <p class="category">Edit user</p>
                </div>
                <div class="card-content">
                    <form method="post" action="{{ url('admin/users/'.$user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <div class="row">
                            
                            {{-- <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    {{-- <label class="control-label">Role</label> --}}
                                    <select class="form-control" name="role">
                                        <option value="">Select user type</option>
                                        <option value="user" {{ $user->user_type == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->user_type == 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Fist Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Adress</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $user->city }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">State</label>
                                    <input type="text" class="form-control" name="state" value="{{ $user->state }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Postal Code</label>
                                    <input type="text" class="form-control" name="postal" value="{{ $user->postal_code }}">
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary pull-right">Update user</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="../assets/img/faces/marc.jpg" />
                    </a>
                </div>
                <div class="content">
                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-content">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
