@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}}
@endsection
 

@section('content')
    <div id="about-page">


        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                <h1>About Page</h1>
                <p>3 wolf moon lyft chambray la croix. Asymmetrical salvia iceland quinoa. Godard shaman blue bottle vaporware vinyl small batch gochujang. Health goth ramps VHS, kale chips irony blue bottle godard man braid cardigan readymade. Shabby chic post-ironic snackwave, cred brooklyn disrupt everyday carry letterpress biodiesel tousled actually man bun etsy meh.</p>
                <p>3 wolf moon lyft chambray la croix. Asymmetrical salvia iceland quinoa. Godard shaman blue bottle vaporware vinyl small batch gochujang. Health goth ramps VHS, kale chips irony blue bottle godard man braid cardigan readymade. Shabby chic post-ironic snackwave, cred brooklyn disrupt everyday carry letterpress biodiesel tousled actually man bun etsy meh.</p>
                </div>
                <div class="col-md-6">
                    <img src="/img/about-page.jpg">
                </div>
            </div>       
        </div>
    </div>
@endsection