<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT DATA KURSUS
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/kursus" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Kursus
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/kursus', $kursus->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Judul</label>
                                    <input type="text" name="judul" value="{{ $kursus->judul }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Durasi</label>
                                    <input type="text" name="durasi" value="{{ $kursus->durasi }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control">{{ $kursus->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>