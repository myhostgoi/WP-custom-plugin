<?php

/*

 * Example Code Developed by HostGoi.com 

 *

 */

// We have to put everything in a function called on init, so we are sure Register Helper is loaded.

function my_pmprorh_init() {

	// Don't break if Register Helper is not loaded.	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {

		return false;

	}

	// Define the fields.

	$fields = array();

	

		$fields[] = new PMProRH_Field(

		'first_name',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'First Name',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'first_name',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

			$fields[] = new PMProRH_Field(

		'last_name',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'Last Name',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'last_name',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

			$fields[] = new PMProRH_Field(

		'father_name',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'Father Name (Full Name)',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'father_name',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

        $fields[] = new PMProRh_Field(

		'gender', // meta key or name

		'select', // field type

		array(

			'label' => 'Gender',

			'required' => true,

			'profile' => true,

			'options' => array(

				'' => 'Please Choose From Below',

				'male' => 'Male',

				'female' => 'Female',

				'others' => 'Others',

				)

			)

	);

	

	$fields[] = new PMProRh_Field(

		'gender', // meta key or name

		'select', // field type

		array(

			'label' => 'Marital Status',

			'required' => true,

			'profile' => true,

			'options' => array(

				'' => 'Please Choose From Below',

				'male' => 'Single',

				'female' => 'Married',

				'others' => 'Others',

				)

			)

	);

	

        $fields[] = new PMProRh_Field(

		'blood_group', // meta key or name

		'select', // field type

		array(

			'label' => 'Blood Group',

			'required' => true,

			'profile' => true,

			'options' => array(

				'' => 'Please Choose From Below',

				'A+' => 'A+',

				'A-' => 'A-',

				'B+' => 'B+',

				'B-' => 'B-',

				'O+' => 'O+',

				'O-' => 'O-',

				'AB+' => 'AB+',

				'AB-' => 'AB-',

			)

		)

	);

	 $fields[] = new PMProRh_Field(

		'date_of_birth', // meta key or name

		'date', // field type

		array(

			'label' => 'Date Of Birth (mm/dd/yy)',

			'required' => true,

			'profile' => true,

			)

	);

			$fields[] = new PMProRH_Field(

		'religion',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'Religion',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'religion',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

				$fields[] = new PMProRH_Field(

		'address',							// input name, will also be used as meta key

		'textarea',								// type of field

		array(

			'label'		=> 'Address',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'address',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

					$fields[] = new PMProRH_Field(

		'pincode',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'Pin Code',		// custom field label

			'size'		=> 30,				// input size

			'class'		=> 'pincode',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

	

					$fields[] = new PMProRH_Field(

		'district',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'District',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'district',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

						$fields[] = new PMProRH_Field(

		'state',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'State',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'state',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

							$fields[] = new PMProRH_Field(

		'contact_number',							// input name, will also be used as meta key

		'text',								// type of field

		array(

			'label'		=> 'Phone Number (Do Not Input +91)',		// custom field label

			'size'		=> 40,				// input size

			'class'		=> 'contact_number',		// custom class

			'profile'	=> true,			// show in user profile

			'required'	=> true,			// make this field required

			'levels'		=> array(1,2)	// only levels 1 and 2 should have the company field

		)

	);

// Add the fields into a new checkout_boxes are of the checkout page.

	foreach ( $fields as $field ) {

		pmprorh_add_registration_field(

			'checkout_boxes',				// location on checkout page

			$field							// PMProRH_Field object

		);

	}

	// That's it. See the PMPro Register Helper readme for more information and examples.

}

add_action( 'init', 'my_pmprorh_init' );
