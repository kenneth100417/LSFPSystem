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

                            <div class="search mb-2 mx-3">
                                <input wire:model="search" class="form-control search-input bg-white" type="search" placeholder="Search" aria-label="Search"  style="display: block !important">
                            </div>
                            
                            <div class="d-flex  align-items-center" >
    
                                <h5 class="text-white text-capitalize pe-3" wire:click.prevent = "sortDesc()"><i class="fa-solid fa-arrow-up-wide-short" style="cursor:pointer"></i></h5>
    
                                <h5 class="text-white text-capitalize pe-4" wire:click.prevent = "sortAsc()"><i class="fa-solid fa-arrow-down-short-wide" style="cursor:pointer"></i></h5>
    
                            </div>
    
                            <div class="btn-group pe-3">
                                <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Sort By {{$sortByText}}
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" wire:click.prevent = "sortById()" style="cursor:pointer">ID</a>
                                  <a class="dropdown-item" wire:click.prevent = "sortByName()" style="cursor:pointer">Name</a>
                                </div>
                            </div>
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
                            <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-7 mw-20">Status</th>
                            <th class="text-dark w-15"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                
                            
                            <tr>
                                <td class="mw-15 text-center">
                                    <p class="text-sm text-dark mb-0">LSFP_UID{{$user->id}}</p>
                                </td>
                                <td class="mw-20 text-center" >
                                    <p class="text-sm text-dark mb-0">{{$user->firstname}} {{$user->lastname}}</p>
                                </td>
                                <td class="mw-15 text-center">
                                    <p class="text-sm text-dark mb-0">{{$user->email}}</p>
                                </td>
                                <td class="mw-15 text-center">
                                    <p class="text-sm text-dark mb-0">{{$user->mobile_number}}</p>
                                </td>
                                <td class="w-30 text-center text-sm" style="min-width: 200px; max-width: 200px; white-space:normal; min-height:80px; max-height: 80px; overflow:scroll; align-items: center;">
                                    <p class="text-sm text-dark mb-0">{{$user->address}}</p>
                                </td>

                                <td class="w-10 text-center text-sm "><span class="{{$user->status == 1 ? 'text-success':'text-danger'}}">{{$user->status == 1 ? 'Active':'Blocked'}}</span></td>
                               
                                <td class="mw-15 text-center">
                                    <button class="btn btn-danger btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer;{{$user->status == 1 ? '':'display:none'}}" wire:click.prevent="block({{$user->id}})">Block User</button>
                                    <button class="btn btn-success btn-sm mt-3 me-1 text-white tbl-row-icon" style="cursor: pointer;{{$user->status == 0 ? '':'display:none'}}" wire:click.prevent="unblock({{$user->id}})">Unblock</button>
                                </td>
                            </tr>

                            @empty
                                <div class="text-center mt-5">No Users Found.</div>
                            @endforelse
                           
                        </tbody>
                      </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$users->links()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>