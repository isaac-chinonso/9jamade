@extends('layout.master')    
@section('title')
Pricing || Naija Made
@endsection

@section('content')
<link rel="stylesheet" href="assets/css/style.css">

<body style="background: url(assets/img/background.jpg);">
    

    <div class="pricing-container">
    <div class="pricing-switcher">
      <p class="fieldset">
        <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
        <label for="monthly-1">Monthly</label>
        <input type="radio" name="duration-1" value="yearly" id="yearly-1">
        <label for="yearly-1">3 Months</label>
        <span class="switch"></span>
      </p>
    </div>
    <ul class="pricing-list bounce-invert">
      <li>
        <ul class="pricing-wrapper">
          <li data-type="monthly" class="is-visible">
            <header class="pricing-header">
              <h2> Boost Ad Basic</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">2,999</span>
                <span class="duration">mo</span>
              </div>
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
                <li><em>3X</em> more clients than standard ads</li>
                <li>Search results and categories promotion</li>
                <li> Highlight ads in searched results and categories</li>
                <li>Promotion on 9jamade homepage</li>
                <li><del>Renewal of all ads</li>
                <li><del>Email promotion</li>
                <li><del>SMS notification</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
          <li data-type="yearly" class="is-hidden">
            <header class="pricing-header">
              <h2>Boost Ad Basic</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">6,999</span>
                <span class="duration">3 Months</span>
              <div class="save">
                <span class="save">save almost ₦2,000</span>
              </div>
              </div>
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
                <li><em>3X</em> more clients than standard ads</li>
                <li>Search results and categories promotion</li>
                <li> Highlight ads in searched results and categories</li>
                <li>Promotion on 9jamade homepage</li>
                <li><del>Renewal of all ads</li>
                <li><del>Email promotion</li>
                <li><del>SMS notification</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
        </ul>
      </li>
      <li class="exclusive">
        <ul class="pricing-wrapper">
          <li data-type="monthly" class="is-visible">
            <header class="pricing-header">
              <h2>Boost Ad Exclusive</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">4,999</span>
                <span class="duration">mo</span>
              </div>
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
              <li><em>5X</em> more clients than standard ads</li>
              <li>Search results and categories promotion</li>
              <li> Highlight ads in searched results and categories</li>
              <li>Promotion on 9jamade homepage</li>
              <li> Automatic renewal of all ads every 48 hours</li>
              <li><del>Email promotion</li>
              <li><del>SMS notification</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
          <li data-type="yearly" class="is-hidden">
            <header class="pricing-header">
              <h2>Boost Ad Exclusive</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">11,999</span>
                <span class="duration">3 Months</span>
                <span class="save">save almost ₦3,000</span>
              </div>
              
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
              <li><em>5X</em> more clients than standard ads</li>
              <li>Search results and categories promotion</li>
              <li> Highlight ads in searched results and categories</li>
              <li>Promotion on 9jamade homepage</li>
              <li> Automatic renewal of all ads every 48 hours</li>
              <li><del>Email promotion</li>
              <li><del>SMS notification</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
        </ul>
      </li>
      <li>
        <ul class="pricing-wrapper">
          <li data-type="monthly" class="is-visible">
            <header class="pricing-header">
              <h2>Boost Ad Pro</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">9,999</span>
                <span class="duration">mo</span>
              </div>
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
              <li><em>10X</em> more clients than standard ads</li>
              <li>Search results and categories promotion</li>
              <li> Highlight ads in searched results and categories</li>
              <li>Promotion on 9jamade homepage</li>
              <li> Automatic renewal of all ads every 48 hours</li>
              <li>Email promotion</li>
              <li>SMS promotion</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
          <li data-type="yearly" class="is-hidden">
            <header class="pricing-header">
              <h2> Boost Ad Pro</h2>
              <div class="price">
                <span class="currency">₦</span>
                <span class="value">24,999</span>
                <span class="duration">3 Months</span>
              <div class="save">
                <span class="save">save almost ₦5,000</span>
              </div>              
              </div>
            </header>
            <div class="pricing-body">
              <ul class="pricing-features">
              <ul class="pricing-features">
              <li><em>10X</em> more clients than standard ads</li>
              <li>Search results and categories promotion</li>
              <li> Highlight ads in searched results and categories</li>
              <li>Promotion on 9jamade homepage</li>
              <li> Automatic renewal of all ads every 48 hours</li>
              <li>Email promotion</li>
              <li>SMS promotion</li>
              </ul>
            </div>
            <footer class="pricing-footer">
              <a class="select" href="#">Sign Up</a>
            </footer>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>z
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>

    <script src="assets/js/index.js"></script>


  @include('layout.footer')

  @endsection