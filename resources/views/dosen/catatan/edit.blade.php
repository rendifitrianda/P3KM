<x-layouts.dosen.app>
    <section class="header">
        <h2 class="header-title">Edit Data Catatan Harian Saya</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('dosen/catatan/update',$list->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <x-input.select label="Jenis Catatan" name="jenis_catatan">
                                    <option value="">--- Pilih Jenis Catatan ---</option>
                                    <option value="Penelitian" @if ($list->jenis_catatan == 'Penelitian') selected @endif>Catatan Penelitian</option>
                                    <option value="Pengabdian" @if ($list->jenis_catatan == 'Pengabdian') selected @endif>Catatan Pengabdian</option>
                                </x-input.select>
                            </div>

                            <div class="col-md-6">
                                <x-input.input label="Judul" name="judul" value="{{ $list->judul }}" placeholder="Judul" />
                            </div>
                            <div class="col-md-12">
                                <x-input.input label="Keterangan" name="keterangan" value="{{ $list->keterangan }}" placeholder="Keterangan" />
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary float-end mt-3">Edit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dosen.app>
