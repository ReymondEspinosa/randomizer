@extends('layout')

@section('content')
<form class="form-format" id="pick_form">
    @csrf
     <div class="container mt-5 mb-5">
        <div class="row shadow col-lg-10 p-0 mx-auto my-auto">
            <div class="col-lg-7 p-0 login-form-left animated zoomIn">
                <div class="rounded-left p-5 image-holder-left">
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <h2>Hello, Friend</h2>
                        </div>
                        <div class="col-4 offset-4">
                            <hr class="hr-style-right">
                        </div>
                        <div class="col-12 text-center mt-3">
                            <label class="label">
                                What :  LU Crew Inuman
                            </label>
                        </div>
                        <div class="col-12 text-center">
                            <label class="label">
                                Where :  TBA
                            </label>
                        </div>
                        <div class="col-12 text-center mb-2">
                            <label class="label">
                                When :  Friday, December 27, 2019
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 offset-2 mt-2">
                            <div class="form-group row">        
                                <label class="has-float-label col-12 p-0">
                                    <span class="span-credential-passwor">Name</span>
                                </label>                        
                                <label class="has-float-label col-12 p-0">
                                    <input class="form-control rounded-0" type="text" id="memberName" name="memberName"/>
                                </label>                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 offset-2 text-center mt-3">
                            <button type="submit" form="pick_form" class="btn btn-primary btn-block login-form pr-sm-5 pl-sm-5"><b> Bunot ka Gurl! </b></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 image-holder-right login-form-right animated zoomIn">
            </div>
        </div>
    </div>
</form>
@endsection

@push('script')
    <script src="{{asset('js/member.js')}}"></script>
@endpush