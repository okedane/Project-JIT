<x-layout>
    <x-slot:title>Dashboard</x-slot:title>
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div>Dashboard</div>
        </div>
        <!--end breadcrumb-->

        <!-- Stats Cards -->
        <div class="row row-cols-1 row-cols-xl-3 g-3 mb-4">
            <div class="col">
                <div class="card rounded-4 h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h6 class="mb-2">Total Supplier</h6>
                            <h2 class="mb-0 display-4">13</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded-4 h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h6 class="mb-2">Total Transaksi Masuk</h6>
                            <h2 class="mb-0 display-4">30</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded-4 h-100">
                    <div class="card-body">
                        <div class="text-center">
                            <h6 class="mb-2">Total Transaksi Keluar</h6>
                            <h2 class="mb-0 display-4">40</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-12 col-md-6">
                <div class="card rounded-4">
                    <div class="card-header py-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Transaksi Masuk</h5>
                            <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <span class="material-icons-outlined fs-5">more_vert</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card rounded-4">
                    <div class="card-header py-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Transaksi Keluar</h5>
                            <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <span class="material-icons-outlined fs-5">more_vert</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart2"></div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
