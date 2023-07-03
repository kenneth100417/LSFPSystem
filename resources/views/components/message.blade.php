@if(session()->has('message'))
        
<div class="mx-2">
        <p class="welcome-message">
                {{session('message')}}
        </p>
</div>
       
   
@endif