<?php
##This page checks the Fields and Validations
function notEmpty($data)
{
	if(strlen($data)>0)
		return 'T';
	else return 'F';
}

function validatePlainText($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='`'||$str=='!'||$str=='$'||$str=='%'||$str=='&'||$str=='^'||$str=='*'||$str=='\''||$str=='\"'||$str=='>'||$str=='<'||$str=='?'||$str=='@'||$str=='\0'||$str=='\b'||$str=='\\'||$str=='1'||$str=='2'||$str=='3'||$str=='4'||$str=='5'||$str=='6'||$str=='7'||$str=='8'||$str=='9'||$str=='0'||$str=='/'||$str=='|'||$str=='['||$str==']'||$str=='('||$str==')'||$str=='+'||$str=='='||$str=='-'||$str=='_'||$str==':'||$str==';'||$str=='~')
			{
				$res='F';
				return $res;

			}
			
			else
			{
				$res='T';
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validateEmailText($data)
{
	$res='F';
	$unres='F';
	$dnres='F';
	$dres='F';
	$l=strlen($data);
	if($l>0 && substr_count($data,'@')===1 && substr_count($data,'.')>=1)
	{
		$atposition=strpos($data,'@');
		$userid=substr($data,0,$atposition);
		
		$pposition=strrpos($data,'.');
		$dom=substr($data,$pposition+1,$l-1);
		
		if($pposition-$atposition>1)
		{
			$domainname=substr($data,$atposition+1,$pposition-($atposition+1));
			$dnres=validatePlainText($domainname);
		}
		
		
		for($i=0;$i<$l;$i++)
		{
			$str=substr($userid,$i,1);
			if($str=='`'||$str=='!'||$str=='$'||$str=='%'||$str=='&'||$str=='^'||$str=='*'||$str=='\''||$str=='\"'||$str=='>'||$str=='<'||$str=='?'||$str==','||$str=='@'||$str=='\0'||$str=='\b')
			{
				$unres='F';
				break;
			}
			else
			{
				$unres='T';
			}
		}
		if($unres=='T')
		{
			$unres=consP($userid);
		}
		$dres=validatePlainText($dom);
		
		if($unres==='T' && $dnres==='T' && $dres==='T')
			$res='T';
	}
	else
	{
		$res='F';
	}
	
	return $res;
}

function consP($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		if(substr_count($data,'.')>1)
		{
			$fp=strpos($data,'.');
			for($i=$fp;$i<$l;$i++)
			{
				if(substr($data,$fp,1)==='.')
				{
					$res='F';
					break;
				}
				else
				{
					$fp=strpos($data,$fp,'.');
					$res='T';
				}
			}
		}
		else
		{
			$res='T';
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validatePhoneNumbers($data)
{
	$res='F';
	$l=strlen($data);
	if($l==10)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='1'||$str=='2'||$str=='3'||$str=='4'||$str=='5'||$str=='6'||$str=='7'||$str=='8'||$str=='9'||$str=='0')
			{
				$res='T';
				
			}
			
			else
			{
				$res='F';
				return $res;
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validateNumbers($data)
{
	$res='F';
	$data=(string)$data;
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='1'||$str=='2'||$str=='3'||$str=='4'||$str=='5'||$str=='6'||$str=='7'||$str=='8'||$str=='9'||$str=='0')
			{
				$res='T';
			}
			
			else
			{
				$res='F';
				break;
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validatePw($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='\''||$str=='\"'||$str=='>'||$str=='<'||$str=='`'||$str=='\0'||$str=='b')
			{
				$res='F';
				return $res;

			}
			
			else
			{
				$res='T';
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function convertQuotes($data)
{
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='\''){str_replace("\'","&#39;",$data);}
			if($str=='\"'){str_replace("\"","&quot;",$data);}
			if($str=='<'){str_replace("<","&lt;",$data);}
			if($str=='>'){str_replace(">'","&gt;",$data);}	
		}
	}
	return $data;
}

function validateNullBs($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='\0'||$str=='\b')
			{
				$res='F';
				return $res;

			}
			
			else
			{
				$res='T';
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validateAddressText($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='`'||$str=='!'||$str=='$'||$str=='%'||$str=='&'||$str=='^'||$str=='*'||$str=='\''||$str=='\"'||$str=='>'||$str=='<'||$str=='?'||$str=='@'||$str=='\0'||$str=='\b')
			{
				$res='F';
				return $res;

			}
			
			else
			{
				$res='T';
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function validateUN($data)
{
	$res='F';
	$l=strlen($data);
	if($l>0)
	{
		for($i=0;$i<$l;$i++)
		{
			$str=substr($data,$i,1);
			if($str=='`'||$str=='%'||$str=='&'||$str=='^'||$str=='*'||$str=='\''||$str=='\"'||$str=='>'||$str=='<'||$str=='\0'||$str=='\b')
			{
				$res='F';
				return $res;

			}
			
			else
			{
				$res='T';
			}
		}
	}
	else
	{
		$res='F';
	}
	return $res;
}

function captchaCheck()
{
	if(notEmpty($_POST["g-recaptcha-response"]))
	{
		$captcha=$_POST["g-recaptcha-response"];

		$qresponse=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfopSYTAAAAADP_AhdcoKfEzFqGSL2DAPIY3qCx"."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

		$response=json_decode($qresponse,true);

		return $response["success"];
	}
	else
	{
		return false;
	}
}

function captchaError()
{
	echo "Captcha Error.. Kindly Retry!!";
}

?>