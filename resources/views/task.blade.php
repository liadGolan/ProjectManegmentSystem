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
    Task Creation
</h1>

<h2>
    {{Form::open()}}
    Task Name
    <br />
    {{Form::text('name')}}
    <br />
    <br />
    Task Description
    <br />
    {{Form::text('description')}}
    <br />
    <br />
    Deliverable Assigned To
    <br />
    {{Form::select('deliverable', $deliverables_array)}}
    <br />
    <br />
    Resource Assigned To
    <br />
    {{Form::select('resource', $resource_array)}}
    <br />
    <br />
    Expected Start Date
    <br />
    {{Form::date('expected_start_date', \Carbon\Carbon::now())}}
    <br />
    <br />
    Expected End Date
    <br />
    {{Form::date('expected_end_date',\Carbon\Carbon::now())}}
    <br />
    <br />
    {{Form::submit('submit')}}
    {{Form::close()}}
</h2>
</body>
</html>
