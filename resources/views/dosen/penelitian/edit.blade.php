<x-layouts.dosen.app>
    <section class="header">
        <h2 class="header-title">Edit Data Penelitian</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('dosen/penelitian/update',$list->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input label="Ketua" name="ketua" value="{{ $list->ketua }}" placeholder="Ketua" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Bidang" name="bidang" value="{{ $list->bidang }}" placeholder="Bidang" />
                            </div>
                            <div class="col-md-4">
                                <x-input.select label="Tahun" name="tahun" placeholder="Tahun">
                                    <option value="">--- Pilih Tahun ---</option>
                                    @for ($i = 2020; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}" @if ($list->tahun == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </x-input.select>
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Peran" name="peran" value="{{ $list->peran }}" placeholder="Peran" />
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Upload Berkas Baru" type="file" name="berkas" placeholder="Berkas" />
                            </div>


                            <div class="col-md-12">
                                <button class="btn btn-primary float-end mt-3">Perbaharui</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dosen.app>
