@if(!empty(session('success')))
<div>
    {{ session('success') }}
</div>
@endif

@if(!empty(session('error')))
<div>
    {{ session('error') }}
</div>
@endif