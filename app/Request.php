<?php
namespace App;

class Request
{
	public static function NewContactSubmitted()
	{
		return isset($_POST['newContact']);
	}
	public static function GetContactPostData()
	{
		$data = [];
		foreach($_POST as $key => $value)
		{
			if(!empty($value))
			{
				$data[$key] = $value;
			}
		}
		
	  return $data;
	}
	public static function ContactDetailsRequest()
	{
		if(isset($_GET['details']))
		{
			return $_GET['details'];
		}
	}
	public static function ContactRemovingRequest()
	{
		if(isset($_GET['del']))
		{
			return $_GET['del'];
		}
	}
}

