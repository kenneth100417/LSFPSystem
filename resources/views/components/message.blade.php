@if(session()->has('message'))
        
<div class="mx-2" id="alert">
        <p class="welcome-message">
                {{session('message')}}
        </p>
</div>
       
   
@endif