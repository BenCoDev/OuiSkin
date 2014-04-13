
<button type="button" id="subscribe" class="btn btn-primary btn-lg center-block" data-toggle="collapse" data-target="#subscribe-form">SUBSCRIBE<span class="glyphicon"></span></button>

<form role="form" id="subscribe-form" data-toggle="collapse" data-parent="#subscribe" class="collapse in">
    <h2>Subscribe to the Newsletter<small> And get the latest news</small></h2>
    <hr class="colorgraph">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
    </div>
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-3">
            <span class="button-checkbox">
                <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
            </span>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-9">
             By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
        </div>
    </div>
    
    <hr class="colorgraph">
    <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
    </div>
</form>