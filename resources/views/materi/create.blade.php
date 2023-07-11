<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA MATERI
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/materi" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Materi
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/materi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
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