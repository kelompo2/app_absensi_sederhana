<a href="#" class="btn btn-primary btn-sm col-sm-4" data-bs-toggle="modal" data-bs-target="#datasekolah">Tambah Data</a>
  <thead>
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Nisn</th>
      <th scope="col">Nama Siswa</th>
      <th scope class="table">
    <h4 class="mb-3">#Data Siswa</h4>
    pe="col">JK</th>
      <th scope="col">Alamat</th>
      <th scope="col">Agama</th>
      <th scope="col">No Telepon</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="class-center"><a href="#">Edit</a> | <a href="#">Hapus</a></td>
      <td>00746435</td>
      <td>Boboboy</td>
      <td>L</td>
      <td>Cidam</td>
      <td>atheis</td>
      <td>087353835346</td>
    </tr>
    
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="datasekolah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">From Data Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     <!-- from tambah data -->
     <form>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nisn</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namasekolah">
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Nama Siswa</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="alamat"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmaill" class ="form-label">Jenis Kelamin</label>
    <select class="form-select" aria-label="Default select example">
        <option value="1">Laki-Laki</option>
        <option value="">Perempuam</option>
    </select>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <textarea type="password" class="form-control" id="exampleInputPassword1" name="alamat"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="notep">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmaill" class ="form-label">Agama</label>
    <select class="form-select" aria-label="Default select example">
        <option value="1">Islam</option>
        <option value="">Keristen</option>
        <option value="3 ">Budha</option>
    </select>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>o
  
</form>

      </div>
      
    </div>
  </div>
</div>