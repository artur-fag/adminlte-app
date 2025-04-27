  <!--begin::App Content Header-->
  <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
              <div class="col-sm-6">
                  @hasSection('page-title')
                  <h3 class="mb-0">@yield('page-title')</h3>
                  @endif

                  @isset($breadcrumbs)
                  <ol class="breadcrumb ">
                      @foreach($breadcrumbs as $breadcrumb)
                      <li class="breadcrumb-item">
                          <a href="#">{{$breadcrumb['label']}}</a>
                      </li>

                      @endforeach

                  </ol>
                  @endisset
              </div>
              <div class="col-sm-6 float-sm-end">
                  Actions
              </div>
          </div>
          <!--end::Row-->
      </div>
      <!--end::Container-->
  </div>
  <!--end::App Content Header-->