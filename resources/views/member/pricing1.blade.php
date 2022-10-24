<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Stream</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #003333;
      }

      .body {
        padding-top: 50px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 g-0">
          <img
            src="{{ asset('stream/assets/images/banner.png') }}"
            alt=""
            class=""
            style="width: 100%; height: 100vh"
          />
        </div>
        <div class="col-sm-9 mt-5">
          <div class="header-nav d-flex">
            <div class="ms-5">
              <img src="{{ asset('stream/assets/images/Stream.svg') }}" alt="" />
            </div>
            <div class="ms-auto me-5">
              <img src="{{ asset('stream/assets/images/photo.png')}}" alt="" width="60" />
            </div>
          </div>
          <div
            class="body align-items-center justify-content-center text-center mt-5"
          >
            <p style="color: rgb(125 211 252)" class="fw-bold">START TODAY</p>
            <h1 style="color: white" class="fw-bold">Up Your Imagination</h1>
            <div class="d-flex justify-content-center mt-5 gap-5">
              <div class="card w-25">
                <div class="card-header text-start mt-3 ms-4 gap-0">
                  <span>Standard</span>
                  <h2>Rp 300.0000</h2>
                  <span>/bulan</span>
                </div>
                <div class="card-body gap-5 mt-1">
                  <div class="d-flex m-3">
                    <span>2 Users Limit</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>720 & 1080 Full HD</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>TV & Laptop Streaming</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>180 Movies Available</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3 mb-4">
                    <span>24 Origin Countries</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <button class="btn btn-primary" style="padding: 15px 100px">
                    Subscribe Now
                  </button>
                </div>
              </div>
              <div class="card w-25">
                <div class="card-header text-start mt-3 ms-4 gap-0">
                  <span>Standard</span>
                  <h2>Rp 300.0000</h2>
                  <span>/bulan</span>
                </div>
                <div class="card-body gap-5 mt-1">
                  <div class="d-flex m-3">
                    <span>2 Users Limit</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>720 & 1080 Full HD</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>TV & Laptop Streaming</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3">
                    <span>180 Movies Available</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <div class="d-flex m-3 mb-4">
                    <span>24 Origin Countries</span>
                    <img
                      src="{{ asset('stream/assets/images/ic_check.svg')}}"
                      alt=""
                      class="ms-auto"
                    />
                  </div>
                  <button class="btn btn-primary" style="padding: 15px 100px">
                    Subscribe Now
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
