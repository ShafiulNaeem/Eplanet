@extends("layouts.app_main")

@section('content')


 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Checkout</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section " style="margin-top: 20px">
       <div class="container">
            <div class="row">

            </div>
           @if( Session::has('cart') )
            <form action="{{ route('checkout.final') }}" method="post">
               @csrf
               <div class="checkout_form">
                   <div class="row">

                       <div class="col-lg-6 col-md-6">

                               <h3>Billing Details</h3>

                               <div class="row">

                                   <div class="col-lg-6 mb-20">
                                       <label>First Name <span>*</span></label>
                                       <input type="text" name="fname"  value="{{ \Illuminate\Support\Facades\Auth::guard('web')->user()->fname }}"   />
                                   </div>
                                   <div class="col-lg-6 mb-20">
                                       <label>Last Name  <span>*</span></label>
                                       <input type="text" name="lname" value="{{ \Illuminate\Support\Facades\Auth::guard('web')->user()->lname }}"  />
                                   </div>
                                   <div class="col-12 mb-20">
                                       <label for="country">country <span>*</span></label>
                                       <select class="select_option" name="country" id="country">
                                           <option value="Afganistan">Afghanistan</option>
                                           <option value="Albania">Albania</option>
                                           <option value="Algeria">Algeria</option>
                                           <option value="American Samoa">American Samoa</option>
                                           <option value="Andorra">Andorra</option>
                                           <option value="Angola">Angola</option>
                                           <option value="Anguilla">Anguilla</option>
                                           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                           <option value="Argentina">Argentina</option>
                                           <option value="Armenia">Armenia</option>
                                           <option value="Aruba">Aruba</option>
                                           <option value="Australia">Australia</option>
                                           <option value="Austria">Austria</option>
                                           <option value="Azerbaijan">Azerbaijan</option>
                                           <option value="Bahamas">Bahamas</option>
                                           <option value="Bahrain">Bahrain</option>
                                           <option value="Bangladesh" selected>Bangladesh</option>
                                           <option value="Barbados">Barbados</option>
                                           <option value="Belarus">Belarus</option>
                                           <option value="Belgium">Belgium</option>
                                           <option value="Belize">Belize</option>
                                           <option value="Benin">Benin</option>
                                           <option value="Bermuda">Bermuda</option>
                                           <option value="Bhutan">Bhutan</option>
                                           <option value="Bolivia">Bolivia</option>
                                           <option value="Bonaire">Bonaire</option>
                                           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                           <option value="Botswana">Botswana</option>
                                           <option value="Brazil">Brazil</option>
                                           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                           <option value="Brunei">Brunei</option>
                                           <option value="Bulgaria">Bulgaria</option>
                                           <option value="Burkina Faso">Burkina Faso</option>
                                           <option value="Burundi">Burundi</option>
                                           <option value="Cambodia">Cambodia</option>
                                           <option value="Cameroon">Cameroon</option>
                                           <option value="Canada">Canada</option>
                                           <option value="Canary Islands">Canary Islands</option>
                                           <option value="Cape Verde">Cape Verde</option>
                                           <option value="Cayman Islands">Cayman Islands</option>
                                           <option value="Central African Republic">Central African Republic</option>
                                           <option value="Chad">Chad</option>
                                           <option value="Channel Islands">Channel Islands</option>
                                           <option value="Chile">Chile</option>
                                           <option value="China">China</option>
                                           <option value="Christmas Island">Christmas Island</option>
                                           <option value="Cocos Island">Cocos Island</option>
                                           <option value="Colombia">Colombia</option>
                                           <option value="Comoros">Comoros</option>
                                           <option value="Congo">Congo</option>
                                           <option value="Cook Islands">Cook Islands</option>
                                           <option value="Costa Rica">Costa Rica</option>
                                           <option value="Cote DIvoire">Cote DIvoire</option>
                                           <option value="Croatia">Croatia</option>
                                           <option value="Cuba">Cuba</option>
                                           <option value="Curaco">Curacao</option>
                                           <option value="Cyprus">Cyprus</option>
                                           <option value="Czech Republic">Czech Republic</option>
                                           <option value="Denmark">Denmark</option>
                                           <option value="Djibouti">Djibouti</option>
                                           <option value="Dominica">Dominica</option>
                                           <option value="Dominican Republic">Dominican Republic</option>
                                           <option value="East Timor">East Timor</option>
                                           <option value="Ecuador">Ecuador</option>
                                           <option value="Egypt">Egypt</option>
                                           <option value="El Salvador">El Salvador</option>
                                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                                           <option value="Eritrea">Eritrea</option>
                                           <option value="Estonia">Estonia</option>
                                           <option value="Ethiopia">Ethiopia</option>
                                           <option value="Falkland Islands">Falkland Islands</option>
                                           <option value="Faroe Islands">Faroe Islands</option>
                                           <option value="Fiji">Fiji</option>
                                           <option value="Finland">Finland</option>
                                           <option value="France">France</option>
                                           <option value="French Guiana">French Guiana</option>
                                           <option value="French Polynesia">French Polynesia</option>
                                           <option value="French Southern Ter">French Southern Ter</option>
                                           <option value="Gabon">Gabon</option>
                                           <option value="Gambia">Gambia</option>
                                           <option value="Georgia">Georgia</option>
                                           <option value="Germany">Germany</option>
                                           <option value="Ghana">Ghana</option>
                                           <option value="Gibraltar">Gibraltar</option>
                                           <option value="Great Britain">Great Britain</option>
                                           <option value="Greece">Greece</option>
                                           <option value="Greenland">Greenland</option>
                                           <option value="Grenada">Grenada</option>
                                           <option value="Guadeloupe">Guadeloupe</option>
                                           <option value="Guam">Guam</option>
                                           <option value="Guatemala">Guatemala</option>
                                           <option value="Guinea">Guinea</option>
                                           <option value="Guyana">Guyana</option>
                                           <option value="Haiti">Haiti</option>
                                           <option value="Hawaii">Hawaii</option>
                                           <option value="Honduras">Honduras</option>
                                           <option value="Hong Kong">Hong Kong</option>
                                           <option value="Hungary">Hungary</option>
                                           <option value="Iceland">Iceland</option>
                                           <option value="Indonesia">Indonesia</option>
                                           <option value="India">India</option>
                                           <option value="Iran">Iran</option>
                                           <option value="Iraq">Iraq</option>
                                           <option value="Ireland">Ireland</option>
                                           <option value="Isle of Man">Isle of Man</option>
                                           <option value="Israel">Israel</option>
                                           <option value="Italy">Italy</option>
                                           <option value="Jamaica">Jamaica</option>
                                           <option value="Japan">Japan</option>
                                           <option value="Jordan">Jordan</option>
                                           <option value="Kazakhstan">Kazakhstan</option>
                                           <option value="Kenya">Kenya</option>
                                           <option value="Kiribati">Kiribati</option>
                                           <option value="Korea North">Korea North</option>
                                           <option value="Korea Sout">Korea South</option>
                                           <option value="Kuwait">Kuwait</option>
                                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                                           <option value="Laos">Laos</option>
                                           <option value="Latvia">Latvia</option>
                                           <option value="Lebanon">Lebanon</option>
                                           <option value="Lesotho">Lesotho</option>
                                           <option value="Liberia">Liberia</option>
                                           <option value="Libya">Libya</option>
                                           <option value="Liechtenstein">Liechtenstein</option>
                                           <option value="Lithuania">Lithuania</option>
                                           <option value="Luxembourg">Luxembourg</option>
                                           <option value="Macau">Macau</option>
                                           <option value="Macedonia">Macedonia</option>
                                           <option value="Madagascar">Madagascar</option>
                                           <option value="Malaysia">Malaysia</option>
                                           <option value="Malawi">Malawi</option>
                                           <option value="Maldives">Maldives</option>
                                           <option value="Mali">Mali</option>
                                           <option value="Malta">Malta</option>
                                           <option value="Marshall Islands">Marshall Islands</option>
                                           <option value="Martinique">Martinique</option>
                                           <option value="Mauritania">Mauritania</option>
                                           <option value="Mauritius">Mauritius</option>
                                           <option value="Mayotte">Mayotte</option>
                                           <option value="Mexico">Mexico</option>
                                           <option value="Midway Islands">Midway Islands</option>
                                           <option value="Moldova">Moldova</option>
                                           <option value="Monaco">Monaco</option>
                                           <option value="Mongolia">Mongolia</option>
                                           <option value="Montserrat">Montserrat</option>
                                           <option value="Morocco">Morocco</option>
                                           <option value="Mozambique">Mozambique</option>
                                           <option value="Myanmar">Myanmar</option>
                                           <option value="Nambia">Nambia</option>
                                           <option value="Nauru">Nauru</option>
                                           <option value="Nepal">Nepal</option>
                                           <option value="Netherland Antilles">Netherland Antilles</option>
                                           <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                           <option value="Nevis">Nevis</option>
                                           <option value="New Caledonia">New Caledonia</option>
                                           <option value="New Zealand">New Zealand</option>
                                           <option value="Nicaragua">Nicaragua</option>
                                           <option value="Niger">Niger</option>
                                           <option value="Nigeria">Nigeria</option>
                                           <option value="Niue">Niue</option>
                                           <option value="Norfolk Island">Norfolk Island</option>
                                           <option value="Norway">Norway</option>
                                           <option value="Oman">Oman</option>
                                           <option value="Pakistan">Pakistan</option>
                                           <option value="Palau Island">Palau Island</option>
                                           <option value="Palestine">Palestine</option>
                                           <option value="Panama">Panama</option>
                                           <option value="Papua New Guinea">Papua New Guinea</option>
                                           <option value="Paraguay">Paraguay</option>
                                           <option value="Peru">Peru</option>
                                           <option value="Phillipines">Philippines</option>
                                           <option value="Pitcairn Island">Pitcairn Island</option>
                                           <option value="Poland">Poland</option>
                                           <option value="Portugal">Portugal</option>
                                           <option value="Puerto Rico">Puerto Rico</option>
                                           <option value="Qatar">Qatar</option>
                                           <option value="Republic of Montenegro">Republic of Montenegro</option>
                                           <option value="Republic of Serbia">Republic of Serbia</option>
                                           <option value="Reunion">Reunion</option>
                                           <option value="Romania">Romania</option>
                                           <option value="Russia">Russia</option>
                                           <option value="Rwanda">Rwanda</option>
                                           <option value="St Barthelemy">St Barthelemy</option>
                                           <option value="St Eustatius">St Eustatius</option>
                                           <option value="St Helena">St Helena</option>
                                           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                           <option value="St Lucia">St Lucia</option>
                                           <option value="St Maarten">St Maarten</option>
                                           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                           <option value="Saipan">Saipan</option>
                                           <option value="Samoa">Samoa</option>
                                           <option value="Samoa American">Samoa American</option>
                                           <option value="San Marino">San Marino</option>
                                           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                           <option value="Saudi Arabia">Saudi Arabia</option>
                                           <option value="Senegal">Senegal</option>
                                           <option value="Seychelles">Seychelles</option>
                                           <option value="Sierra Leone">Sierra Leone</option>
                                           <option value="Singapore">Singapore</option>
                                           <option value="Slovakia">Slovakia</option>
                                           <option value="Slovenia">Slovenia</option>
                                           <option value="Solomon Islands">Solomon Islands</option>
                                           <option value="Somalia">Somalia</option>
                                           <option value="South Africa">South Africa</option>
                                           <option value="Spain">Spain</option>
                                           <option value="Sri Lanka">Sri Lanka</option>
                                           <option value="Sudan">Sudan</option>
                                           <option value="Suriname">Suriname</option>
                                           <option value="Swaziland">Swaziland</option>
                                           <option value="Sweden">Sweden</option>
                                           <option value="Switzerland">Switzerland</option>
                                           <option value="Syria">Syria</option>
                                           <option value="Tahiti">Tahiti</option>
                                           <option value="Taiwan">Taiwan</option>
                                           <option value="Tajikistan">Tajikistan</option>
                                           <option value="Tanzania">Tanzania</option>
                                           <option value="Thailand">Thailand</option>
                                           <option value="Togo">Togo</option>
                                           <option value="Tokelau">Tokelau</option>
                                           <option value="Tonga">Tonga</option>
                                           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                           <option value="Tunisia">Tunisia</option>
                                           <option value="Turkey">Turkey</option>
                                           <option value="Turkmenistan">Turkmenistan</option>
                                           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                           <option value="Tuvalu">Tuvalu</option>
                                           <option value="Uganda">Uganda</option>
                                           <option value="United Kingdom">United Kingdom</option>
                                           <option value="Ukraine">Ukraine</option>
                                           <option value="United Arab Erimates">United Arab Emirates</option>
                                           <option value="United States of America">United States of America</option>
                                           <option value="Uraguay">Uruguay</option>
                                           <option value="Uzbekistan">Uzbekistan</option>
                                           <option value="Vanuatu">Vanuatu</option>
                                           <option value="Vatican City State">Vatican City State</option>
                                           <option value="Venezuela">Venezuela</option>
                                           <option value="Vietnam">Vietnam</option>
                                           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                           <option value="Wake Island">Wake Island</option>
                                           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                           <option value="Yemen">Yemen</option>
                                           <option value="Zaire">Zaire</option>
                                           <option value="Zambia">Zambia</option>
                                           <option value="Zimbabwe">Zimbabwe</option>

                                       </select>
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label> Address  </label>
                                       <textarea name="address" class="form-control" cols="15">{{ \Illuminate\Support\Facades\Auth::guard('web')->user()->address }}</textarea>
                                   </div>
                                   <div class="col-12 mb-20">
                                       <label>Town / City <span>*</span></label>
                                       <input name="city" type="text"  value="{{ \Illuminate\Support\Facades\Auth::guard('web')->user()->city }}" />
                                   </div>
                                   <div class="col-12 mb-20">
                                       <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                           <div class="card-body1">
                                               <label> Account password   <span>*</span></label>
                                               <input placeholder="password" type="password">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-12 mb-20">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">SHIP TO ANOTHER?</label> <input type="checkbox" name="others" id="checkitem">
                                            <div class="col-md-12">
                                               <div class="hidesection" id="hidesection">

                                                <div class="form-group">
                                                    <label for="" class="info-title control-label">Name</label>
                                                    <input type="text" name="s_name"  class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="info-title control-label">Address</label>
                                                    <textarea name="s_address" id="" cols="10" class="form-control" ></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="info-title control-label">Phone</label>
                                                    <input type="text" name="s_phone"   class="form-control ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="info-title control-label">Email</label>
                                                    <input type="email" name="s_email"   class="form-control ">
                                                </div>

                                               </div>
                                            </div>

                                       </div>
                                    </div>
                                    </div>
                                   <div class="col-12">
                                       <div class="order-notes">
                                           <label for="order_note">Order Notes</label>
                                           <textarea id="order_note" name="note" placeholder="Notes about your order, e.g. special notes for delivery.">

                                           </textarea>
                                       </div>
                                   </div>
                               </div>
                       </div>

                       <div class="col-lg-6 col-md-6">
                           {{--                        <form action="#">--}}
                           <h3>Your order</h3>
                           <div class="order_table ">
                               <table>
                                   <thead>
                                   <tr>
                                       <th>Product</th>
                                       <th>Total</th>
                                   </tr>
                                   </thead>
                                   @php
                                       $total = 0 ;
                                       $subTotal = 0 ;
                                       $tax = 0;
                                   @endphp
                                   <tbody>
                                   @foreach(Session::get('cart') as $cart)
                                       @php
                                           $total += ( $cart['quantity'] * round($cart['product_price']) );
                                           $subTotal += ( ($total * $cart['product_tax']) / 100 ) + $total;
                                           $tax += $cart['product_tax'];
                                       @endphp
                                       <tr>
                                           <td> {{$cart['product_name']}} <strong> × {{$cart['quantity']}}</strong></td>
                                           <td> BDT {{round($cart['quantity'] * round($cart['product_price']))}}</td>
                                       </tr>
                                   @endforeach
                                   </tbody>
                                   <tfoot>
                                   <tr>
                                       <th>Cart Subtotal</th>
                                       <td>BDT {{round($total)}}</td>
                                   </tr>
                                   <tr>
                                       <th>Tax Total</th>
                                       <td><strong> {{round($tax)}} %</strong></td>
                                   </tr>

                                   <tr>
                                       <th>Total (with tax)</th>
                                       <td><strong>BDT {{round(( ($total * $tax) / 100 ) + $total)}}</strong></td>
                                   </tr>
                                   <tr class="order_total">
                                       @php
                                        $coupon = 0;
                                       @endphp

                                       @if(isset($coupons))
                                           <th>Coupon</th>

                                           <td><strong>BDT {{round($coupons->amount)}}</strong></td>

                                       @endif
                                   </tr>
                                   <tr class="order_total">
                                       <th>Order Total</th>
                                       @if(isset($coupons))
                                            <td><strong>BDT {{round((( ($total * $tax) / 100 ) + $total) - $coupons->amount)}}</strong></td>
                                       @else
                                            <td><strong>BDT {{round( ( ($total * $tax) / 100 ) + $total )}}</strong></td>
                                       @endif
                                   </tr>
                                   </tfoot>
                               </table>
                           </div>
                           <div class="payment_method">
                               <div class="panel-default">


                                   <div id="method" class="collapse one" data-parent="#accordion">
                                       <div class="card-body1">
                                           <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="panel-default">
                                   <input id="payment_defult"  type="radio" data-target="createp_account" />
                                   <label for="payment_defult" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult">Cash on delivery <img src="assets/img/icon/papyel.png" alt=""></label>

                                 <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                      <div class="card-body1">
                                          <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                      </div>
                                  </div>
                               </div>
                               <div class="order_button">
                                   <button  type="submit">Proceed </button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </form>
           @endif
        </div>
    </div>
    <!--Checkout page section end-->


@endsection
