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
          <!-- NIK -->
          <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
              <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Grid Rows</h5>
                  <form class="">
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Tab -->
          <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#anak-anak">
                    <span>Card Tabs</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#umum">
                    <span>Animated Lines</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#ibu-hamil">
                    <span>Basic</span>
                </a>
            </li>
          </ul>
          <div class="tab-content">
            <!-- Pertanyaan anak-anak -->
            <div class="tab-pane tabs-animation fade show active" id="anak-anak" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                      <!-- pertanyaan -->
                        <h5 class="card-title">1. Checkboxes &amp; Radios</h5>
                        <fieldset class="position-relative form-group">
                            <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label>
                            </div>
                            <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                one</label></div>
                        </fieldset>
                        <h5 class="card-title">1. Checkboxes &amp; Radios</h5>
                        <fieldset class="position-relative form-group">
                            <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label>
                            </div>
                            <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                one</label></div>
                        </fieldset>
                        <!--  -->
                    </div>
                </div>
            </div>

             <!-- Pertanyaan umum -->
            <div class="tab-pane tabs-animation fade" id="umum" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 card">
                            <div class="card-body">
                                <ul class="tabs-animated-shadow tabs-animated nav">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                            <span>Tab 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" id="tab-c-1" data-toggle="tab" href="#tab-animated-1">
                                            <span>Tab 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" id="tab-c-2" data-toggle="tab" href="#tab-animated-2">
                                            <span>Tab 3</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                                        <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="tab-pane" id="tab-animated-2" role="tabpanel">
                                        <p class="mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="card-header card-header-tab-animation">
                                <ul class="nav nav-justified">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-2" class="nav-link">Tab 3</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg115-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg115-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg115-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 card">
                            <div class="card-body">
                                <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                                            <span class="nav-text">Tab 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                                            <span class="nav-text">Tab 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" id="tab-c1-2" data-toggle="tab" href="#tab-animated1-2">
                                            <span class="nav-text">Tab 3</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                                        <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown
                                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                    </div>
                                    <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                                        <p class="mb-0">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                                            PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header-tab-animation card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-gift icon-gradient bg-love-kiss"> </i>Tabs Alternate Animation</div>
                                <ul class="nav">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg8-2" class="nav-link">Tab 3</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                        essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                            <div class="d-block text-center card-footer">
                                <a href="javascript:void(0);" class="btn-wide btn btn-link">Link Button</a>
                                <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

             <!-- Pertanyaan Ibu hamil -->
            <div class="tab-pane tabs-animation fade" id="ibu-hamil" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Basic</h5>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg10-2" class="nav-link">Tab 3</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg10-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg10-1" role="tabpanel"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg10-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Justified Alignment</h5>
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg11-0" class="active nav-link">Tab 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg11-1" class="nav-link">Tab 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg11-2" class="nav-link">Tab 3</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg11-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg11-1" role="tabpanel"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg11-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Tabs Variations</h5>
                                <div class="mb-3">
                                    <div role="group" class="btn-group-sm nav btn-group">
                                        <a data-toggle="tab" href="#tab-eg12-0" class="btn-pill pl-3 active btn btn-warning">Tab 1</a>
                                        <a data-toggle="tab" href="#tab-eg12-1" class="btn btn-warning">Tab 2</a>
                                        <a data-toggle="tab" href="#tab-eg12-2" class="btn-pill pr-3  btn btn-warning">Tab 3</a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg12-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg12-1" role="tabpanel"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg12-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Pills</h5>
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg13-0" class="active nav-link">Pill 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg13-1" class="nav-link">Pill 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg13-2" class="nav-link">Pill 3</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg13-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg13-1" role="tabpanel"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg13-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Pills</h5>
                                <ul class="nav nav-pills nav-fill">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-0" class="active nav-link">Pill 1</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-1" class="nav-link">Pill 2</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-2" class="nav-link">Pill 3</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg14-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg14-1" role="tabpanel"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a
                                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg14-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Button Group Tabs</h5>
                                <div class="mb-3 text-center">
                                    <div role="group" class="btn-group-sm nav btn-group">
                                        <a data-toggle="tab" href="#tab-eg15-0" class="btn-shadow active btn btn-primary">Tab 1</a>
                                        <a data-toggle="tab" href="#tab-eg15-1" class="btn-shadow  btn btn-primary">Tab 2</a>
                                        <a data-toggle="tab" href="#tab-eg15-2" class="btn-shadow  btn btn-primary">Tab 3</a>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg15-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker
                                        including versions of Lorem Ipsum.</p></div>
                                    <div class="tab-pane" id="tab-eg15-1" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                    <div class="tab-pane" id="tab-eg15-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                                        type specimen book. It has not only five centuries, but also the leap into not only five centuries, but also the leap into
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
                                </div>
                            </div>
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
