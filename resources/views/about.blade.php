@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    เกี่ยวกับเรา
                </div>

                <div class="panel-body">
                    <h1>{{$name}}</h1>
                    <p>{{$email}}</p>
                </div>

            </div>
        </div>
    </div>      
</div>
@endsection

@section('footer')
<script>
    alert('hi footer');
</script>
@endsection