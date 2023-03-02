@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sponsors') }}   <i class="fas fa-spinner fa-spin"></i>
                </div>




                <div class="card-body">
                    <div id="app">
                        <index-sponsors/>
                    </div>



                </div>

            </div>
        </div>
    </div>
</div>


@endsection
