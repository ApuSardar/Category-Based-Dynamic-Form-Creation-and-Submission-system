@if (Session::has('success'))
    <div class="alert alert-success" role="alert" id="alert">
        <p>{{ Session::get('success') }}</p>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-success" role="alert" id="alert">
        <p>{{ Session::get('error') }}</p>
    </div> 
@endif

