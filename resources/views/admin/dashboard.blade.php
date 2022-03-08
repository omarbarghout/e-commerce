@extends("layouts.admin")
@section('content')
<div class="container">
    <h1 class="text-center">{{__('Dashboard')}}</h1>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <h1>users</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi perferendis a nesciunt sunt iusto, nulla, rem blanditiis facilis distinctio qui eligendi, reprehenderit veritatis iure alias eum est cum suscipit maxime.

        </p>
              <a href="{{route('users.index')}}" class="btn btn-primary">Customize</a>
        </div>
        <div class="col">
          <h1>roles</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro neque sit a. Nemo nisi numquam aut ea possimus. Fugiat porro necessitatibus rerum laboriosam quaerat sint provident tempore ipsa dignissimos nihil?

          </p>
              <a href="{{route('roles.index')}}" class="btn btn-primary">Customize</a>
            </div>
        <div class="col">
          <h1>categories</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, a excepturi temporibus rem quisquam eius illum quasi quos placeat harum, perferendis iste ipsum reiciendis totam molestias facilis optio deleniti nisi.

          </p>
              <a href="{{route('categories.index')}}" class="btn btn-primary">Customize</a>
        </div>
        <div class="col">
          <h1>products</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque magni aperiam odit provident repellat quam asperiores! Officiis atque soluta voluptatibus nesciunt, dicta, quos, amet laboriosam quam quis in facilis. Maxime!

          </p>
              <a href="{{route('products.index')}}" class="btn btn-primary">Customize</a>
        </div>
      </div>
</div>
    
@endsection