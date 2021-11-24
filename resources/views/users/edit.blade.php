@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Show') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" placeholder="Please enter your name" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <textarea name="email" class="form-control" >{{ $user->email }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
