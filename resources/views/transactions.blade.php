@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Transactions <a class="pull-right btn btn-default">Add new</a></h4>
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
                                    <a href="#"><i class="material-icons">edit</i></a>
                                    <a href="#"><i class="materia-icons">delete</i></a>
                                </td>
                            </tr>
                    </tbody>
                    @empty
                        <tbody>
                            <tr>
                                <td>Dakota Rice</td>
                                <td>Niger</td>
                                <td>Oud-Turnhout</td>
                                <td class="text-primary">$36,738</td>
                            </tr>
                            <tr>
                                <td>Minerva Hooper</td>
                                <td>Curaçao</td>
                                <td>Sinaai-Waas</td>
                                <td class="text-primary">$23,789</td>
                            </tr>
                            <tr>
                                <td>Sage Rodriguez</td>
                                <td>Netherlands</td>
                                <td>Baileux</td>
                                <td class="text-primary">$56,142</td>
                            </tr>
                            <tr>
                                <td>Philip Chaney</td>
                                <td>Korea, South</td>
                                <td>Overland Park</td>
                                <td class="text-primary">$38,735</td>
                            </tr>
                            <tr>
                                <td>Doris Greene</td>
                                <td>Malawi</td>
                                <td>Feldkirchen in Kärnten</td>
                                <td class="text-primary">$63,542</td>
                            </tr>
                            <tr>
                                <td>Mason Porter</td>
                                <td>Chile</td>
                                <td>Gloucester</td>
                                <td class="text-primary">$78,615</td>
                            </tr>
                        </tbody>
                    @endforelse
                    
                </table>
            </div>
        </div>
    </div>
    
    </div>
                
@endsection