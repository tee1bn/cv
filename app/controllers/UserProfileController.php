<?php


/**
 * this class is the default controller of our application,
 * 
*/
class UserProfileController extends controller
{


	public function __construct(){

	}





	public function request_for_review()
	{
		$auth = $this->auth();
		$response = $auth->request_for_review();
		header("content-type:application/json");

		echo json_encode(compact('response'));
	}


	public function delete_document($key)
	{
		$auth = $this->auth();
		$response = $auth->delete_document($key);
		header("content-type:application/json");

		echo json_encode(compact('response'));
	}



	public function upload_supporting_document()
	{

		$files =  MIS::refine_multiple_files($_FILES['files']);

		$combined_files = array_combine($_POST['label'], $files);

		$response = $this->auth()->upload_documents($combined_files);
			// Redirect::back();
	}

	public function fetch_user_documents()
	{
		$auth = $this->auth();
		header("content-type:application/json");

		$lock_profile = ['verifying', 'approved'];

		 $documents = ($auth->documents);

		 	$disable_btn = 'false';
		 if ((in_array($auth->document_approval_status, $lock_profile)) && (! $this->admin())) {
		 	$disable_btn = 'true';
		 }

		 echo  json_encode(compact('documents', 'disable_btn'));

	}




	public function update_bank_info()
	{
		echo "<pre>";

		if (true) {


			$this->validator()->check(Input::all() , array(

				'bank_account_name' =>[
						'required'=> true,
						'min'=> 3,
						'max'=> 32,					
							],
				'bank_name' =>[
						'required'=> true,
						'min'=> 3,
						'max'=> 32,					
							],
				'bank_account_number' =>[
						'required'=> true,
						'numeric'=> true,
						'min'=> 3,
						'max'=> 32,					
							],
			));


			 if($this->validator->passed()){
			 	$this->auth()->update([
								'bank_account_name' 	=> $_POST['bank_account_name'],
								'bank_account_number' 	=> $_POST['bank_account_number'],
								'bank_name' 			=> $_POST['bank_name'],
								]);

			 	Session::putFlash('success','Bank Information updated successfully!');

			}else{

			 	Session::putFlash('danger', Input::inputErrors());
			}
		}


		// Redirect::back();
	}




	public function change_password()
	{

		if(/*Input::exists('change_password')*/ true){

		$this->validator()->check(Input::all() , array(

		'current_password' =>[
				'required'=> true,
				'min'=> 3,
				'max'=> 32,					
					],

		'new_password' =>[

				'required'=> true,
				'min'=> 6,
				'max'=> 32,					
					],

		'confirm_password' => [
						 'required'=> true,
					     'matches'=> 'new_password',
						]

		));



			if (! password_verify(Input::get('current_password'), $this->auth()->password)){
				$this->validator()->addError('current_password' , "current password do not match");

			}

	  	   if($this->validator()->passed()){

		 		User::find($this->auth()->id)->update(['password' => Input::get('new_password')]);

		 		$user = User::where('id' , $this->auth()->id)->first();

		 		 	Session::putFlash('success', "Password changed successfully!");

			}else{

		 		// Session::putFlash('danger', "Please try again ");
		 	}		
		}

		Redirect::back();
	}


	public function update_profile()
	{

			echo "<pre>";
		if (/*Input::exists('update_user_profile')*/ true) {
		
		// print_r($_FILES);


				$this->validator()->check(Input::all() , array(


					'fullname' =>[
							'required'=> true,
							'max'=> '32',
							'min'=> '2',
								],



					'username' => [
									// 'required'=> true,
									'min'=> 1,
									'one_word'=> true,
									'no_special_character'=> true,
									'replaceable'=> 'User|'.$this->auth()->id,
								],


						'email' => [
										'required'=> true,
										'email'=> true,
										'replaceable'=> 'User|'.$this->auth()->id,
									],


						
						'country' =>[
								'required'=> true,
									],
						
						'state' =>[
								'required'=> true,
									],
						

						'address' =>[
								'required'=> true,
								'max'=> '32',
								'min'=> '2',
									],


						'gender' =>[
								'required'=> true,
									],


						'birthdate' =>[
								'required'=> true,
								'max'=> '32',
								'min'=> '2',
									],

						'phone' =>[
								'required'=> true,
								'numeric'=> true,
								'max'=> '32',
								'min'=> '2',
								'replaceable'=> 'User|'.$this->auth()->id,
								],	
					));


			if($this->validator->passed()){
			 	if ($this->auth()->email != $_POST['email']) {

			 		$this->auth()->update(['email_verification'=>    md5(uniqid()) ]);
			 	}


			 	if ($this->auth()->phone != $_POST['phone']) {

			 		$this->auth()->update(['phone_verification'=> User::generate_phone_code_for($this->auth()->id)]);
			 	}



				$this->auth()->update(Input::all());




				Session::putFlash('success', 'Profile updated successfully!');
			}else{

				// print_r($this->validator->errors());
				Session::putFlash('info', $this->inputErrors());
			}
		}



		Redirect::back();

	}

	public function update_profile_picture()
	{

		if ($_FILES['profile_pix']['error']!=4) {
			$profile_pictures =	$this->update_user_profile($_FILES);
			Session::putFlash('success','Profile Picture Updated Successfully.');
		}

		Redirect::back();
	}


	public function update_user_profile($file)
	{
		$directory = 'uploads/images/users/profile_pictures';
		$handle = new Upload($file['profile_pix']);

	                //if it is image, generate thumbnail
	                if (explode('/', $handle->file_src_mime)[0] == 'image') {

					// $handle->file_new_name_body = "{$this->auth()->username}";

				$handle->Process($directory);
		 		$original_file  = $directory.'/'.$handle->file_dst_name;

	                         // we now process the image a second time, with some other settings
	                $handle->image_resize            = true;
	                $handle->image_ratio_y           = true;
	                $handle->image_x                 = 50;

					// $handle->file_new_name_body = "{$this->auth()->username}";
	                $handle->Process($directory);

	                $resize_file    = $directory.'/'.$handle->file_dst_name;


	                }


		$profile_pictures = ['original_file' =>$original_file , 'resize_file'=>$resize_file];


		if ($this->auth()->profile_pix != Config::default_profile_pix()) {
		(new Upload($this->auth()->profile_pix))->clean();
		}

		if ($this->auth()->resized_profile_pix != Config::default_profile_pix()) {
		(new Upload($this->auth()->resized_profile_pix))->clean();
		}

			$this->auth()->update([
						'profile_pix' => $profile_pictures['original_file'],
						'resized_profile_pix' => $profile_pictures['resize_file']
						]);



		return $profile_pictures;
	}

}























?>