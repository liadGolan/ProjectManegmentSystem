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
            Deliverable Creation
        </h1>

        <h2>
            {{Form::open()}}
            Deliverable Name
            <br />
            {{Form::text('name')}}
            <br />
            <br />
            Deliverable Description
            <br />
            {{Form::text('description')}}
            <br />
            <br />
            Deliverable Due Date
            <br />
            {{Form::date('due_date', \Carbon\Carbon::now())}}
            <br />
            <br />
            Deliverable Status
            <br />
            {{Form::text('status')}}
            <br />
            {{Form::submit('submit')}}
            {{Form::close()}}
        </h2>
    </body>
</html>
