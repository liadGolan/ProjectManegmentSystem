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
        Issue Creation
    </h1>

    <h2>
        {{Form::open()}}
        Issue Name
        <br />
        {{Form::text('name')}}
        <br />
        <br />
        Issue Description
        <br />
        {{Form::text('description')}}
        <br />
        <br />
        Task Affected
        <br />
        {{Form::select('task', $task_array)}}
        <br />
        <br />
        Action Item Affected
        <br />
        {{Form::select('action_item', $action_item_array)}}
        <br />
        <br />
        Priority
        <br />
        {{Form::text('priority')}}
        <br />
        <br />
        Severity
        <br />
        {{Form::text('severity')}}
        <br />
        <br />
        Date Raised
        <br />
        {{Form::date('date_raised', \Carbon\Carbon::now())}}
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