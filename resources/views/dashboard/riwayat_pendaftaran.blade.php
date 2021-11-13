<!-- Head -->
@include('dashboard.includes.head')
<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <!-- Header -->
    @include('dashboard.includes.header')
    <div class="app-main">
      <!-- Sidebar -->
      @include('dashboard.includes.sidebar')
      <div class="app-main__outer">
        <div class="app-main__inner">
          <!-- Content -->
          <div class="row">
            <div class="col-md-12">
            <div class="main-card mb-3 card">
              <div class="card-body">
                <h5 class="card-title">Riwayat Pendaftaran</h5>
                <table class="mb-0 table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Kategori</th>
                      <th>Boleh Vaksin</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($registers as $key => $regist)
                      <tr>
                        <th>{{$key + 1}}</th>
                        <td>{{$regist->nik}}</td>
                        <td>{{$regist->keterangan}}</td>
                        <td>{{$regist->status}}</td>
                        <td>{{$regist->created_at}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
            </div>
          </div>
          <!-- End Content -->
        </div>
         <!-- Footer -->
         @include('dashboard.includes.footer')
      </div>
    </div>
  </div>
  <!-- Script -->
  @include('dashboard.includes.script')
</body>
</html>
