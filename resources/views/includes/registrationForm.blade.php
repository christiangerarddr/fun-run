<div id="registration" class="mx-auto">

    <div class="text-center">

        <div id="sign-up-header">
            <h2 class="m-0">Sign Up</h2>
        </div>
        <div id="sign-up-img">
            <img src="{{ asset('images/section-divider.png') }}" alt="" class="m-0">
        </div>
        <div id="sign-up-instruction">
            <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat debitis, omnis odio
                voluptate minus quos eaque, voluptas consequuntur repudiandae vero cupiditate natus ipsa nihil
                repellendus ducimus laudantium aspernatur? Quibusdam, rem.</p>
        </div>

    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form id="register-participants-form" action="/sign-up" method="POST" class="mt-5">

        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="first_name[]" type="text" class="form-control border-0" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <input name="last_name[]" type="text" class="form-control border-0" placeholder="Last Name">
            </div>
        </div>


        <div class="form-row">
            <div class="input-group col-md-12 mb-3">
                
                <input id="gender" name="gender[]" type="text" class="form-control border-0" aria-label="gender-dropdown" placeholder="Gender">
                <img src="{{ asset('images/dropdown.png') }}" alt="" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item dropdown-gender">MALE</a>
                    <a class="dropdown-item dropdown-gender">FEMALE</a>
                </div>

            </div>

        </div>
        <div class="form-group">
            <input name="address_1[]" type="text" class="form-control border-0" id="inputAddress" placeholder="Complete Address">
        </div>
        <div class="form-group">
            <input name="address_2[]" type="text" class="form-control border-0" id="inputAddress2" placeholder="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="birthday[]" type="date" class="form-control border-0" placeholder="Birthday">
            </div>
            <div class="form-group col-md-6">
                <input name="contact_number[]" type="number" class="form-control border-0" placeholder="Contact Number">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="email_address[]" type="email" class="form-control border-0" placeholder="Email Address">
            </div>
            <div class="input-group col-md-6 mb-3">
                
                <input id="shirt_size" name="shirt_size[]" type="text" class="form-control border-0" aria-label="shirt size dropdown" placeholder="Shirt Size">
                <img src="{{ asset('images/dropdown.png') }}" alt="" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item dropdown-size">S</a>
                    <a class="dropdown-item dropdown-size">M</a>
                    <a class="dropdown-item dropdown-size">L</a>
                    <a class="dropdown-item dropdown-size">XL</a>
                </div>

            </div>

        </div>

        <div id="base"></div>

        <div class="form-group">
            <div class="d-flex justify-content-between align-items-center">
                <div id="add">
                    <img src="{{asset('images/add.png')}}" alt="" srcset="" height="40px">
                    <span>Add more participants</span>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="terms_and_condition" id="terms_and_condition">
                    <label class="form-check-label" for="terms_and_condition">
                        I have read and understand the Terms and Conditions
                    </label>
                </div>
            </div>
        </div>
        <button id="submit-btn" type="submit" class="btn btn-success float-right">SUBMIT</button>
    </form>

</div>