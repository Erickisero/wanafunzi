<x-admin-master>
@section('content')

@if(session('delMsg'))
<div class="alert alert-danger">{{session('delMsg')}}</div>
@elseif(session('updateMsg'))
<div class="alert alert-success">{{session('updateMsg')}}</div>
@endif
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Orders</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Your Orders</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Order Name</th>
            <th>Quantity</th>
            <th>Describe Order</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>

        <!--
        <tfoot>
          <tr>
            <th>Order ID</th>
            <th>Order Name</th>
            <th>Quantity</th>
            <th>Describe Order</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </tfoot>
        -->

        @foreach($orders as $order)
        <tbody>
          <tr>

            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{Str::Limit($order->describe_order,40,'...')}}</td>
            
            <td>
            @can('update',$order)
              <button class="btn btn-primary">
                <a href="{{route('order.update',$order->id)}}" class="text-light">update</a>
              </button>
            @endcan
    
            </td>
            
            <td>                            
                <form method="post" action="{{route('order.destroy',$order->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

          </tr>
        </tbody>
        @endforeach

      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



@endsection
</x-admin-master>