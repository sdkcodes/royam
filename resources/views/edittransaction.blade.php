@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title">Edit Transaction</h4>
                    <p class="category">Update transaction</p>
                </div>
                <div class="card-content">
                    <form method="post" action="{{ url('admin/transactions/'.$transaction->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Passenger Email</label>
                                    <input type="email" class="form-control transaction-email" id="email-input" name="email" value="{{ $transaction->user->email }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <select class="form-control" name="class">
                                        <option value="Economy" {{ $transaction->class == 'Economy' ? 'selected' : '' }}>Economy</option>
                                        <option value="Business" {{ $transaction->class == 'Business' ? 'selected' : '' }}>Business</option>
                                        <option value="First class" {{ $transaction->class == 'First class' ? 'selected' : '' }}>First class</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Price $</label>
                                    <input type="number" class="form-control" name="price" value="{{ $transaction->price }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Departure</label>
                                    <input type="text" class="form-control departure" name="departure" value="{{ $transaction->departure_location }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Arrival</label>
                                    <input type="text" class="form-control arrival" name="arrival" value="{{ $transaction->arrival_location }}">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Adress</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Departure time</label>
                                    <input type="datetime-local" class="form-control" name="departure_time" value="{{ $transaction->departure_time }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Arrival time</label>
                                    <input type="datetime-local" class="form-control" name="arrival_time" value="{{ $transaction->arrival_time }}">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Adults</label>
                                    <input type="number" class="form-control" name="adult_count" value="{{ $transaction->adult_count }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Children</label>
                                    <input type="number" class="form-control" name="children_count" value="{{ $transaction->children_count }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating">
                                    <label class="control-label">Infants</label>
                                    <input type="number" class="form-control" name="infant_count" value="{{ $transaction->infant_count }}">
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary pull-right">Update Transaction</button>
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
