<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="" action="">
                @csrf
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nama barang:</label>
                    <input type="text" class="form-control" id="recipient-name" name="namabarang">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Jumlah barang:</label>
                    <input type="number" class="form-control" id="recipient-name" name="jumlahbarang">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Kondisi barang:</label>
                    <textarea class="form-control" id="message-text" name="kondisibarang"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </div>
</div>
