/* ==========================================================================
   GRAVITY FORMS CUSTOM VALIDATION
   ========================================================================== */
   
   // filter hook

    add_filter( 'gform_validation_4', 'new_custom_val' );
    
    
    // callback function
    
    function new_custom_val( $val_result ) {
        
        // get form object
        $form = $val_result['form'];
        
        // 'rgpost' gets the submitted input - 'input_15' is the input name attribute
        $field_value_1 = rgpost( 'input_15' );
        
        $field_value_2 = rgpost( 'input_16' );
        
        if ( $field_value_1 != $field_value_2 ) {
        
        
            // [1] denotes the first input field in the 'fields' array   
            $form['fields'][1]['failed_validation'] = true;
            
            $form['fields'][1]['validation_message'] = 'Phone Numbers Must Match';
            
            $form['fields'][2]['failed_validation'] = true;
         
            $form['fields'][2]['validation_message'] = 'Phone Numbers Must Match';
            
            $val_result['is_valid'] = false;
        }   
        
        // add the changes you've made to the form object in the variable you will return
        $val_result['form'] = $form;
        
        return $val_result;
    }
        
