@extends('layouts.app')

@section('content')
<div class="container"style="color:red">
    <div class="row justify-content-center">
        <div class="col-md-8" style="color:red">
            <div class="card">
                <div class="card-header">Dashboard Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="dropdown">


                    <!-- Split dropright button -->
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-secondary">
                        Information
                      </button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>
                      </button>
                      <div style="background-color: red" class="dropdown-menu">
                        <a style="color: black" href="{{ url('/news') }}">News</a>

                      </div>
                    </div>
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-secondary">
                        Sécurité Informatique
                      </button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>

                      </button>
                      <div class="dropdown-menu">
                        <a href="{{url('/security')}}">Sécurité Informatique</a>
                      </div>
                    </div>
                    <div class="btn-group dropright">
                      <button type="button" class="btn btn-secondary">
                        Sécurité Informatique
                      </button>
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>
                      </button>
                      <div class="dropdown-menu">
                      </div>
                    </div>

</div>


                    </button>
                </div>
            </div>
        </div>
        <div class="container"style="color:red">
            <div class="row justify-content-center">
                <div class="col-md-8" style="color:red">
                    <div class="card">
                        <div class="card-header">Dashboard Setting</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="dropdown">


                            <!-- Split dropright button -->
                            <div class="btn-group dropright">
                              <button type="button" class="btn btn-secondary">
                                Information
                              </button>
                              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropright</span>
                              </button>
                              <div class="dropdown-menu">
                             <a href="{{ url('/pdf') }}">ss</a>
                              </div>
                            </div>
                            <div class="btn-group dropright">
                              <button type="button" class="btn btn-secondary">
                                Profile
                              </button>
                              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropright</span>
                              </button>
                              <div class="dropdown-menu">
                                <!-- Dropdown menu links -->
                              </div>
                            </div>
                            <div class="btn-group dropright">
                              <button type="button" class="btn btn-secondary">
                                Ajout de contact
                              </button>
                              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropright</span>
                              </button>
                              <div class="dropdown-menu">
                                <!-- Dropdown menu links -->
                              </div>
                            </div>

        </div>


                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
