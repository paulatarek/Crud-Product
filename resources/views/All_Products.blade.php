@extends('layouts.parent')
@section('titel','All Products')

@section('content',)
    <table class="table table-dark table-hovered">

        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>discrabtion</th>
                <th>price</th>
                <th>quaintity</th>
                <th>statues</th>
                <th>operation</th>

            </tr>
        </thead>

        @foreach ($products as $product )
        <tbody>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->discrabtion}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quaintity}}</td>
                <td>{{$product->statues == 1 ? 'avaliple' : 'not avaliple'}}</td>
                <td  style="display: flex">
                    <a class="btn btn-primary mr-2" href="{{route('crud.edit',$product->id)}}">Edit</a>
                  <!-- Button trigger modal -->
                  <form action="{{route('crud.destroy',$product->id)}}" method="post">
                    @method('delete')
                    @csrf
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
    delete
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-dark">
         are you sure delete this product {{$product->name}} ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button   type="submit" class="btn btn-primary">Save changes</button>
          {{-- <a  class="btn btn-primary" href="{{route('crud.destroy',$product->id)}}">Save changes</a> --}}
        </div>
      </div>
    </div>
  </div>
</form>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>
@endsection

