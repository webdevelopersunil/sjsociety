<div class="card card-default">
    <div class="card-header">
        Laravel - Razorpay Payment Gateway Integration
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body text-center">
        <form action="{{ route('razorpay.payment.store') }}" method="POST" >
            @csrf 
            <script src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{ env('RAZORPAY_KEY') }}"
                    data-amount="10000"
                    data-buttontext="Pay 100 INR"
                    data-name="GeekyAnts official"
                    data-description="Razorpay payment"
                    data-image="/images/logo-icon.png"
                    data-prefill.name="ABC"
                    data-prefill.email="abc@gmail.com"
                    data-theme.color="#ff7529">
            </script>
        </form>
    </div>
</div>