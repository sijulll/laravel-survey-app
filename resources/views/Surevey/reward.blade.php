@extends('Surevey.layoutfrontend.master')

@section('content')
<section id="content">
    <div class="container">
        
      <div class="row">
        <div class="span12">
          <h4>you have <strong>1000</strong> points</h4>
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