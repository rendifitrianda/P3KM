<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Data Dosen</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header flex items-end justify-end">
                    <a href="{{ url('/operator/dosen/create') }}" class="btn btn-success">
                        <ion-icon name="add-outline" class="icon"></ion-icon>
                        <span>Tambah</span>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>Tempat Tempat Lahir</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $dosen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dosen->nidn }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->ttl() }}</td>
                                <td>{{ $dosen->jabatan }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('operator/dosen/edit/'.$dosen->id) }}" class="btn btn-primary">
                                            <ion-icon name="create-outline" class="icon"></ion-icon>
                                        </a>
                                        <a href="#hapus{{ $dosen->id}}" class="btn btn-danger" data-bs-toggle="modal">
                                            <ion-icon name="trash-outline" class="icon text-xl"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <x-modal.delete id="hapus{{ $dosen->id}}" action="{{ url('operator/dosen/delete',$dosen->id) }}" />
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.operator.app>
