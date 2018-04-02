@extends ('layouts.app')

@section ('content')

   <form method="post"  action="/user/edit/{{$user->id}}" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group">
         <label>Name</label>
           <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
         </div>
         <div class="form-group">
           <label>E-mail</label>
           <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}">
         </div>
           <div class="form-group">
             <label>Is Admin</label>
             <br>
             <label> Admin</label><input name="admin" type="radio" value="1">
             <label>Not Admin   </label><input checked="checked" name="admin" type="radio" value="0">
       </div>

           <input type="hidden" value="{{csrf_token()}}">

       <button type="submit" class="btn btn-default">Publish</button>
   </form>
@endsection
