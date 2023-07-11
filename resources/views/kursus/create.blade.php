<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA KURSUS
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/kursus" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Kursus
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/kursus') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            @if ($errors->has('judul'))
                            <label for="" class="label text-danger">{{ $errors->get('judul')[0] }}</label>
                            @endif
                            <input type="text" name="judul" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Durasi</label>
                            @if ($errors->has('durasi'))
                            <label for="" class="label text-danger">{{ $errors->get('durasi')[0] }}</label>
                            @endif
                            <input type="text" name="durasi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            @if ($errors->has('deskripsi'))
                            <label for="" class="label text-danger">{{ $errors->get('deskripsi')[0] }}</label>
                            @endif
                            <textarea type="text" name="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-tone float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>