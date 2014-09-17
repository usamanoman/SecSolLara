<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent  implements UserInterface, RemindableInterface {


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
	    return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
	    return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}



	public function getRememberTokenName()
	{
	    return 'remember_token';
	}



	











	protected $guarded = array('id');

	public static $rules = array(
    'firstname'=>'required|alpha|min:2',
    'lastname'=>'required|alpha|min:2',
    'email'=>'required|email|unique:users',
    'password'=>'required|alpha_num|between:6,12',
    'privacy_policy'=>'required'
    );



	public static $admin_rules = array(
    'firstname'=>'required|alpha|min:2',
    'lastname'=>'required|alpha|min:2',
    'email'=>'required|email|unique:users',
    'password'=>'required|alpha_num|between:6,12',
    );
    

    public static $editrules = array(
    'firstname'=>'required|alpha|min:2',
    'lastname'=>'required|alpha|min:2',
    'password'=>'required|alpha_num|between:6,12'
    );


 	public static $loginrules = array(
    'email'=>'required|email',
    'password'=>'required|alpha_num|between:6,12'
    );

       
}
