<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Buat Catatan Harian</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('operator/catatan/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_dosen" value="{{ $dosen->id }}">
                        <div class="row">

                            <div class="col-md-6">
                                <x-input.select label="Jenis Catatan" name="jenis_catatan">
                                    <option value="">--- Pilih Jenis Catatan ---</option>
                                    <option value="Penelitian">Catatan Penelitian</option>
                                    <option value="Pengabdian">Catatan Pengabdian</option>
                                </x-input.select>
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Judul" name="judul" placeholder="Judul" />
                            </div>
                            <div class="col-md-12">
                                <x-input.input label="Keterangan" name="keterangan" placeholder="Keterangan" />
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
