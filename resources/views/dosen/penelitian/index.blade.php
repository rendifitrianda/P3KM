<x-layouts.dosen.app>
    <section class="header">
        <h2 class="header-title">Data Penelitian Saya</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header flex items-end justify-end">
                    <a href="{{ url('dosen/penelitian/create') }}" class="btn btn-success">
                        <ion-icon name="add-outline" class="icon"></ion-icon>
                        <span>Buat Penelitian</span>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dosen</th>
                                <th>Bidang</th>
                                <th>Tahun</th>
                                <th>Penilaian</th>
                                <th>Berkas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $penelitian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $penelitian->dosen->nama }}</td>
                                <td>{{ $penelitian->bidang }}</td>
                                <td>{{ $penelitian->tahun }}</td>
                                <td>{{ $penelitian->penilaian }}</td>
                                <td>
                                    <a href="#" class="px-3 py-2 text-sm bg-purple-500 hover:bg-purple-600 max-w-[11rem] inline-flex items-center gap-2 text-white rounded-md">
                                        <i class="bi bi-download"></i>
                                        <span>Download Berkas</span>
                                    </a>
                                </td>
                                <td>
                                    @if ($penelitian->status_penelitian == 'Baru')
                                        <span class="badge bg-cyan-500 text-white">Baru</span>
                                    @elseif ($penelitian->status_penelitian == 'Diverifikasi')
                                        <span class="badge bg-green-500 text-white">Diverifikasi</span>
                                    @elseif ($penelitian->status_penelitian == 'Ditolak')
                                        <span class="badge bg-red-500 text-white">Ditolak</span>

                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @if ($penelitian->status_penelitian == 'Baru' || $penelitian->status_penelitian == 'Ditolak')
                                        <a href="{{ url('dosen/penelitian/edit',$penelitian->id) }}" class="btn btn-primary">
                                            <ion-icon name="create-outline" class="icon"></ion-icon>
                                            <span>Perbaiki</span>
                                        </a>
                                        @else
                                            <i class="bi bi-check-circle-fill text-success text-xl"></i>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dosen.app>