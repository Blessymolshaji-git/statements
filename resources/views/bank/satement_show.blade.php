
@section('content')

<main class="login-form">
    <div class="cotainer">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered " style="width:1250px; background-color:#ffffff; border:1px solid black;opacity:0.8;">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            <th>Trasfer Name</th>
            <th>Trasfer Email</th>
            
            
        </tr>
    
        @foreach ($bankstatement as $bankstatements)
        <tr>
            <td style="font-weight:bold">{{ ++$i }}</td>
            <td style="font-weight:bold">{{ $bankstatements->name }}</td>
            <td style="font-weight:bold">{{ $bankstatements->email }}</td>
            <td style="font-weight:bold">{{ $bankstatements->amount }}</td>
            <td style="font-weight:bold">{{ $bankstatements->teansfer_name }}</td>
            <td style="font-weight:bold">{{ $bankstatements->teansfer_email }}</td>
    
        </tr>

        
        @endforeach
    </table>

  
    <a href="{{ url('/') }}" class="btn btn-dark btn-green" style="font-weight:bold; margin-top:12px; ">BACK</a>

   
               
    </div>
    <script>
        function confirmUpdate() {
            return confirm("Are you sure you want to update?");
        }
    </script>
</main>

@endsection