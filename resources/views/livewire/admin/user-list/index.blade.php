<section class="mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg mt-5">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="text-white text-capitalize ps-3">User List</h6>
                      </div>
                      <div class="d-flex  align-items-center">
                        <div class="d-flex  align-items-center" >

                            <h5 class="text-white text-capitalize pe-3"><i class="fa-solid fa-arrow-up-wide-short"></i></h5>

                            <h5 class="text-white text-capitalize pe-4"><i class="fa-solid fa-arrow-down-short-wide"></i></h5>

                        </div>

                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0" >
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">User ID</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Name</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Email</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-15">Mobile Number</th>
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Address</th>
                            <th class="text-dark w-15">
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                
                            
                            <tr>
                                <td class="mw-15 text-center">
                                    <p class="text-xs text-dark mb-0">LSFP_{{$user->id}}</p>
                                </td>
                                <td class="mw-20 text-center">
                                    <p class="text-xs text-dark mb-0">{{$user->firstname}} {{$user->lastname}}</p>
                                </td>
                                <td class="mw-15 text-center">
                                    <p class="text-xs text-dark mb-0">{{$user->email}}</p>
                                </td>
                                <td class="mw-15 text-center">
                                    <p class="text-xs text-dark mb-0">{{$user->mobile_number}}</p>
                                </td>
                                <td class="w-20 text-xs  text-center">{{$user->address}}</td>
                               
                                <td class="mw-15 text-center">
                                    <button class="btn btn-danger btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer ">
                                        Block User</button>
                                    
                                </td>
                            </tr>

                            @empty
                                
                            @endforelse
                           
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>