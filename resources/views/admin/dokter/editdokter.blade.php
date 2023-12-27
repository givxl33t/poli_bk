@extends('admin.app')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Dokter</h3>
          <div class="card-tools">
              <a href="/adminlistobat" class="btn btn-danger"><i class="fas fa-times"></i></a>
          </div>
          <div class="card-body table-responsive p-0">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="/adminlistdokter/{{ $dokter->id }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_obat">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" value="{{ $dokter->nama }}" placeholder="Nama Dokter">
                </div>
                <div class="form-group">
                  <label for="code">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $dokter->alamat }}" placeholder="Alamat Dokter">
                </div>
                <div class="form-group">
                  <label for="code">Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="{{ $dokter->email }}" placeholder="Email Dokter">
                </div>
                <div class="form-group">
                  <label for="code">Password</label>
                  <input type="text" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Password Dokter">
                </div>
                <div class="form-group">
                  <label for="code">No HP</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $dokter->no_hp }}" placeholder="No HP Dokter">
                </div>
                <div class="form-group">
                  <label for="code">Poli</label>
                  <select name="id_poli" id="id_poli" class="form-control">
                    <option value="{{ $dokter->id_poli }}">{{ $dokter->poli->nama_poli }}</option>
                    @foreach ($polis as $item)
                      <option value="{{ $item->id }}">{{ $item->nama_poli }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection