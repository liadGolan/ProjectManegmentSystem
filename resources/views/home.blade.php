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
    <br />
    <a href="/createIssue">Create a new Issue</a>
</h3>

<h1>
    Deliverable {{$data['id']}}
</h1>

<h2>
    @foreach($data['tasks'] as $task)
        <ul><a href="/viewDeliverable/{{$data['id']}}/task/{{$task->id}}/">{{$task->name}}</a></ul>
    @endforeach

    @if($data['show'])
        Hello
    @endif
</h2>
</body>
</html>