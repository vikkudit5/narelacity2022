<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='{{asset("css/custom.css")}}' rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
</head>
<body>
    @include('flash-message')
    <form method="post" action="{{asset('/')}}">
        @csrf
        <input type="text"  name="num1" id="num1" placeholder="num1">
        <label>+</label>
        <input type="text" name="num2" id="num2" placeholder="num2">
        <label for="">=</label>
        <input type="text" name="result" id="result">
        <button type="submit">Add</button>
    </form>
</body>
<script>
    $(document).ready(function(){

        $('#num1').change(function(){
            const num1 = $('#num1').val();
            const num2 = $('#num2').val();

            const result = parseInt(num1) + parseInt(num2);
            $('#result').val(result)
        });

        $('#num2').change(function(){
            const num1 = $('#num1').val();
            const num2 = $('#num2').val();

            const result = parseInt(num1) + parseInt(num2);
            $('#result').val(result)
        });


        
           
    });
</script>

</html>