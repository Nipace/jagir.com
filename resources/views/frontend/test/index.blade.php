@extends('frontend.layouts.app')

@section('title','Menu')

@section('content')

<header>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
          <div class="carousel-caption d-none d-md-block">
            <div class="text-center mb-5">
                <hr width="10%" class="main-color-background line " >
                
                  <h1 class="font-weight-bold text-uppercase text-light">Skill Assessments</h1>
                  <form method="GET" action="">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                          <div class="input-group custom-search-form">  
                              <input type="text" name="search" class="form-control form-control-lg bg-light" placeholder="Type to search for skill tests..">
                              <button class="btn main-color-background btn-lg ml-2"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                    </div>
                  </form>              
            </div>
          </div>
        </div>
      </div> 
</header>
  
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
        <div class=" col-md-12 menucard">
            <div class="card shadow mb-4">
                <div class="card-body">
                <div class="row pt-2">
                            <div class="col-md-6">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div> 
                      
                          @if($tests->count()==0)
                          <h5 class="font-weight-light text-center pl-5">No result found...</h1>
                          @endif
                          <div class="row">
                            <div class="col-md-9">
                              <p class="ml-5">Check your skill level. 
                                Answer maximum multiple choice questions, increase your chance for selection, and earn a skill badge.
                            </p>
                            </div>
                            <div class="col-md-3">
                              <img src="argon/img/theme/test.png" alt="" height="150px">
                            </div>
                          </div>
                          
                              <div class="row ml-4 mb-3">
                                  <div class="span6">
                                    <div class="mycontent-left ml-5">
                                        <div class="row mr-5 justify-content-center"><h4 class="text-info">1</h4></div>
                                        <div class="row mr-5"><b> <i class="fas fa-medal mr-1 main-color"></i>Badge</b></div>
                                    </div>
                                  </div>
                                  <div class="span6">
                                    <div class="mycontent-right ml-5">
                                      <div class="row mr-5 justify-content-center"><h4 class="text-info">1</h4></div>
                                      <div class="row mr-5"><b><i class="ni ni-time-alarm main-color mr-1"></i>
                                        To Retake<b></div>
                                    </div>
                                  </div>
                              </div>
                              <hr>
                          @foreach($tests as $test)
                          <div class="list-group list-group-flush"> 
                              <a class="list-group-item list-group-item-action flex-column align-items-start py-4 px-4" data-toggle="modal" data-target="#exampleModalLong">
                                  <div class="d-flex w-100 justify-content-between">
                                      <div>
                                          <div class="d-flex w-100 align-items-center">
                                              <img src="/argon/img/icons/skill.png" alt="Image placeholder" class="mr-2" height="50px"/>
                                              <h4 class="mb-1">{{$test->skill_title}}</h4>
                                          </div>
                                      </div>
                                      <small class="badge badge-info mb-5">Recommended</small>
                                  </div>
                              </a>
                          </div>
                          <hr>
                          @include('frontend.layouts.partials.testmodal')
                          @endforeach
                        </div>
                      </div>
            
        </div>
    </div>
  </section>
@endsection