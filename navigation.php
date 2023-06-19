

<?php 
include_once "commen.php";
function navigationMenu($activeKey){
  $navKey = [
    'home'=> $activeKey=='home' ? 'active' :'',
    'about'=> $activeKey=='about' ? 'active' :'',
    'login'=> $activeKey=='login' ? 'active' :'',
    'vehicle'=> $activeKey=='vehicle' ? 'active' :'',
    'contact'=> $activeKey=='contact' ? 'active' :'',
    'register'=> $activeKey=='register' ? 'active' :'',
    'profile' => $activeKey=='profile' ? 'active' :'',
    'subscription' => $activeKey=='subscription' ? 'active' :'',
    'booking' => $activeKey=='booking' ? 'active' :''
  ];
  $authenticateNav = authenticateNav(isUserLogin(), $navKey);
  echo
  "
    <header class='header_section'>
      <div class='container-fluid pl-5 pr-5'>
        <nav class='navbar navbar-expand-lg app-nav-bar custom_nav-container'>

          <a class='navbar-brand d-flex flex-row align-items-center' href='index.php'>
            <h2>ELITE VEHICLE</h2> 
          </a>
          
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>

              <div class='collapse navbar-collapse ml-auto' id='navbarSupportedContent'>
                <ul class='navbar-nav ml-auto'>
                  <li class='nav-item {$navKey['home']}'>
                    <a class='nav-link ' href='/'>Home</a>
                  </li>

                  <li class='nav-item {$navKey['vehicle']}'>
                    <a class='nav-link' href='/vehicle'> Vehicle </a>
                  </li>

                  <li class='nav-item {$navKey['about']}'>
                    <a class='nav-link' href='/about' > About Us</a>
                  </li>

                  <li class='nav-item {$navKey['contact']}'>
                    <a class='nav-link' href='/contact'> Contact Us </a>
                  </li>

                  $authenticateNav

                </ul>
              </div>

        </nav>
      </div>
    </header>
  ";


}

function authenticateNav($isAuth, $key){
  if($isAuth){
      $isNeedToShowSubscription = isAdminType() || isVehicleOwnerType() ? '' : 'd-none';
      return "
          <li class='nav-item {$key['booking']}'>
            <a class='nav-link' href='/booking'> Booking </a>
          </li>
          <li class='nav-item $isNeedToShowSubscription {$key['subscription']}'>
            <a class='nav-link' href='/subscription'> Subscription </a>
          </li>
          <li class='nav-item {$key['profile']}'>
            <a class='nav-link' href='/profile'> Profile </a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='/logout'> Logout </a>
          </li>
      ";
  }
  else{
      return "
        <li class='nav-item {$key['login']}'>
          <a class='nav-link' href='/login'>Login</a>
        </li>
        <li class='nav-item {$key['register']}'>
          <a class='nav-link' href='/register'> Register </a>
        </li>
      ";
  }
}

?>
