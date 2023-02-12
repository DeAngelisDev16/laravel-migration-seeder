<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">
        <h1 class="text-center p-5">Laravel Trains</h1>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-6">
                <div class="card p-3">
                    <h3 class="mb-2">{{$train->company}}</h3>
                    <pre>From:{{$train->from}}</pre>
                    <pre>To:{{$train->to}}</pre>
                    <pre>Departure at:{{$train->departure_hour}}</pre>
                    <pre>Arrive at:{{$train->arrive_hour}}</pre>
                    <pre>Train reference:{{$train->train_reference}}</pre>
                    <pre>In time: {{$train->In_time}}</pre>
                    



                </div>
            </div>
                
            @endforeach
        </div>
    </div>


    
    
    
</body>
</html>