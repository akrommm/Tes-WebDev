<x-app>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL USER
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/user" />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    @if ($user->foto)
                    <img src="{{ url($user->foto) }}" class="img-fluid" alt="">
                    @else
                    <img src="{{url('/')}}/images/profile.jpg" class="img-fluid" alt="">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        DETAIL USER
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Nama Lengkap</dt>
                                <dd class="col-md-8">: {{ $user->nama }}</dd>
                                <dt class="col-md-4">Jenis Kelamin</dt>
                                <dd class="col-md-8">: {{ $user->jenis_kelamin }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Username</dt>
                                <dd class="col-md-8">: {{ $user->username }}</dd>
                                <dt class="col-md-4">Email</dt>
                                <dd class="col-md-8">: {{ $user->email }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>