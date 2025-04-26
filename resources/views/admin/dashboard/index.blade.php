@extends('admin.master')
@section('body')

        <!-- / Menu -->

        <!-- Layout container -->

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
              {{$sumResult}}


            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-6">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h3 class="card-title mb-0 flex-wrap text-nowrap text-center">Total  Blog Post  🎉</h3>
                        <hr>
                      <h1 class="mb-2">{{$totalBlog}}</h1>

                    </div>

                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h3 class="card-title mb-0 flex-wrap text-nowrap text-center">Total  User   🎉</h3>
                        <hr>
                      <h1 class="mb-2">{{$totalUser}}</h1>

                    </div>

                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h3 class="card-title mb-0 flex-wrap text-nowrap text-center">Active Logged User 🎉</h3>
                        <hr>
                      <h1 class="mb-2">
                         {{Auth::user()->name}}
                      </h1>

                    </div>

                  </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->

                <!--/ Transactions -->



                <!-- Total Earnings -->

                <!--/ Total Earnings -->

                <!-- Four Cards -->

                <!--/ Total Earning -->

                <!-- Sales by Countries -->

                <!--/ Sales by Countries -->

                <!-- Deposit / Withdraw -->

                <!-- Deposit / Withdraw -->

                <!-- Data Tables -->
                <div class="col-12">
                  <div class="card overflow-hidden">
                    <div class="table-responsive">
                        <h3 class="text-center" style="padding:20px;">User List</h3>
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th class="text-truncate">User</th>
                            <th class="text-truncate">Email</th>
                            <th class="text-truncate">Role</th>
                            <th class="text-truncate">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-4">
                                  <img src="{{asset('/')}}admin/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate">{{$user->name}}</h6>

                                </div>
                              </div>
                            </td>
                            <td class="text-truncate">{{$user->email}}</td>
                            <td class="text-truncate">
                              <div class="d-flex align-items-center">
                                <i class="ri-vip-crown-line ri-22px text-primary me-2"></i>
                                <span>Admin</span>
                              </div>
                            </td>
                            <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/ Data Tables -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                    <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                  </div>
                  <div class="d-none d-lg-inline-block">

                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
@endsection

