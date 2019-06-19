<!-- end toggle top area -->
    <!-- start header -->
    <header>

            <div class="container ">
              <!-- hidden top area toggle link -->
              
              <!-- end toggle link -->
              <div class="row nomargin">
                <div class="span12">
                  <div class="headnav">
                    <ul>
                      <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                      <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                      @yield('logout')
                    </ul>
                  </div>
                  <!-- Signup Modal -->
                  <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                      <form action="{{url('registerpost')}}" method="post"class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="control-group">
                          <label class="control-label" for="email" >Email</label>
                          <div class="controls">
                            <input type="text" id="email" name="email"placeholder="Email" required>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="full_name">Full Name</label>
                          <div class="controls">
                            <input type="text" id="full_name" name="full_name"placeholder="Full Name" required>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Password" required>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="repassword">Confirm Password</label>
                          <div class="controls">
                            <input type="password" id="repassword" name="repassword" placeholder="Password" required>
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn">Sign up</button>
                          </div>
                          <p class="aligncenter margintop20">
                            Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                          </p>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- end signup modal -->
                  <!-- Sign in Modal -->

                  <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                    </div>
                    <div class="modal-body">

                      {{-- INI ADALAH SESSION SIGN IN--}}
                      @if(\Session::has('alert'))
                      <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                      </div>
                      @endif
                      @if(\Session::has('alert-success'))
                      <div class ="alert alert-success">
                        <div>{{Session::get('alert-succes')}}</div>
                      </div>
                      @endif

                    <form action="{{ url('/loginpost') }}" method="post" class="form-horizontal">
                      {{ csrf_field() }}
                        <div class="control-group">
                          <label class="control-label" for="email">Email</label>
                          <div class="controls">
                            <input type="email" id="email" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="Password">
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn">Sign in</button>
                          </div>
                          <p class="aligncenter margintop20">
                            Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                          </p>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- end signin modal -->
                  <!-- Reset Modal -->
                  <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal">
                        <div class="control-group">
                          <label class="control-label" for="inputResetEmail">Email</label>
                          <div class="controls">
                            <input type="text" id="inputResetEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn">Reset password</button>
                          </div>
                          <p class="aligncenter margintop20">
                            We will send instructions on how to reset your password to your inbox
                          </p>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- end reset modal -->
                </div>
              </div>
              <div class="row">
                <div class="span4">
                  <div class="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
                    <h1>Surevey is survey software for your research</h1>
                  </div>
                </div>
                <div class="span8">
                  <div class="navbar navbar-static-top">
                    <div class="navigation">
                      <nav>
                        <ul class="nav topnav">
                          <li class="dropdown active">
                            <a href="index.html">Home </a>
                           
                          </li>
                          
                          <li class="dropdown">
                            <a href="about.html">About </i></a>
                            
                          </li>
                          <li class="dropdown">
                            <a href="features.html">Features </a>
                          </li>
                          <li class="dropdown">
                            <a href="faqlogin.html">FAQ </a>
                          </li>
                          <li>
                            <a href="contact.html">Contact </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                    <!-- end navigation -->
                  </div>
                </div>
              </div>
            </div>
          </header>
          <!-- end header -->
