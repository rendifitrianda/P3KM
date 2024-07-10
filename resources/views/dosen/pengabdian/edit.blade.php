<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Edit Data Pengabdian</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('dosen/pengabdian/update',$list->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <x-input.input label="Skema" name="skema" value="{{ $list->skema }}" placeholder="Skema" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Judul" name="judul" value="{{ $list->judul }}" placeholder="Judul" />
                            </div>
                            <div class="col-md-4">
                                <x-input.select label="Tahun" name="tahun" placeholder="Tahun">
                                    <option value="">--- Pilih Tahun ---</option>
                                    @for ($i = 2020; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}" @if ($list->tahun == $i) selected @endif>{{ $i }}</option>
                                    @endfor
                                </x-input.select>
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Dana" name="dana" value="{{ $list->dana }}" placeholder="Dana" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Upload Berkas Baru" type="file" name="berkas" placeholder="Berkas baru" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Program" name="program" value="{{ $list->program }}" placeholder="Program" />
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
</x-layouts.operator.app>
