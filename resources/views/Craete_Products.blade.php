@extends('layouts.parent');
@section('titel','Create Products')

@section('content')
<div>
    <form method="POST" action="{{route('crud.store')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1"> Name </label>
            <input type="text" value="{{old('name')}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
            @error('name')
            <div class="alert alert-danger"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">discrabtion</label>
            <input type="text" value="{{old('discrabtion')}}" name="discrabtion" class="form-control" id="exampleInputPassword1" placeholder="discrabtion">
            @error('discrabtion')
            <div class="alert alert-danger"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="number"  value="{{old('price')}}" name="price" class="form-control" id="exampleInputPassword1" placeholder="price">
            @error('price')
            <div class="alert alert-danger"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">quaintity</label>
            <input type="number"  value="{{old('quaintity')}}" name="quaintity" class="form-control" id="exampleInputPassword1" placeholder="quaintity">
            @error('quaintity')
            <div class="alert alert-danger"> {{$message}} </div>
            @enderror
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>

            <select name="statues" id="inputState" class="form-control">
              <option value="1" selected>avalible</option>
              <option value="2">not avalible</option>

            </select>
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>

@endsection
