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
    Action Item Creation
</h1>

<h2>
    {{Form::open()}}
    Action Item Name
    <br />
    {{Form::text('name')}}
    <br />
    <br />
    Action Item Description
    <br />
    {{Form::text('description')}}
    <br />
    <br />
    Resource Assigned To
    <br />
    {{Form::select('resource', $resource_array)}}
    <br />
    <br />
    Date Created
    <br />
    {{Form::date('date_created', \Carbon\Carbon::now())}}
    <br />
    <br />
    Date Assigned
    <br />
    {{Form::date('date_assigned',\Carbon\Carbon::now())}}
    <br />
    <br />
    Estimated Completion Date
    <br />
    {{Form::date('estimated_completion_date',\Carbon\Carbon::now())}}
    <br />
    <br />
    Status
    <br />
    {{Form::text('status')}}
    <br />
    <br />
    Status Description
    <br />
    {{Form::text('status_description')}}
    <br />
    {{Form::submit('submit')}}
    {{Form::close()}}
</h2>
</body>
</html>