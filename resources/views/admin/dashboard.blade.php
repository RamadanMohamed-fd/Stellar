@extends('admin.layout')
@section('main')


    <div class="row">
        <div class="col-md-6 offset-2">
            <div class="card">
                <div class="card-header bg-danger text-light-danger">Change Password</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="text" class="form-control" name="current_password" placeholder="Current Password">
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" class="form-control" name="new_password" placeholder="New Password">
                        </div>

                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="text" class="form-control" name="confirm_password" placeholder="Confirm New Password">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Change Password">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
