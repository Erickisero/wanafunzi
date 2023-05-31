    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orders" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Orders</span>
        </a>
        <div id="orders" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities:</h6>
            <a class="collapse-item" href="{{route('order.create')}}">Add an order</a>
            <a class="collapse-item" href="{{route('order.index')}}">Show order</a>
          </div>
        </div>
    </li>