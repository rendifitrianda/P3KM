<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Form Tambah Data Penelitian</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('operator/penelitian/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="status_penelitian" value="Baru">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.select label="Dosen" name="id_dosen">
                                    <option value="">--- Pilih Dosen ---</option>
                                    @foreach ($dosen as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </x-input.select>
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Ketua" name="ketua" placeholder="Ketua" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Bidang" name="bidang" placeholder="Bidang" />
                            </div>
                            <div class="col-md-4">
                                <x-input.select label="Tahun" name="tahun" placeholder="Tahun">
                                    <option value="">--- Pilih Tahun ---</option>
                                    @for ($i = 2020; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </x-input.select>
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Peran" name="peran" placeholder="Peran" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Berkas" type="file" name="berkas" placeholder="Berkas" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Penilaian" name="penilaian" placeholder="Penilaian" />
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary float-end mt-3">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.operator.app>
