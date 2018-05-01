<!doctype html>
<html>
    <body>
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
