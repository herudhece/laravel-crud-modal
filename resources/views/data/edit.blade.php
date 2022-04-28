@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            
            <div class="col-md-12">
                <form method="POST" action="{{ route('data.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="
                        name" type="text" value="{{ old('name') ? old('name') : $data->name }}" placeholder="Nama" name="name" autocomplete="off">
                        @error('name')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="
                                                exampleFormControlInput1" type="email"
                            value="{{ old('email') ? old('email') : $data->email }}" placeholder="Email" name="email" autocomplete="off">
                        @error('email')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone">No phone</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="
                        phone" type="text" value="{{ old('phone') ? old('phone') : $data->phone }}" placeholder="No phone" name="phone" autocomplete="off">
                        @error('phone')
                            <span style="color: red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
       
</div>   

@endsection