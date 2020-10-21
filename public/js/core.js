$(document).ready(function() {

    var html = `

    <div>
        <div class="text-right mb-2">
            <a class="ml-2 btn btn-danger remove">REMOVE</a>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="first_name[]" type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <input name="last_name[]" type="text" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group col-md-12 mb-3">
                
                <input id="gender" name="gender[]" type="text" class="form-control border-0" aria-label="gender-dropdown" placeholder="Gender">
                <img src="../images/dropdown.png" alt="" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item dropdown-gender">MALE</a>
                    <a class="dropdown-item dropdown-gender">FEMALE</a>
                </div>

            </div>

        </div>
        <div class="form-group">
            <input name="address_1[]" type="text" class="form-control" id="inputAddress" placeholder="Complete Address">
        </div>
        <div class="form-group">
            <input name="address_2[]" type="text" class="form-control" id="inputAddress2" placeholder="">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="birthday[]" type="date" class="form-control" placeholder="Birthday">
            </div>
            <div class="form-group col-md-6">
                <input name="contact_number[]" type="number" class="form-control" placeholder="Contact Number">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input name="email_address[]" type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="input-group col-md-6 mb-3">
                
                <input id="shirt_size" name="shirt_size[]" type="text" class="form-control" aria-label="shirt size dropdown" placeholder="Shirt Size">
                <img src="../images/dropdown.png" alt="" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item dropdown-size">S</a>
                    <a class="dropdown-item dropdown-size">M</a>
                    <a class="dropdown-item dropdown-size">L</a>
                    <a class="dropdown-item dropdown-size">XL</a>
                </div>

            </div>

        </div>
        
    </div>
    `;

    let count = 0;

    $('#add').click(function(e) {

        if (count > 20) {
            alert('limit reached');
            exit();
        };

        $('#base').append(html);
        count++;
    });

    $('#base').on('click', '.remove', function(e) {
        $(this).parent('div').parent('div').remove();
        count--;
    });

    $('#submit-btn').click(function(e) {
        e.preventDefault();
        $('#register-participants-form').submit();
    }); //PRONE

    $('#register-participants-form').on('click', '.dropdown-size', function(e) {
        e.preventDefault();
        $size_input = $(this).parent('div').siblings('input').val(this.text)
    });

    $('#register-participants-form').on('click', '.dropdown-gender', function(e) {
        e.preventDefault();
        $gender_input = $(this).parent('div').siblings('input').val(this.text)
    });

    $(".filter-table").on('click', function(e) {
        e.preventDefault();
        switchFilter(this.text);
    });

    filter = (sessionStorage.getItem("tableFilter")) ? sessionStorage.getItem("tableFilter") : sessionStorage.setItem("tableFilter", "All");

    $('#table_header').text(filter);

    function switchFilter(filter) {

        sessionStorage.setItem("tableFilter", filter);

        location.reload();
    }

});