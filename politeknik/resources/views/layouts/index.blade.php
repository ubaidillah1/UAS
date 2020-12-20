@extends('layouts.header')
@section('title','Dashboard')
@section('content')
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Home</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" id="proBanner">
            <div class="col-md-12 grid-margin">
              <div class="card bg-gradient-primary border-0">
                <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                  <p class="mb-0 text-white font-weight-medium">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!                  </p>
                  <div class="d-flex">
                    <a href="https://www.bootstrapdash.com/product/majestic-admin-pro?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-outline-light mr-2 bg-gradient-danger border-0">Check Pro Version</a>
                    <button id="bannerClose" class="btn border-0 p-0 ml-auto">
                      <i class="mdi mdi-close text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <p>asdasffsafafds</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <p>sdfsdsdfsdfsf</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <p>sdfsfassdfasdfsdfssdsdf</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Purchases</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status report</th>
                            <th>Office</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Gross amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Jeremy Ortega</td>
                            <td>Levelled up</td>
                            <td>Catalinaborough</td>
                            <td>$790</td>
                            <td>06 Jan 2018</td>
                            <td>$2274253</td>
                        </tr>
                        <tr>
                            <td>Alvin Fisher</td>
                            <td>Ui design completed</td>
                            <td>East Mayra</td>
                            <td>$23230</td>
                            <td>18 Jul 2018</td>
                            <td>$83127</td>
                        </tr>
                        <tr>
                            <td>Emily Cunningham</td>
                            <td>support</td>
                            <td>Makennaton</td>
                            <td>$939</td>
                            <td>16 Jul 2018</td>
                            <td>$29177</td>
                        </tr>
                        <tr>
                            <td>Minnie Farmer</td>
                            <td>support</td>
                            <td>Agustinaborough</td>
                            <td>$30</td>
                            <td>30 Apr 2018</td>
                            <td>$44617</td>
                        </tr>
                        <tr>
                            <td>Betty Hunt</td>
                            <td>Ui design not completed</td>
                            <td>Lake Sandrafort</td>
                            <td>$571</td>
                            <td>25 Jun 2018</td>
                            <td>$78952</td>
                        </tr>
                        <tr>
                            <td>Myrtie Lambert</td>
                            <td>Ui design completed</td>
                            <td>Cassinbury</td>
                            <td>$36</td>
                            <td>05 Nov 2018</td>
                            <td>$36422</td>
                        </tr>
                        <tr>
                            <td>Jacob Kennedy</td>
                            <td>New project</td>
                            <td>Cletaborough</td>
                            <td>$314</td>
                            <td>12 Jul 2018</td>
                            <td>$34167</td>
                        </tr>
                        <tr>
                            <td>Ernest Wade</td>
                            <td>Levelled up</td>
                            <td>West Fidelmouth</td>
                            <td>$484</td>
                            <td>08 Sep 2018</td>
                            <td>$50862</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
@endsection