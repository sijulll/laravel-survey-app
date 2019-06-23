@extends('Surevey.layoutfrontend.master')

@section('content')
<section id="content">
    <div class="container">
        
      <div class="row">
        <div class="span12">
          @foreach ($userdetail as $userdetails)
              
          
          <h4>Hai {{Session::get('full_name')}}</h4>  
        <h4>you have <strong>{{$userdetails->user_point}}</strong> points</h4>
        @endforeach
        </div>
        {{-- //@php $no = 1; @endphp --}}
        @forelse($data as $datas) 
        <div class="span4">
          <div class="pricing-box-alt">
            <div class="pricing-heading">
                
              <h3>{{$datas->reward_point}} <strong>points</strong></h3>
            </div>
            <div class="pricing-terms">
            <h6>{{$datas->reward_name}}</h6>
            </div>
            
            <div class="pricing-action">
              <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>Exchange</a>
            </div>
          </div>
        </div>
        @empty
        <p>No Reward</p> 
        @endforelse
      </div>
@endsection