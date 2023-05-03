@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.dashboard')
{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
{{-- <div class="container">   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>     --}}

<main class="col bg-faded py-3 flex-grow-1">
    <br>
	<div class="card">
        <div class="card-body">
          <div class="signup-form" >
            <form action="" method="post" class="form-horizontal">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-8 offset-4">
                  <h2>Personal</h2>
                </div>
              </div>
              {{-- success --}}
              @if(\Session::has('insert'))
                <div id="insert" class=" alert alert-success">
                  {!! \Session::get('insert') !!}
                </div>
              @endif
              {{-- error --}}
              @if(\Session::has('error'))
                <div id="error" class=" alert alert-danger">
                  {!! \Session::get('error') !!}
                </div>
              @endif
              <div class="form-group row">
                <label class="col-form-label col-4">Full Name</label>
                <div class="col-8">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Enter UserName">
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>          
              </div>
              <div class="form-group row">
                <label class="col-form-label col-4">Email Address</label>
                <div class="col-8">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror  
                </div>  
              </div>
              <div class="form-group row">
                <label class="col-form-label col-4">Phone Number</label>
                <div class="col-8">
                  <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone number">
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror  
                </div>          
              </div>
              <div class="form-group row">
                <div class="col-8 offset-4">
                  <button type="submit" class="btn btn-primary btn-lg">Save</button>
                </div>  
              </div>		      
            </form>
          </div>
        </div>
    </div>


    {{-- hide message js --}}
    <script>
        $('#insert').show();
        setTimeout(function()
        {
            $('#insert').hide();
        },5000);

		$('#error').show();
        setTimeout(function()
        {
            $('#error').hide();
        },5000);
        
    </script>        
</main>



@endsection