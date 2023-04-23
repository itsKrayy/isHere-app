@extends('layouts.layout')

@section('content')

<h1>Reports</h1>

  @if ($subs->is_sub == 1)
    @foreach ($events as $event)
        <div class="event-card">
            <h3 class="event-name"><a href="{{ url('/events/'.$event->id.'/pdf') }}"> {{ $event->event_name }} </a></h3>
            <p class="event-description"> {{ $event->event_date }} </p>
            <p class="event-description"> {{ $event->event_desc }} </p>
        </div>
    @endforeach
  @else
    {{-- <div class="modal fade" id="buyFeatureModal" tabindex="-1" role="dialog" aria-labelledby="buyFeatureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="buyFeatureModalLabel">You Need to Buy This Feature</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>You do not have access to this feature. Please purchase it to continue.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Buy Feature</button>
            </div>
        </div>
        </div>
    </div> --}}

    <div class="modal fade" id="buyFeatureModal" tabindex="-1" role="dialog" aria-labelledby="buyFeatureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="buyFeatureModalLabel">You need to buy this feature</h5>
              <a href="{{ url()->previous() }}"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                <span aria-hidden="true">&times;</span>
              </button></a>   
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
              <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
              <button type="button" class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- JavaScript code to show the modal -->
      <script>
        $(document).ready(function() {
          $('#buyFeatureModal').modal('show');
        });
      </script>     
      
  
  @endif
    
@endsection