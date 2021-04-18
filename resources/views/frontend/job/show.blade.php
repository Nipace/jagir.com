@extends('frontend.layouts.app')

@section('content')
    @include('backend.users.partials.header', [
        'title' =>$job->company->company_name,
        'description' => __('We are a group of self Motivated IT professional laocated at ' .$job->company->location),
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
                                {{$job->company->company_name}}<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{$job->company->location}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{$job->company->company_type }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Website: {{$job->company->website}}
                            </div>
                            <hr class="my-4" />
                            <p>{!!Str::limit($job->company->descritption, 1270) !!}</p>
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
                                <h3 class="mb-0">{{$job->title}} <span style="font-size:13px;">| Apply Before: {{$job->application_deadline}}</span></h3>
                            </div>
                            <div class="col-md-3 text-right">
                                @guest
                                        <button class="btn main-color-background text-white" data-toggle="modal" data-target="#exampleModal"><i class="ni ni-check-bold"></i> Apply </button>
                                @endguest
                                @auth
                                    <a href="{{route('apply.user',['id'=>$job->id])}}">
                                        <button class="btn main-color-background text-white"><i class="ni ni-check-bold"></i> Apply </button>
                                    </a> 
                                @endauth
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

                    <div class="card-body">
                        <h5 class="font-weight-bold">Basic Job Information</h5>
                            <div class="table-responsive">
                                <table class="table align-items-center">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Job Category
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->job_category}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Job Level
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->level}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Employment Type
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->employment_type}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                No. of Vacancy
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->no_of_vacancy}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Apply Before
                                            </td>
                                            <td>
                                                <span class="mr-4">
                                                {{$job->application_deadline}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Offered Salary
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->offered_salary}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Education Level
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->qualificaton}}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Experience Required
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                    {{$job->qualificaton}}
                                                    </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Skills Required
                                            </td>
                                            <td>
                                                <span class="mr-5">
                                                {{$job->job_skills}}
                                                </span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <h5 class="font-weight-bold mt-4"> Job Description</h5>
                            <hr class="my-4" />

                            <div class="row ml-2">
                                {!!$job->description!!}
                            </div>
                            <h5 class="font-weight-bold mt-4"> Applying Procedure</h5>
                            <hr class="my-4" />
                            {{$job->applying_procedure}}
                            <hr class="my-4" />
                            <div class="text-center">
                                @guest
                                <button class="btn main-color-background text-white" data-toggle="modal" data-target="#exampleModal"><i class="ni ni-check-bold"></i> Apply </button>
                        @endguest
                        @auth
                            <a href="{{route('apply.user',['id'=>$job->id])}}">
                                <button class="btn main-color-background text-white"><i class="ni ni-check-bold"></i> Apply </button>
                            </a> 
                        @endauth
                            </div> 
                            @include('frontend.layouts.partials.checklogin')
                        </div>
                </div>
            </div>
        </div>
        
       
    </div>
@endsection