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
          <table class="table table-striped table-hover">
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Kategori</th>
              <th>Keterangan</th>
            </tr>
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
