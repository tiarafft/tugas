@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                Add Vendor

                <a href="{{ url('/vendors') }}" class="float-right btn btn-sm btn-primary">Add</a>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url('/vendors/action') }}">
                    
                    @csrf
                    
                    <div class="form-goup">
                        <label>New Vendor Name</label>
                        <input type="text" name="name" class="form-control">

                        <label>New Address</label>
                        <input type="text" name="address" class="form-control">

                        @if($errors->has('vendors'))
                        <span class="text-danger">
                            <strong>{{$errors->first('vendors') }}</strong>
                        </span>
                        @endif

                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                    
                    </form>
                </div>
            </div>
        
        </div>
    </div>
</div>

@endsection