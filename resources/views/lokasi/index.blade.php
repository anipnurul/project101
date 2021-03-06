@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session()->has('alert'))
           <div class="alert {{session()->get('alert-type')}}">
             {{session()->get('alert')}}
            </div>
        @endif
            <div class="card">
                <div class="card-header">{{ __('Lokasi Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> Kod </th>
                 <th> Nama</th>
                 <th> CawKod </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($lokasi as $lokasi)
                   <tr>
                   <td>{{ $lokasi->Kod}}</td>
                   <td>{{ $lokasi->NamaLokasi}}</td>
                   <td>{{ $lokasi->CawKod}}</td>
                   

                  
                 
                </tr>
                    @endforeach
                </tbody>
                </table>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
