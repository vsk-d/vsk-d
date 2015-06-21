define(&quot;CONTACT_FORM&quot;, 'darkinmail@rambler.ru');
 
	function ValidateEmail($value){
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
 
		if($value == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $value);
		}
 
		return empty($string) ? true : false;
	}
 
	$post = (!empty($_POST)) ? true : false;
 
	if($post){
 
		$name = stripslashes($_POST['name']);
		$phone = stripslashes($_POST['phone']);
		$email = stripslashes($_POST['email']);
		$subject = 'Заявка';
		$error = '';	
		$message = '
			&lt;html&gt;
					&lt;head&gt;
							&lt;title&gt;Заявка&lt;/title&gt;
					&lt;/head&gt;
					&lt;body&gt;
							&lt;p&gt;Имя: '.$name.'&lt;/p&gt;
							&lt;p&gt;Телефон : '.$phone.'&lt;/p&gt;	
							&lt;p&gt;Email : '.$email.'&lt;/p&gt;
					&lt;/body&gt;
			&lt;/html&gt;';
 
		if (!ValidateEmail($email)){
			$error = 'Email введен неправильно!';
		}
 
		if(!$error){
			$mail = mail(CONTACT_FORM, $subject, $message,
			     &quot;From: &quot;.$name.&quot; &lt;&quot;.$email.&quot;&gt;\r\n&quot;
			    .&quot;Reply-To: &quot;.$email.&quot;\r\n&quot;
			    .&quot;Content-type: text/html; charset=utf-8 \r\n&quot;
			    .&quot;X-Mailer: PHP/&quot; . phpversion());
 
			if($mail){
				echo 'OK';
			}
		}else{
			echo '&lt;div class=&quot;bg-danger&quot;&gt;'.$error.'&lt;/div&gt;';
		}
 
	}
?&gt;