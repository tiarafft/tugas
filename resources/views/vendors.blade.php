@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                Vendors Data

                <a href="{{ url('/vendors/add') }}" class="float-right btn btn-sm btn-primary">Add</a>
                </div>

                <div class="card-body">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif

                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th width="25%" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @php
                        $no=1;
                        @endphp
                        @foreach($vendors as $v)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->address}}</td>
                            <td class="text-center">
                            <a href="{{ url('/vendors/edit/'.$v->id) }}" class="btn btn-sm btn-primary" >Edit</a>
                            <a href="{{ url('/vendors/delete/'.$v->id) }}" class="btn btn-sm btn-primary" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        
                        </tbody>

                        </table>
                
                </div>
            </div>
        
        </div>
    </div>
</div>

@endsection