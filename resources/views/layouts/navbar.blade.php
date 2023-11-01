<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PengaduanMasyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{'home'}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'masyarakat'}}">Daftar Masyarakat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'petugas'}}">Daftar Petugas</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 border-success " list="datalistOptions" type="search" placeholder="Cari Orang Hilang" aria-label="Search">
        <datalist id="datalistOptions">
          <option value="Asep">
          <option value="ucok">
          <option value="udin">
          <option value="Budi">
          <option value="martinah">
        </datalist>
        <button class="btn btn-outline-success" type="submit">Cari</button>
               
      </form>
      <a href="/logout" class="btn btn-outline-danger" style="margin-left:5px;">logout</a>
    </div>
  </div>
</nav>