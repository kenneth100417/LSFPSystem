@if(session()->has('message'))
        
<div id="alert" class="alert alert-success welcome-message alert-dismissible fade show" role="alert" >
    <div class="d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <p class="">
                {{session('message')}}
            </p>
        </div>
        {{-- <div class="">
            <a type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="">&times;</span>
            </a>
        </div> --}}
    </div>
</div>    
   
@endif

