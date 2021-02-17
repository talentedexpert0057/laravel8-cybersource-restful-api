<?php

return [
	'logOut' => 'Log Out',
	'createdAt' => 'Created At',
	'action' => 'Action',
	'userManagement' => 'User Management',
	'login' => [
		'title' => 'Login',
		'formDescription' => 'Login to Your Account',
		'email' => 'Email',
		'password' => 'Password',
		'rememberMe' => 'Remember me',
		'signIn' => 'SIGN IN',
		'forgotPassword' => 'Forgot password?',
		'signUp' => 'Sign Up',
		'notHaveAccountYet' => "Don't have an account yet?",
		'joinOurCommunity' => 'JOIN OUR COMMUNITY',
		'description' => 'Magazine Heaven Direct is the specialist partner for enterprising, independent magazine publishers. Whether you are an existing magazine or yet to launch, we will help you achieve your circulation goals and provide a range of specialist, tailored services that will really benefit your business. We pride ourselves on the quality and range of our services and deliver unique, creative solutions for publishers who need to get their product to market or expand and develop an existing market or distribution channel, either in the UK or Internationally. Magazine Heaven Direct is affiliated with Magazine Heaven, The UK’s largest Magazine Retail store, stocking more 3600 publications, with an impressive e-commerce store and offering worldwide single copy sales direct to consumer and subscriptions. Magazine Heaven also curates and sells back issues for many publishers and offers mailing services and bulk deliveries.'
	],
	'register' => [
		'title' => 'Register',
		'formDescription' => 'Create an Account',
		'yourName' => 'Your name',
		'yourEmail' => 'Your email',
		'confirmPassword' => 'Confirm password',
		'agreeTerms' => 'By clicking "Sign Up", you agree to our',
		'termsAndPolicy' => 'terms of service and privacy policy',
		'willSendEmail' => 'We’ll occasionally send you account related emails.',
		'haveAccount' => 'Already have an account?'
	],
	'users' => [
		'title' => 'Users',
		'list' => 'User List',
		'create' => 'Create User',
		'edit' => 'Edit User',
		'show' => 'Show User',
		'field' => [
			'name' => 'Contact Name',
			'email' => 'Email',
			'company' => 'Company',
			'website' => 'Website',
			'address' => 'Address',
			'city' => 'Town / City',
			'zip' => 'ZIP / Postal Code',
			'country' => 'Country'
		],
		'saveAndAnother' => 'Save & Another',
		'saveAndExit' => 'Save & Exit',
		'message' => [
			'saveSuccess' => 'The user is stored successfully.',
			'updateSuccess' => 'The user is updated successfully.',
			'deleteSuccess' => 'The user is deleted successfully.',
		]
	],
	'roles' => [
		'title' => 'Roles',
		'list' => 'Role List',
		'create' => 'Create Role',
		'edit' => 'Edit Role',
		'show' => 'Show Role',
		'name' => 'Name',
		'message' => [
			'saveSuccess' => 'The role is stored successfully.',
			'updateSuccess' => 'The role is updated successfully.',
			'deleteSuccess' => 'The role is deleted successfully.',
		]
	],
	'permissions' => [
		'title' => 'Permissions',
		'list' => 'Permission List',
		'create' => 'Create Permission',
		'edit' => 'Edit Permission',
		'show' => 'Show Permission',
		'name' => 'Name',
		'message' => [
			'saveSuccess' => 'The permission is stored successfully.',
			'updateSuccess' => 'The permission is updated successfully.',
			'deleteSuccess' => 'The permission is deleted successfully.',
		]
	],
	'profiles' => [
		'title' => 'Profile',
		'myProfile' => 'My Profile',
		'edit' => 'Edit Profile',
		'update' => 'Update Profile',
		'message' => [
			'updateSuccess' => 'The profile is updated successfully.'
		]
	],
	'genres' => [
		'title' => 'Genres',
		'sTitle' => 'Genre',
		'list' => 'Genre List',
		'create' => 'Create Genre',
		'edit' => 'Edit Genre',
		'show' => 'Show Genre',
		'name' => 'Name',
		'message' => [
			'saveSuccess' => 'The genre is stored successfully.',
			'updateSuccess' => 'The genre is updated successfully.',
			'deleteSuccess' => 'The genre is deleted successfully.',
		]
	],
	'frequencies' => [
		'title' => 'Frequencies',
		'sTitle' => 'Frequency'
	],
	'magazines' => [
		'title' => 'Magazines',
		'list' => 'Magazine List',
		'create' => 'Create Magazine',
		'edit' => 'Edit Magazine',
		'show' => 'Show Magazine',
		'upload' => 'Upload new cover',
		'reset' => 'Reset',
		'allowDescription' => 'Allowed JPG, GIF or PNG. Max size of 800K',
		'field' => [
			'title' => 'Magazine Title',
			'description' => 'Magazine Description',
			'coverImage' => 'Cover Image'

		],
		'message' => [
			'saveSuccess' => 'The magazine is stored successfully.',
			'updateSuccess' => 'The magazine is updated successfully.',
			'deleteSuccess' => 'The magazine is deleted successfully.',
		]
	],
	'emails' => [
		'emailUs' => 'Email Us',
		'subject' => 'Subject',
		'send' => 'Send'
	],
	'home' => [
		'title' => 'Home',
	],
	'aboutUs' => [
		'title' => 'About Us',
		'footTitle' => 'About Us & Our Services'
	],
	'magazineGallery' => [
		'title' => 'Magazine Gallery'
	],
	'contactUs' => [
		'title' => 'Contact Us'
	],
	'termsAndConditions' => [
		'title' => 'Terms & Conditions'
	],
	'privacyPolicy' => [
		'title' => 'Privacy Policy'
	],
	'siteMap' => [
		'title' => 'SiteMap'
	],
	'comingSoon' => [
		'title' => 'Coming Soon'
	],
	'swal' => [
		'delete' => [
			'title' => 'Are you sure?',
			'text' => 'You will not be able to recover this imaginary data!'
		]
	],
	'message' => [
		'loginWithAnotherAccount' => 'You have logined with <strong>:email</strong>. Go to your <a href="'. route('portal.usermanage.users.login', session()->get('me') ?? '') .'">account</a>'
	]
];
