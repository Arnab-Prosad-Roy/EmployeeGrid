<!-- Modal -->
<div class="modal fade" id="updateModal{{$empData->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data For - <span class="text-success">{{$empData->name}}</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('updateData')}}">
          @csrf
          <input type="hidden" name="pk" value="{{$empData->id}}">
          <div class="form-group">
            <label for="exampleFormControlInput1">Employee Num.</label>
            <input type="text" class="form-control" name="employee_no" value="{{old('employee_no.'.$empData->id) ?? $empData->employee_no}}" id="exampleFormControlInput1" placeholder="Employee Number">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name.'.$empData->id) ?? $empData->name}}" id="exampleFormControlInput1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Designation</label>
            <select class="form-control"name="designation_id" id="exampleFormControlSelect1">
              <option></option>
              @foreach($designations as $dLists)
                  <option value="{{$dLists->id}}" {{$dLists->id == $empData->designation_id  ? 'selected' : ''}}>{{$dLists->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Department</label>
            <input type="text" class="form-control" name="department" value="{{old('department.'.$empData->id) ?? $empData->department}}" id="exampleFormControlInput1" placeholder="Department">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Company</label>
            <input type="text" class="form-control" name="company" value="{{old('company.'.$empData->id) ?? $empData->company}}" id="exampleFormControlInput1" placeholder="Company">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Salary</label>
            <input type="text" class="form-control" name="salary" value="{{old('salary.'.$empData->id) ?? $empData->salary}}" id="exampleFormControlInput1" placeholder="Salary">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Joining Date</label>
            <input type="date" name="joining_date" value="{{old('joining_date.'.$empData->id) ?? $empData->joining_date}}" class="form-control" id="exampleFormControlInput1">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
   </form>
  </div>
</div>