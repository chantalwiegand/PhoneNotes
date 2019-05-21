<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="{{ route('note.store') }}" method="post" >
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select name="employee_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach(\App\Employee::orderBy('name')->get() as $employee)
                            <option value="{{$employee->id}}">{{$employee->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="caller_name">Caller Name</label>
                    <input type="text" class="form-control" name="caller_name" id="caller_name" placeholder="Enter caller name">
                </div>

                <div class="form-group">
                    <label for="caller_company">Caller company</label>
                    <input type="text" class="form-control" name="caller_company" id="caller_company" placeholder="Enter caller company">
                </div>

                <div class="form-group">
                    <label for="caller_telephone_number">Caller phone number</label>
                    <input type="text" class="form-control" name="caller_telephone_number" id="caller_telephone_number" placeholder="Enter caller phone number">
                </div>

                <div class="form-group form-check">
                    @foreach(\App\Status::orderBy('name')->get() as $status)
                        <input type="checkbox" class="form-check-input" id="status" name="status[]" value="{{ $status->id }}">
                        <label class="form-check-label" for="status">{{$status->name}}</label>
                        <br>
                    @endforeach

                </div>

                <div class="form-group">
                    <label for="message_message">Message</label>
                    <textarea class="form-control" name="message_message" id="message_message" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>