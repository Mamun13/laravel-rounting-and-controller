@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
                 <ol class="breadcrumb mb-4">
                     <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Edit</li>
                </ol>
                 <form action="{{route('admin.abouts.update', $about->id)}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                     <div class="row">
                        <div class="form-group col-md-3 mt-3">
                            <h2>Image</h2>
                            <img style="height: 30vh" src="{{url($about->image)}}" class="img-thumbnail">
                            <input type="file" class="mt-3" name="image">
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <div>
                                <label for="title1"><h4>Title1</h4></label>
                                <input type="text" class="form-control" id="title1" name="title1" value="{{$about->title1}}">
                            </div>
                            <div class="mt-3"> 
                                <label for="title2"><h4>Title2</h4></label>
                                <input type="text" class="form-control" id="title2" name="title2" value="{{$about->title2}}">
                            </div>
                        </div>
                            <div class="form-group col-md-6 mt-3">
                                <h2>Description</h2>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{$about->description}}</textarea>
                            </div>
                    </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3">
                </form>
        </div>
    </main>
@endsection
            
