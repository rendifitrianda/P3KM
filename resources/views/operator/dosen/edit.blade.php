<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Edit Data Dosen</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('operator/dosen/update',$list->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input label="NIDN" name="nidn" value="{{ $list->nidn }}" placeholder="NIDN" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Nama" name="nama" value="{{ $list->nama }}" placeholder="Nama" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Klaster" name="klaster" value="{{ $list->klaster }}" placeholder="Klaster" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Institusi" name="institusi" value="{{ $list->institusi }}" placeholder="Institusi" />
                            </div>
                            <div class="col-md-4">
                                <x-input.select label="Program Studi" name="program_studi" placeholder="Program Studi">
                                    <option value="">----Pilih Program Studi----</option>
                                    <option value="S1" @if ($list->program_studi == 'S1') selected @endif>S1</option>
                                    <option value="S2" @if ($list->program_studi == 'S2') selected @endif>S2</option>
                                    <option value="S3" @if ($list->program_studi == 'S3') selected @endif>S3</option>
                                </x-input.select>
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="KTP" name="ktp" value="{{ $list->ktp }}" placeholder="KTP" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Jabatan" name="jabatan" value="{{ $list->jabatan }}" placeholder="Jabatan" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Alamat" name="alamat" value="{{ $list->alamat }}" placeholder="Alamat" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tmp Lahir" name="tmp_lahir" value="{{ $list->tmp_lahir }}" placeholder="Tmp Lahir" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tgl Lahir" type="date" name="tgl_lahir" value="{{ $list->tgl_lahir }}" placeholder="Tgl Lahir" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tlp" name="tlp" value="{{ $list->tlp }}" placeholder="Tlp" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Website" name="website" value="{{ $list->website }}" placeholder="Website" />
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Username" name="username" value="{{ $list->username }}" placeholder="Username" />
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Ganti Password" name="password"  placeholder="Ganti Password" />
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
