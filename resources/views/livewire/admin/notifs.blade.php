<section class="mt-5 mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3">
                        <h5 class="text-white text-capitalize ps-3">Notifications</h5>
                    </div>
                </div>
                <div class="card-body px-4 pb-2">
                    <div class="table-responsive p-0">
                       
                        @forelse ($notifs as $notif)
                        <div class="d-flex justify-content-between p-container rounded-3 p-2 my-2 mx-2">
                            <div class="d-flex flex-row align-items-center">
                                <div  class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <h6 class="">{{$notif->notification}} </h6>
                                        <p class="small mb-0">{{$notif->created_at}} 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="d-flex justify-content-center mb-0">
                            You don't have notifications.
                        </div>
                        @endforelse
                        
                      
                        <div class="d-flex justify-content-center">
                            {{ $notifs->links() }}
                        </div>
                        
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
</section>
