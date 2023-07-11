<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA KURSUS </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/kursus/create') }}" class="float-right btn btn-dark mb-4"><i class="fas fa-plus"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-dark">
                        <th style="color: white;" width=" 10px" class="text-center">NO</th>
                        <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                        <th style="color: white;">JUDUL</th>
                        <th style=" color: white;">DESKRIPSI</th>
                        <th style=" color: white;">DURASI</th>
                    </thead>
                    <tbody>
                        @foreach ($list_kursus as $kursus)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/kursus" id="{{$kursus->id}}" />
                                    <x-template.button.edit-button url="admin/kursus" id="{{$kursus->id}}" />
                                    <x-template.button.delete-button url="admin/kursus" id="{{$kursus->id}}" />
                                </div>
                            </td>
                            <td>{{$kursus->judul}}</td>
                            <td>{{$kursus->deskripsi}}</td>
                            <td>{{$kursus->durasi}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>