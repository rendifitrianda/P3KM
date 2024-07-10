<x-layouts.operator.app>
    <section class="header">
        <h2 class="header-title">Form Tambah Data Dosen</h2>
    </section>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('operator/dosen/store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="Dosen">
                        <div class="row">
                            <div class="col-md-4">
                                <x-input.input label="NIDN" name="nidn" placeholder="NIDN" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Nama" name="nama" placeholder="Nama" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Klaster" name="klaster" placeholder="Klaster" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Institusi" name="institusi" placeholder="Institusi" />
                            </div>
                            <div class="col-md-4">
                                <x-input.select label="Program Studi" name="program_studi" placeholder="Program Studi">
                                    <option value="">----Pilih Program Studi----</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </x-input.select>
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="KTP" name="ktp" placeholder="KTP" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Jabatan" name="jabatan" placeholder="Jabatan" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Alamat" name="alamat" placeholder="Alamat" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tmp Lahir" name="tmp_lahir" placeholder="Tmp Lahir" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tgl Lahir" type="date" name="tgl_lahir" placeholder="Tgl Lahir" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Tlp" name="tlp" placeholder="Tlp" />
                            </div>
                            <div class="col-md-4">
                                <x-input.input label="Website" name="website" placeholder="Website" />
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Username" name="username" placeholder="Username" />
                            </div>
                            <div class="col-md-6">
                                <x-input.input label="Password" name="password" placeholder="Password" />
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
