@extends('layouts.main')

@section('title', 'Registration')

@section('navbar')
    @parent
@endsection

@section('content')
    <section class="section-main bg padding-top-sm pb-3">
        <div class="container">

            {{-- breadcum --}}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3-24"> <strong>Your are here:</strong></div>
                        <nav class="col-md-18-24"> 
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>  
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection