<div class="row print-hide">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 print-hide">
      <div class="card print-hide">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                @php
                use App\Models\Article;
                $articles = Article::count();
                @endphp
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Nombre Des Articles</p>
                <h5 class="font-weight-bolder">
                  {{$articles}}
                </h5>
                <p class="mb-0">
                    <br>
                  {{-- <span class="text-success text-sm font-weight-bolder"></span> --}}
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 print-hide">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                @php
                use App\Models\Fournisseur;
                $fournisseurs = Fournisseur::count();
                @endphp
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Nombre Des Fournisseurs</p>
                <h5 class="font-weight-bolder">
                    {{$fournisseurs}}
                </h5>
                <p class="mb-0">
                    <br>
                  {{-- <span class="text-success text-sm font-weight-bolder"></span> --}}
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 print-hide">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                @php
                use App\Models\Client;
                $clients = Client::count();
                @endphp
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Nombre Des Clients</p>
                <h5 class="font-weight-bolder">
                  {{$clients}}
                </h5>
                <p class="mb-0">
                    <br>
                  {{-- <span class="text-danger text-sm font-weight-bolder"></span> --}}
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 print-hide">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                <h5 class="font-weight-bolder">
                  $103,430
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
