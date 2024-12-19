@extends('forntend.layouts.app')
@section('content')
<div>
<!-- main area starts -->
<main>
            <!-- Account Type -->
            <section class="account-type-section mb-150 mt-150">
                <div class="container">
                    <h2 class="tm-common-heading account-type-heading">Account
                        Type</h2>
                        
                    <div class="tm-row">
                        <div class="tm-col">
                            <div class="tm-input-group account-type-div">
                                <label class="acoount-type-name">Client Account: <span>Select this
                                        option if you're a client seeking to be
                                        matched with a
                                        psychologist.</span></label>
                                <div class="account-type-options">
                                    <label
                                        class="tm-option-label checkbox style-c tm-style-c-checkbox"
                                        id="terms">
                                        <input type="radio"
                                            name="accountType"
                                            value="customer" checked />
                                        <div
                                            class="checkbox__checkmark rounded-circle"></div>
                                            Client account
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tm-col">
                            <div class="tm-input-group account-type-div">
                                <label class="acoount-type-name">Psychologist Account: <span> Select this option if you're a psychologist looking to connect with clients.</span></label>
                                <div class="account-type-options">
                                    <label
                                        class="tm-option-label checkbox style-c tm-style-c-checkbox"
                                        id="terms">
                                        <input type="radio"
                                            name="accountType"
                                            value="business" />
                                        <div
                                            class="checkbox__checkmark rounded-circle"></div>
                                            Psychologist Account
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mamun-link">Already Have An Account? <a href="{{route('sign-in')}}">Sign In</a></p>
                </div>
            </section>
        </main>
        <!-- main area ends -->
</div>
@endsection