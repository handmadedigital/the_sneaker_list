<form action="" method="POST" id="payment-form">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <span class="payment-errors"></span>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc"/>
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YYYY)</span>
      <input type="text" size="2" data-stripe="exp-month"/>
    </label>
    <span> / </span>
    <input type="text" size="4" data-stripe="exp-year"/>
  </div>

  <button type="submit">Submit Payment</button>
</form>






<!-- THIS GOES IN THE FOOTER BUT THEIR ALL DIFF SO IDK HOW UR GONNA DO IT SO I JUST ADDED IT HERE -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('pk_test_jzExfJnzvdDBNxKrU1aAvWEf');
  // ...
</script>
<script>
jQuery(function($) {
  $('#payment-form').submit(function(event) {
    var $form = $(this);

    // Disable the submit button to prevent repeated clicks
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken($form, stripeResponseHandler);

    // Prevent the form from submitting with the default action
    return false;
  });
});

function stripeResponseHandler(status, response) {
  var $form = $('#payment-form');

  if (response.error) {
    // Show the errors on the form
    $form.find('.payment-errors').text(response.error.message);
    $form.find('button').prop('disabled', false);
  } else {
    // response contains id and card, which contains additional card details
    var token = response.id;
    // Insert the token into the form so it gets submitted to the server
    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
    // and submit
    $form.get(0).submit();
  }
};
</script>