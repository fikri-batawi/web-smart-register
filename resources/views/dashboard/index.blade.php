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
          <!-- Page Title -->
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="pe-7s-car icon-gradient bg-mean-fruit"> </i>
                </div>
                <div>
                  Smart Register
                  <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                  </div>
                </div>
              </div>
            </div>
          </div>            
          <!-- Card Info -->
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Total Pendaftaran</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>1896</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Peserta ditunda vaksin</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>568</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Peserta boleh vaksin </div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46</span></div>
                  </div>
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
