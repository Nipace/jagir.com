@extends('frontend.layouts.app')

@section('content')
    @include('backend.users.partials.header', [
        'title' =>$company->company_name,
        'description' => __('We are a group of self Motivated IT professional laocated at ' .$company->location),
        'class' => 'col-lg-12'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body mt-3 pt-md-8">
                        
                        <div class="text-center">
                            <h3>
                                {{$company->company_name}}
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $company->location}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{$company->company_type}}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Website: {{$company->website}}
                            </div>
                            <hr class="my-4" />
                            <p>{!!Str::limit($company->descritption, 1270) !!}</p>
                            <a href="#">{{ __('Show more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card  shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <h1 class="mb-0">Personal Details </span></h3>
                            </div>
                            <div class="col-md-3 text-right">
                                
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

                    <div class="card-body">
                        <form method="POST" action="{{route('apply.store',['id'=>request()->route('id')])}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Enter your Information') }}</h6>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-title">Name Of Personnal</label>
                                        <input type="text" name="name" id="input-title" class="form-control form-control-alternative"  value="{{auth()->user()->name}}" required autofocus disabled>
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-title">Email Of Personnal</label>
                                        <input type="text" name="email" id="input-title" class="form-control form-control-alternative"  value="{{auth()->user()->email}}" required autofocus disabled>
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-experience">Experience</label>
                                        <input type="number" name="experience" id="input-experience" min="0" class="form-control form-control-alternative" placeholder="Experience" required>
                                        
                                        @if ($errors->has('experience'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('experience') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-qualificaton">Position </label>
                                        <input type="text" name="postion" id="input-qualificaton" class="form-control form-control-alternative" placeholder="Postion" required>
                                            @if ($errors->has('experience'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('experience') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pl-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-title">Upload CV</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="cv">
                                            <label class="custom-file-label" for="customFileLang">Upload your CV</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>

                        
                            <hr class="my-4" />
                           
                        </div>
                </div>
            </div>
        </div>
        
       
    </div>
@endsection