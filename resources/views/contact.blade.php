<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width></device-width>, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RexoIT Contact Form</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  

</head>
<body>

    <div class="container" style="background:pink;padding:50px;margin:50px;" >
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
       </div>

  @endif
  <form method="POST" action="/contact">
    @csrf
    <div class="form-group {{ $errors->has('name') ? 'has-errors' : '' }}">
      <label for="email">Email Address</label>
      <input name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" type="email">
      <span class="text-danger"> {{ $errors->first('email') }}</span>
      </div>

      <div class="form-group {{ $errors->has('name') ? 'has-errors' : '' }}">
        <label for="name">Name</label>
        <input name="email" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name only" type="text">
        <span class="text-danger"> {{ $errors->first('name') }}</span>
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-errors' : '' }}">
          <label for="exampleInputPassword1">Comments</label>
          <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <span class="text-danger"> {{ $errors->first('comment') }}</span>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</div>

</body>
</html>
