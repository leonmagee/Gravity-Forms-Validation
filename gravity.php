/* ==========================================================================
   GRAVITY FORMS CUSTOM VALIDATION
   ========================================================================== */

    add_filter( 'gform_validation_4', 'new_custom_val' );
    
    function new_custom_val( $val_result ) {
        
        $form = $val_result['form'];
        
        $field_value_1 = rgpost( 'input_15' );
        
        $field_value_2 = rgpost( 'input_16' );
        
        if ( $field_value_1 != $field_value_2 ) {
            
            $form['fields'][1]['failed_validation'] = true;
            
            $form['fields'][1]['validation_message'] = 'Phone Numbers Must Match';
            
            $form['fields'][2]['failed_validation'] = true;
         
            $form['fields'][2]['validation_message'] = 'Phone Numbers Must Match';
            
            $val_result['is_valid'] = false;
        }   
        
        $val_result['form'] = $form;
        
        return $val_result;
    }
        
