
<script type="text/javascript">
  $(document).ready( function(){
     
      // Service Choice
      $('#school_or_organisation').on('change', ()=>{
          const choice = $('#school_or_organisation').val()
          if(choice.toLowerCase() === 'school')
          {
              $('#school_owners').show(1000)
              $('#organisation_owners').hide()

          }
          else if(choice.toLowerCase() === 'organisation')
          {   
              $('#organisation_owners').show(1000)
              $('#school_owners').hide()

              // Fill in default values for schoo owners fields : 

          }
      })
      // End of service choice

      // School owner
      $('#school_country').on('change', ()=>{
        const country = $('#school_country').val()
        if(country.toLowerCase() !== 'nigeria'){
          
          $('#school_state').hide()
          $('#school_other_state').show()
        }else if(country.trim() === ''){
          $('#school_state').hide()
          $('#school_other_state').hide()
        }else{
          $('#school_state').show()
          
          $('#school_other_state').hide()

        }

      })
      // End of school owner

      // Organisation owner
      $('#organisation_country').on('change', ()=>{
        const country = $('#organisation_country').val()
        if(country.toLowerCase() !== 'nigeria'){
          
          $('#organisation_state').hide()
          $('#organisation_other_state').show()
        }else if(country === ''){

          $('#organisation_state').hide()
          
          $('#organisation_other_state').hide()

        }else{
          $('#organisation_state').show()
          
          $('#organisation_other_state').hide()
        }

      })
      // End of organisation owner

      
      // Form Validation

      


      // Form submission
      $('#submit').on('click', (e)=>{
        // Get inputs
        e.preventDefault();

        // Validation before service selection
        const first_name = $('#first_name').val()
        const surname = $('#surname').val()
        const email = $('#email').val()
        const phone_number = $('#phone_number').val()
        const selection = $('#school_or_organisation').val();

 
            // First name
            if (first_name.trim() === ''){
            $('#first_name_error').html('<div class="alert alert-danger">First name is required</div>');
            $('#first_name').focus()
            return
            }
            else
            {
              $('#first_name_error').html('');
            }
      
            // Surname
            if (surname.trim() === ''){
            $('#surname_error').html('<div class="alert alert-danger">Surname is required</div>');
            $('#surname').focus()
            return
            }
            else
            {
              $('#surname_error').html('');
            }

            // Email
            if (email.trim() === ''){
            $('#email_error').html('<div class="alert alert-danger">Email is required</div>');
            $('#email').focus()
            return
            }
            else
            {
              
              $('#email_error').html('');
            }

            // Phone Number
            if (phone_number.trim() === ''){
            $('#phone_number_error').html('<div class="alert alert-danger">Phone number is required</div>');
            $('#phone_number').focus()
            return
            }
            else
            {
              $('#phone_number_error').html('');
            }

            // School or organisation
            if (selection.trim() === ''){
            $('#school_or_organisation_error').html('<div class="alert alert-danger">Selection is required</div>');
            $('#school_or_organisation').focus()
            return
            }
            else
            {
              $('#school_or_organisation_error').html('');
            }



        if($('#school_or_organisation').val().toUpperCase() === 'SCHOOL'){
            // Validation
           
            const school_name = $('#school_name').val()
            const school_country = $('#school_country').val()
            const school_state = $('#school_state').val()
            const school_address = $('#school_address').val()
            const role_in_school = $('#role_in_school').val()
            const school_population = $('#school_population').val()
            const is_stem = $('#is_stem').val()
            // const school_name = $('#school_name').val()


            // School Name
            if(school_name.trim() === ''){
              $('#school_name_error').html('<div class="alert alert-danger">School name is required</div>');
              $('#school_name').focus()
              return
            }else{
              $('#school_name_error').html('')
            }

            // School Country
            if(school_country.trim() === ''){
              $('#school_country_error').html('<div class="alert alert-danger">Country where your school is located is required</div>');
              $('#school_country').focus()
              return
            }else{
              $('#school_country_error').html('')
            }

            // School State
            if(school_state.trim() === ''){
              $('#school_state_error').html('<div class="alert alert-danger">State where your school is located is required</div>');
              $('#school_state').focus()
              return
            }else{
              $('#school_state_error').html('')
            }

            // School Name
            if(school_address.trim() === ''){
              $('#school_address_error').html('<div class="alert alert-danger">School address is required</div>');
              $('#school_address').focus()
              return
            }else{
              $('#school_address_error').html('')
            }

            // School Name
            if(role_in_school.trim() === ''){
              $('#role_in_school_error').html('<div class="alert alert-danger">School role is required</div>');
              $('#role_in_school').focus()
              return
            }else{
              $('#role_in_school_error').html('')
            }

            // School Population
            if(school_population.trim() === ''){
              $('#school_population_error').html('<div class="alert alert-danger">School population is required</div>');
              $('#school_population').focus()
              return
            }else{
              $('#school_population_error').html('')
            }

            // Is Stem
            if(is_stem.trim() === ''){
              $('#is_stem_error').html('<div class="alert alert-danger">Response is required</div>');
              $('#is_stem').focus()
              return
            }else{
              $('#is_stem_error').html('')
            }
            
            //Call server for school option
            $.ajax({
              type: 'post',
              url: 'ajax/form.php',
              data: {
                first_name: $('#first_name').val(), 
                surname: $('#surname').val(),
                email: $('#email').val(),
                phone_number: $('#phone_number').val(),
                school_or_organisation:$('#school_or_organisation').val().toUpperCase(),
                school_name: $('#school_name').val(),
                school_country: $('#school_country').val(),
                school_state: $('#school_state').val(),
                school_other_state: $('#school_other_state').val(),

                school_address: $('#school_address').val(),
                role_in_school: $('#role_in_school').val(),
                school_population: $('#school_population').val(),
                is_stem: $('#is_stem').val(),

              },
              success(data){
                $('#result').html(data);
              }
            })

          

        }else if($('#school_or_organisation').val().toUpperCase() === 'ORGANISATION'){
            // Validation


            const organisation_name = $('#organisation_name').val()
            const organisation_country = $('#organisation_country').val()
            const organisation_state = $('#organisation_state').val()
            const organisation_address = $('#organisation_address').val()

            const role_in_organisation = $('#role_in_organisation').val()
            const brief = $('#brief').val()
            
            


            // Organisation Name
            if(organisation_name.trim() === ''){
              $('#organisation_name_error').html('<div class="alert alert-danger">Organisation name is required</div>');
              $('#organisation_name').focus()
              return
            }else{
              $('#organisation_name_error').html('')
            }

            // Organisation Country
            if(organisation_country.trim() === ''){
              $('#organisation_country_error').html('<div class="alert alert-danger">Country where your organisation is located is required</div>');
              $('#organisation_country').focus()
              return
            }else{
              $('#organisation_country_error').html('')
            }

            // Organisation State
            if(organisation_state.trim() === ''){
              $('#organisation_state_error').html('<div class="alert alert-danger">State where your organisation is located is required</div>');
              $('#organisation_state').focus()
              return
            }else{
              $('#organisation_state_error').html('')
            }

            

            // Organisation Role
            if(role_in_organisation.trim() === ''){
              $('#role_in_organisation_error').html('<div class="alert alert-danger">Organisation role is required</div>');
              $('#role_in_organisation').focus()
              return
            }else{
              $('#role_in_organisation_error').html('')
            }

            // Organisation Brief
            if(brief.trim() === ''){
              $('#brief_error').html('<div class="alert alert-danger">Organisation brief is required</div>');
              $('#brief').focus()
              return
            }else{
              $('#brief_error').html('')
            }

            // Organisation Address
            if(organisation_address.trim() === ''){
              $('#organisation_address_error').html('<div class="alert alert-danger">Organisation address is required</div>');
              $('#organisation_address').focus()
              return
            }else{
              $('#organisation_address_error').html('')
            }


             //Call server for organisation option
            $.ajax({
              type: 'post',
              url: 'ajax/form.php',
              data: {
                first_name: $('#first_name').val(), 
                surname: $('#surname').val(),
                email: $('#email').val(),
                phone_number: $('#phone_number').val(),
                school_or_organisation:$('#school_or_organisation').val().toUpperCase(),
                organisation_name: $('#organisation_name').val(),
                organisation_country: $('#organisation_country').val(),
                organisation_state: $('#organisation_state').val(),
                organisation_other_state: $('#organisation_other_state').val(),

                organisation_address: $('#organisation_address').val(),
                role_in_organisation: $('#role_in_organisation').val(),
                brief: $('#brief').val(),
                
              },
              success(data){
                $('#result').html(data);
              }
            })

        }
        

        // end of form submission
      })


  })
</script>