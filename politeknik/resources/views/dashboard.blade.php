@extends('layouts.header')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Selamat Datang, {{Auth::user()->name }}</h2>
            <p class="mb-md-0">Apotik Merdeka.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-10 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Home</p>
          </div>
          <div class="d-flex">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="row" id="proBanner">
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
          </div> -->
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body dashboard-tabs p-0">
        <ul class="nav nav-tabs px-4" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
          </li>
        </ul>
        <div class="tab-content py-0 px-0">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="d-flex flex-wrap justify-content-xl-between">
              <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <!-- <p>asdasffsafafds</p> -->
                <div class="row row-cols-1 row-cols-md-2">
                  <div class="col mb-4">
                    <div class="card">
                      <img style="height: 100%; width: 100%;" src="{{asset('majestic/images/apotik4.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Konsultasi Dokter</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Est placeat distinctio similique in rerum harum assumenda sunt
                          commodi odit magnam culpa voluptatum non explicabo libero ipsam
                          officiis expedita, enim id..</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-4">
                    <div class="card">
                      <img style="height: 100%; width: 100%;" src="{{asset('majestic/images/apotik5.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Dokter Bersertifikat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Est placeat distinctio similique in rerum harum assumenda sunt
                          commodi odit magnam culpa voluptatum non explicabo libero ipsam
                          officiis expedita, enim id..</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-4">
                    <div class="card">
                      <img style="height: 100%; width: 100%;" src="{{asset('majestic/images/apotik6.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Layanan Obat Lengkap</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Est placeat distinctio similique in rerum harum assumenda sunt
                          commodi odit magnam culpa voluptatum non explicabo libero ipsam
                          officiis expedita, enim id..</p>
                      </div>
                    </div>
                  </div>
                  <div class="col mb-4">
                    <div class="card">
                      <img style="height: 100%; width: 100%;" src="{{asset('majestic/images/apotik7.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pelayanan Cepat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Est placeat distinctio similique in rerum harum assumenda sunt
                          commodi odit magnam culpa voluptatum non explicabo libero ipsam
                          officiis expedita, enim id..</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
            <div class="d-flex flex-wrap justify-content-xl-between">
              <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                <!-- <p>sdfsdsdfsdfsf</p> -->
                <!-- <div class="desainku"> -->

                <!-- <img style="width: 100%; height: 100%; background-color: rgba(235, 254, 243, 1);"
                                    src="{{asset('majestic/images/apotik1.jpg')}}" alt=""> -->
                <!-- Carousel wrapper -->
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                      <img src="{{asset('majestic/images/apotik1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                      <img src="{{asset('majestic/images/apotik2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('majestic/images/apotik3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <!-- </div> -->

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
        <div class="d-sm-flex justify-content-center">
          <p class="card-title">JAM APOTEK</p>
        </div>
        <div class="table-responsive">
          <table id="recent-purchases-listing" class="table">
            <center>
              <canvas id="jamAnalog" width="400" height="400" style="background-color:light">
              </canvas>
            </center>
           
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
@endsection