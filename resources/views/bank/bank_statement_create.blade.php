
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Bank Statement</h3>
<div class="card-body" >
                    @if($message=Session::get('success'))
    <div class="alert alert-success alert-black">
{{$message}}
    </div>
    @endif
<div>
  <form action="{{route('create_form')}}" method="POST" >
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" placeholder="Your Email..">

    <label for="lname">Amount</label>
    <input type="text" id="lname" name="amount" placeholder="Your Amount..">

    <label for="lname">Transfer Name</label>
    <input type="text" id="lname" name="teansfer_name" placeholder="Your Teansfer Name..">

    <label for="lname">Transfer Email</label>
    <input type="text" id="lname" name="teansfer_email" placeholder="Your Teansfer Email..">


  <button type="submit" class="btn btn-dark btn-block">Submit</button>
  
  <a href="{{ url('/list') }}" class="btn btn-dark btn-green" style="font-weight:bold; margin-top:12px; ">Show</a>
  </form>
</div>

</body>
</html>


