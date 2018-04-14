@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Users <a href="{{ url('admin/newuser') }}" class="pull-right btn btn-primary">Add new</a></h4>
                <p class="category">All Users</p>
            </div>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Name</th>
                        <th>Email</th>
                        
                        <th>Transactions</th>
                        <th>City</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name() }}</td>
                                
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->transactions()->count() }}</td>
                                <td>{{ $user->city }}</td>
                                <td><a href="{{ url('admin/users/'.$user->id) }}"><i class="material-icons">mode edit</i></a> <a href="#" onclick="return confirm('Are you sure you want to delete?')"><i class="material-icons">delete</i></a></td>
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