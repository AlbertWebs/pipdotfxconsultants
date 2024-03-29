@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Homepage Videos </a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/home"><i class="fa fa-home" aria-hidden="true"></i> Dashboard </a>
                    </li>
                </ul>
            </div>
            <div class="sb2-2-1">
                <h2> Homepage Videos</h2>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif
   
                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
               
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                 
                            <th>Section</th>
                            <th>video</th>
                            <th>Edit</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vids as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                        
                            <td>{{$item->section}}</td>
                            <td>
                                <video width="220" height="140" controls>
                                    <source src="{{url('/')}}/uploads/banners/{{$item->video}}" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                               
                            </td>
                            <td><a href="{{url('/')}}/admin/editHomeVideo/{{$item->id}}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                     
                        </tr>
                      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>


@endsection