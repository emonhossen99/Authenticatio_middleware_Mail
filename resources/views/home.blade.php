@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form  action="{{ url('/profile_picture') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="picture" class="form-label text-primary fw-bold">Insert Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                      </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
