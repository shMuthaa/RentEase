<form class="custom-form" id="paymentForm">
    <div class="form-group">
        <label for="full-name">Tenant</label>
        <select name="tenantid" id="tenantid">
            <option value="{{ Auth::check() ? Auth::user()->id : '' }}">{{ Auth::check() ? Auth::user()->name : '' }}</option>
          </select>
      </div>
    
      
      <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email-address" value="{{ Auth::check() ? Auth::user()->email : '' }}" required />
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" id="amount" required min="0" max="500000"/>
    </div>
    <div class="form-group">
      <label for="house-number">House-Number</label>
      <select name="house-number" id="house-number">
        @foreach ($rooms as $room)
        <option value="{{$room->id}}">{{$room->roomnumber}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-submit">
      <button type="submit" onclick="payWithPaystack(event)" class="btn btn-primary custom-button">Initiate Payment </button>
    </div>
</form>