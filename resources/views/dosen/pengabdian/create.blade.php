<x-layouts.dosen.app>
    <section class="header">
        <h2 class="header-title">Form Tambah Data Pengabdian</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('dosen/pengabdian/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="status_pengapdian" value="Baru">
                        <input type="hidden" name="id_dosen" value="{{ $dosen->id }}">
                        <div class="row">

                            <div class="col-md-4">
                                <x-input.input label="Skema" name="skema" placeholder="Skema" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Judul" name="judul" placeholder="Judul" />
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
                                <x-input.input label="Dana" name="dana" placeholder="Dana" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Berkas" type="file" name="berkas" placeholder="Berkas" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Program" name="program" placeholder="Program" />
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
</x-layouts.dosen.app>
