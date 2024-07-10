<x-layouts.dosen.app>
    <section class="header">
        <h2 class="header-title">Data Catatan Harian Saya</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header flex items-end justify-end">
                    <a href="{{ url('dosen/catatan/create') }}" class="btn btn-success">
                        <ion-icon name="add-outline" class="icon"></ion-icon>
                        <span>Tambah</span>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dosen</th>
                                <th>Jenis Catatan</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $catatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $catatan->dosen->nama }}</td>
                                <td>{{ $catatan->jenis_catatan }}</td>
                                <td>{{ $catatan->judul }}</td>
                                <td>{{ $catatan->keterangan }}</td>

                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('dosen/catatan/edit',$catatan->id) }}" class="btn btn-primary">
                                            <ion-icon name="create-outline" class="icon"></ion-icon>
                                        </a>
                                        <a href="#hapus{{ $catatan->id}}" class="btn btn-danger" data-bs-toggle="modal">
                                            <ion-icon name="trash-outline" class="icon text-xl"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <x-modal.delete id="hapus{{ $catatan->id}}" action="{{ url('dosen/catatan/delete',$catatan->id) }}" />
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dosen.app>
