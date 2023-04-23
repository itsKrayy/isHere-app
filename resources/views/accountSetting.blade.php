@extends('layouts.layout')

@section('content')
    <h1>Account Setting</h1>

    


    <div class="crud-container">
        <div class="row">
    
          <div class="col-md-9">
            <div class="main-content">

                @if ($subs->is_sub == 0)
                <div class="" id="buyFeatureModal" tabindex="-1" role="dialog" aria-labelledby="buyFeatureModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="buyFeatureModalLabel">Unlock All The Features!</h5>
                        </div>
                        <div class="modal-body">
                          <p>Please purchase this feature to access the report generation functionality.</p>
                          <form>
                            <div class="form-group">
                              <label for="billingMethod">Billing Method</label>
                              <select class="form-control" id="billingMethod">
                                <option>Paypal</option>
                                <option>Credit Card</option>
                                <option>Bank Transfer</option>
                              </select>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary">Buy Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif

                <h2>Delete Events</h2>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Event ID</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            <th>Event Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $log)
                        <tr>
                            <td>{{ $log->id }}</td>
                            <td>{{ $log->event_name }}</td>
                            <td>{{ $log->event_date }}</td>
                            <td>{{ $log->event_desc }}</td>
                            <td>
                                <form action="{{ url('/events/'.$log->id) }}" method="post">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                  <button type="submit" class="btn btn-sm btn-danger"><a type="submit" class="delete">Delete</a></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
           </div>

        </div>
    </div>
@endsection