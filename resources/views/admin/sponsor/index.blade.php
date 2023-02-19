@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Sponsors') }}   <i class="fas fa-spinner fa-spin"></i>
                </div>



                <div class="d-flex justify-content-end  pb-1 pt-1 ">

                    <div class='m-2'>
                        <div id="app">
                            <create-sponsors/>
                        </div>

                    </div>

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
