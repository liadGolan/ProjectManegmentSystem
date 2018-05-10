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

<h3>
    @foreach($data['tasks'] as $task)
        <ul><a href="/viewDeliverable/{{$data['id']}}/task/{{$task->id}}/">{{$task->name}}</a></ul>
    @endforeach
</h3>


    @if($data['show'])
        <h2>
            Task {{$data['taskId']}} Info
        </h2>

        <h4>
            Resource Assigned: {{$data['resourceName']}}, {{$data['resourceTitle']}}
            <br />
            <br />
            <br />
            Issues, if any:
            @foreach($data['issues'] as $issue)
                <ul>
                    {{$issue->name}}
                    <br />
                    {{$issue->description}}
                </ul>
            @endforeach
        </h4>
    @endif

</body>
</html>