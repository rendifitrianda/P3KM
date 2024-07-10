<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-delete">
        <div class="modal-content">
            <form action="{{ $action }}" method="POST">
                @csrf
                <div class="header">
                    <div class="icons">
                        <ion-icon name="trash-outline" class="icon"></ion-icon>
                    </div>
                    <h2>Hapus Data</h2>
                    <p>Yakin ingin menghapus data ini ?!</p>
                </div>
                <div class="footer">
                    <button type="submit" class="btn btn-danger">TETAP HAPUS</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                </div>
            </form>
        </div>
    </div>
</div>
