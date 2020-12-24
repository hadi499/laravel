@extends('layouts/master')
@section('title', 'home')
    
@section('content')

    

<div class="main">
    <div class="main-content">
      <div class="container-fluid"> 
            
            <div class="row">
                <div class="col-xs-6 col-md-3">
                      <a href="" class="thumbnail">
                        <img src="{{asset('images/naruto/kakashi.png')}}" alt="...">
                      </a>
                </div>
                <div class="col-xs-6 col-md-3">
                      <a href="" class="thumbnail">
                        <img src="{{asset('images/naruto/naruto.png')}}" alt="...">
                      </a>
                </div>
                <div class="col-xs-6 col-md-3">
                      <a href="" class="thumbnail">
                        <img src="{{asset('images/naruto/sakura.png')}}" alt="...">
                      </a>
                </div>
                <div class="col-xs-6 col-md-3">
                      <a href="" class="thumbnail">
                        <img src="{{asset('images/naruto/sasuke.png')}}" alt="...">
                      </a>
                </div>
                    
              
            </div>
        </div>
    </div>
</div>




@endsection 