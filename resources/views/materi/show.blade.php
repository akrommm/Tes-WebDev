<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL MATERI
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/materi" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/materi', $materi->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        DETAIL MATERI
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Judul</dt>
                                <dd class="col-md-8">: {{ $materi->judul }}</dd>
                                <dt class="col-md-4">Link</dt>
                                <dd class="col-md-8">: {{ $materi->link }}</dd>
                                <dt class="col-md-4">Deskripsi</dt>
                                <dd class="col-md-8">: {{ $materi->deskripsi }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>