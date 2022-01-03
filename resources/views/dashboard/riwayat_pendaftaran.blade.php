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
            @if (session('message'))
              <div class="alert alert-success" role="alert">
                {{ session('message') }}
              </div>
            @endif
            <div class="main-card mb-3 card">
              <div class="card-body">
                <h5 class="card-title">Riwayat Pendaftaran</h5>
                <table class="mb-0 table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Kategori</th>
                      <th>Boleh Vaksin</th>
                      <th>Waktu</th>
                      @if($role == 'admin')
                      <th>Aksi</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @if(!count($registers))
                      <tr class="text-center">
                        <td colspan="7">Tidak ada data register</td>
                      </tr>
                    @endif

                    @foreach($registers as $key => $regist)
                      @php
                        $user = App\User::find($regist->user_id);
                      @endphp
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$regist->nik}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->birth_date}}</td>
                        <td>{{$regist->keterangan}}</td>
                        <td>{{$regist->status}}</td>
                        <td>{{$regist->created_at}}</td>
                        @if($role == 'admin')
                          <th><a href="{{route('dashboard.delete_riwayat_pendaftaran', $regist->id)}}" class="text-danger">Hapus</a></th>
                        @endif
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
