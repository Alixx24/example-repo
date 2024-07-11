@extends('layouts.master')
@section('content')
    
@endsection

<body>
    <div class="container">
        <p id="text" class="text-danger">hiii</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script>
        $(document).ready(function (){
            $("#text").fadeOut(3000)
        })
    </script>
</body>

