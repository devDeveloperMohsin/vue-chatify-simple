<template>
  <div class="user-profile-sidebar" style="display:block">

    <div class="text-center p-4 border-bottom">
      <div class="mb-4">
        <img :src="user.avatar" class="rounded-circle avatar-lg img-thumbnail" alt="">
      </div>

      <h5 class="font-size-16 mb-1 text-truncate">{{ user.name }}</h5>
      <p class="text-muted text-truncate mb-1">
        <!-- <i class="ri-record-circle-fill font-size-10 text-success mr-1"></i> Active -->
      </p>
    </div>
    <!-- End profile user -->

    <!-- Start user-profile-desc -->
    <div class="p-4 user-profile-desc" data-simplebar>
      <div class="text-muted">
        <!-- <p class="mb-4">If several languages coalesce, the grammar of the resulting language is more
          simple and regular than that of the individual.</p> -->
      </div>

      <div id="profile-user-accordion" class="custom-accordion">
        <div class="card shadow-none border mb-2">
          <a href="#collapseOne" class="text-dark" data-toggle="collapse" aria-expanded="true"
            aria-controls="collapseOne">
            <div class="card-header" id="headingOne">
              <h5 class="font-size-14 m-0">
                <i class="ri-user-2-line mr-2 align-middle d-inline-block"></i> About
                <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
              </h5>
            </div>
          </a>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-parent="#profile-user-accordion">
            <div class="card-body">

              <div>
                <p class="text-muted mb-1">Name</p>
                <h5 class="font-size-14">{{ user.name }}</h5>
              </div>

              <div class="mt-4">
                <p class="text-muted mb-1">Email</p>
                <h5 class="font-size-14">{{ user.email }}</h5>
              </div>

              <div class="mt-4">
                <p class="text-muted mb-1">Phone</p>
                <h5 class="font-size-14">{{ user.phone }}</h5>
              </div>

              <div class="mt-4">
                <p class="text-muted mb-1">Address</p>
                <h5 class="font-size-14 mb-0">{{ user.address }}</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- End About card -->

        <div class="card mb-1 shadow-none border">
          <a href="#collapseTwo" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false"
            aria-controls="collapseTwo">
            <div class="card-header" id="headingTwo">
              <h5 class="font-size-14 m-0">
                <i class="ri-attachment-line mr-2 align-middle d-inline-block"></i> Attached
                Files
                <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
              </h5>
            </div>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
            data-parent="#profile-user-accordion">
            <div class="card-body">
              <div class="card p-2 border mb-2">
                <div class="media align-items-center">
                  <div class="avatar-sm mr-3">
                    <div class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                      <i class="ri-file-text-fill"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="text-left">
                      <h5 class="font-size-14 mb-1">admin_v1.0.zip</h5>
                      <p class="text-muted font-size-13 mb-0">12.5 MB</p>
                    </div>
                  </div>

                  <div class="ml-4">
                    <ul class="list-inline mb-0 font-size-18">
                      <li class="list-inline-item">
                        <a href="#" class="text-muted px-1">
                          <i class="ri-download-2-line"></i>
                        </a>
                      </li>
                      <li class="list-inline-item dropdown">
                        <a class="dropdown-toggle text-muted px-1" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="ri-more-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <div class="card p-2 border mb-2">
                <div class="media align-items-center">
                  <div class="avatar-sm mr-3">
                    <div class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                      <i class="ri-image-fill"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="text-left">
                      <h5 class="font-size-14 mb-1">Image-1.jpg</h5>
                      <p class="text-muted font-size-13 mb-0">4.2 MB</p>
                    </div>
                  </div>

                  <div class="ml-4">
                    <ul class="list-inline mb-0 font-size-18">
                      <li class="list-inline-item">
                        <a href="#" class="text-muted px-1">
                          <i class="ri-download-2-line"></i>
                        </a>
                      </li>
                      <li class="list-inline-item dropdown">
                        <a class="dropdown-toggle text-muted px-1" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="ri-more-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <div class="card p-2 border mb-2">
                <div class="media align-items-center">
                  <div class="avatar-sm mr-3">
                    <div class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                      <i class="ri-image-fill"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="text-left">
                      <h5 class="font-size-14 mb-1">Image-2.jpg</h5>
                      <p class="text-muted font-size-13 mb-0">3.1 MB</p>
                    </div>
                  </div>

                  <div class="ml-4">
                    <ul class="list-inline mb-0 font-size-18">
                      <li class="list-inline-item">
                        <a href="#" class="text-muted px-1">
                          <i class="ri-download-2-line"></i>
                        </a>
                      </li>
                      <li class="list-inline-item dropdown">
                        <a class="dropdown-toggle text-muted px-1" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="ri-more-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end card -->

              <div class="card p-2 border mb-2">
                <div class="media align-items-center">
                  <div class="avatar-sm mr-3">
                    <div class="avatar-title bg-soft-primary text-primary rounded font-size-20">
                      <i class="ri-file-text-fill"></i>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="text-left">
                      <h5 class="font-size-14 mb-1">Landing-A.zip</h5>
                      <p class="text-muted font-size-13 mb-0">6.7 MB</p>
                    </div>
                  </div>

                  <div class="ml-4">
                    <ul class="list-inline mb-0 font-size-18">
                      <li class="list-inline-item">
                        <a href="#" class="text-muted px-1">
                          <i class="ri-download-2-line"></i>
                        </a>
                      </li>
                      <li class="list-inline-item dropdown">
                        <a class="dropdown-toggle text-muted px-1" href="#" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="ri-more-fill"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Delete</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- end card -->

            </div>

          </div>
        </div>
        <!-- End Attached Files card -->
      </div>
      <!-- end profile-user-accordion -->
    </div>
    <!-- end user-profile-desc -->
  </div>
</template>

<script>
export default {
  computed: {
    user(){
      return this.$store.getters.currentUser;
    }
  }
}
</script>