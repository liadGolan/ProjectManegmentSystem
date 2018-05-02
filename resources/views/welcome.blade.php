<!doctype html>
<html>
    <body>

        <h3>
            <a href="/">Go Home</a>
            <br />
            <a href="/createDeliverable">Create a new Deliverable</a>
            <br />
            <a href="/createTask">Create a new Task</a>
            <br />
            <a href="/createResource">Create a new Resource</a>
            <br />
            <a href="/createActionItem">Create a new Action Item</a>
        </h3>

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
