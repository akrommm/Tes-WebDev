<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL KURSUS
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/kursus" />
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/kursus', $kursus->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        DETAIL KURSUS
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Judul</dt>
                                <dd class="col-md-8">: {{ $kursus->judul }}</dd>
                                <dt class="col-md-4">Durasi</dt>
                                <dd class="col-md-8">: {{ $kursus->durasi }}</dd>
                                <dt class="col-md-4">Deskripsi</dt>
                                <dd class="col-md-8">: {{ $kursus->deskripsi }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="accordion borderless" id="accordion-borderless">
            <div class="card">
                <div class="card-header" role="tab">
                    <h1 class="card-title">
                        <button class="btn btn-dark font-bold collapsed mt-3 mr-4 mb-3 float-right" data-toggle="collapse" href="#collapseTwoBorderless"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Materi</button>
                    </h1>
                </div>
                <div id="collapseTwoBorderless" class="collapse" data-parent="#accordion-borderless">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ url('admin/materi') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id_kursus" value="{{ $kursus->id }}">
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
                                    <div class="form-group">
                                        <button class="btn btn-primary float-right"><i class="far fa-save"></i> Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-center">
                        <th style="color: white;" width=" 90px">AKSI</th>
                        <th style="color: white;">JUDUL</th>
                        <th style=" color: white;">DESKRIPSI</th>
                        <th style=" color: white;">LINK</th>
                    </thead>
                    <tbody>
                        @foreach ($materi as $m)
                        @if ($m->id_kursus == $kursus->id)
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.edit-button url="admin/materi" id="{{ $m->id }}" />
                                    <x-template.button.delete-button url="admin/materi" id="{{ $m->id }}" />
                                </div>
                            </td>
                            <td>{{$m->judul}}</td>
                            <td>{{$m->deskripsi}}</td>
                            <td class="text-center"><a href="{{$m->link}}" target="_blank" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-link"></i></a></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>