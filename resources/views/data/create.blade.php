<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                
                <div class="col-md-6">
                    <form method="POST" action="{{ route('data.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Nama</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="
                            name" type="text" value="{{ old('name') }}" placeholder="Nama" name="name" autocomplete="off">
                            @error('name')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="
                                                    exampleFormControlInput1" type="email"
                                value="{{ old('email') }}" placeholder="Email" name="email" autocomplete="off">
                            @error('email')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone">No phone</label>
                            <input class="form-control @error('phone') is-invalid @enderror" id="
                            phone" type="text" value="{{ old('phone') }}" placeholder="No phone" name="phone" autocomplete="off">
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
</div>