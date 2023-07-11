<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA MATERI </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/materi/create') }}" class="float-right btn btn-dark mb-4"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark text-center">
                        <th style="color: white;" width=" 10px">NO</th>
                        <th style="color: white;" width=" 90px">AKSI</th>
                        <th style="color: white;">JUDUL</th>
                        <th style=" color: white;">DESKRIPSI</th>
                        <th style=" color: white;">LINK</th>
                    </thead>
                    <tbody>
                        @foreach ($list_materi as $materi)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/materi" id="{{ $materi->id }}" />
                                    <x-template.button.edit-button url="admin/materi" id="{{ $materi->id }}" />
                                    <x-template.button.delete-button url="admin/materi" id="{{ $materi->id }}" />
                                </div>
                            </td>
                            <td>{{$materi->judul}}</td>
                            <td>{{$materi->deskripsi}}</td>
                            <td class="text-center"><a href="{{$materi->link}}" target="_blank" class="btn btn-primary btn-tone btn-sm"><i class="fas fa-link"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>