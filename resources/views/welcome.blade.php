<!doctype html>
<html>
    <body>
        <h1>
            Deliverables
        </h1>

        <h2>
                @foreach($deliverables as $deliverable)
                    <ul>{{$deliverable->name}}</ul>
                @endforeach
            
        </h2>
    </body>
</html>
