@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Transactions <a class="pull-right btn btn-default" href="{{ url('admin/newtransaction' ) }}">Add new</a></h4>
                <p class="category">All Transactions</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Id</th>
                        <th>Passenger name</th>
                        <th>Passenger Email</th>
                        <th>Price</th>
                        <th>Depart</th>
                        <th>Arrival</th>
                        <th>Depart Time</th>
                        <th>Arrive Time</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse($transactions as $t)
                            <tr>
                                <td>
                                    {{$t->id}}
                                </td>
                                <td>{{ $t->user_name }}</td>
                                <td>{{ $t->user->email }}</td>
                                <td>${{ $t->price }}</td>
                                <td>{{ $t->departure_location }}</td>
                                <td>{{ $t->arrival_location }}</td>
                                <td>{{ $t->departure_time }}</td>
                                <td>{{ $t->arrival_time }}</td>
                                <td>
                                    <a href="{{ url('admin/transactions/'.$t->id) }}"><i class="material-icons">edit</i></a>
                                    <form style="display: inline" action="{{ url('admin/transactions/'.$t->id) }}" method="post">
                                        {{ method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                        
                                    </form>
                                    {{-- <a href="#"><i class="material-icons">delete</i></a> --}}
                                </td>
                            </tr>
                    
                    @empty
                        <tbody>
                            
                        </tbody>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </div>
                
@endsection