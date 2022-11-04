
      @include('shared.header')
      <a href="/create"><button type="button" class="btn btn-info mb-5">Create</button></a>

      <table class="table table-striped w-50 mx-auto">
        
        <thead>
          
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody >
          {{{ $no = 1; }}}
          @foreach ($products as $product)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->category }}</td>
              <td class="d.flex">

                <a href="/{{ $product->id }}/edit">
                  <button type="button" class="btn btn-warning w-50 my-1">Edit</button>
                </a>
                <form action="/{{ $product->id }}" method="POST" >
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger w-50 mb-1">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
      
    @include('shared.footer')