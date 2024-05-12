<html lang="ar">
	<head>
<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/middlelogo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/middlelogo.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../style/create_account.css">
	<link rel="stylesheet" type="text/css" href="../style/config.css">
	<title>إنشاء حساب</title>
	</head>

<body>

<nav class="navigation max-width-container">
	<div class="nav-content">
		<div dir="rtl" class="nav-menu">
			<ul>
				<li class="active"><a href="../public/index.php">الصفحة الرئيسية</a></li>
				<li><a href="../public/faqs.php">الأسئلة الشائعة</a></li>
				<li><a href="../public/about.php">معلومات عنا</a></li>
			</ul>
		</div>
		<div class="menu-icons">
			<a class="menu"><i class="fa-solid fa-bars" aria-hidden="true"></i></a>
			<a class="closemenu"><i class="fa-solid fa-xmark" aria-hidden="true"></i></a>
		</div>
	</div>
	<a href="../public/index.php" class="logo"><img src="../img/logo1.png" alt="" srcset=""></a>
	<a class="give" id="add_item" href="login.php">تسجيل الدخول</a>
</nav>

<link rel="stylesheet" type="text/css" href="../style/navbar.css">

<script>
	let menu = document.querySelector(".menu");
	let navmenu = document.querySelector(".nav-menu");
	let closemenu = document.querySelector(".closemenu");


	menu.addEventListener("click", () => {
		navmenu.style.left = "0";
		navmenu.style.borderBottomRightRadius = "0";
		menu.style.display = "none";
		closemenu.style.display = "flex";
	});

	closemenu.addEventListener("click", () => {
		navmenu.style.left = "-100%";
		navmenu.style.borderBottomRightRadius = "200%";
		menu.style.display = "flex";
		closemenu.style.display = "none";
	});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<section dir="rtl" class="main_form max-width-container">
		<form class="form no-center" method="POST" action="createaccount1.php" enctype="multipart/form-data">
			<h1>إنشاء حساب</h1>
			<div class="input profile_div">
				<h6>أختر صورتك:</h6>
				<label class="profile" for="profile_img">
					<i class="fa-regular fa-user" aria-hidden="true"></i>
					
					<img id="profileImage" name="profileImage" width="100px" height="100px"/>
				</label>
				
				<input id="profile_img" type="file" name="profile_img" onchange="loadFile(event)" accept="image/*" placeholder="Photo" required="" capture>
				

				  <script type="text/javascript">
					var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('profileImage');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
				</script>

				<div class="error_message"></div>
			</div>
			<div class="full_name">
				<div class="input">
					<label for="f_name">الاسم الأول*</label>
					<input name="f_name" value="" type="text" placeholder="اكتب اسمك الأول هنا" id="f_name" required>
					<div class="error_message"></div>
				</div>
				<div class="input">
					<label for="l_name">اسم العائلة*</label>
					<input name="l_name" value="" type="text" placeholder="اكتب اسمك الأخير هنا" id="l_name" required>
					<div class="error_message"></div>
				</div>
			</div>
			<div class="input">
				<label for="city">مدينة*</label>
				<select name="city" id="city" required>
				<option value="default">اختر مدينتك</option>
				<option value="Johor">Johor</option>
				<option value="Kedah">Kedah</option>
				<option value="Kelantan">Kelantan</option>
				<option value="Melaka">Melaka</option>
				<option value="Negeri Sembilan">Negeri Sembilan</option>
				<option value="Pahang">Pahang</option>
				<option value="Perak">Perak</option>
				<option value="Perlis">Perlis</option>
				<option value="Pulau Pinang">Pulau Pinang</option>
				<option value="Sarawak">Sarawak</option>
				<option value="Selangor">Selangor</option>
				<option value="Terengganu">Terengganu</option>
				<option value="Kuala Lumpur">Kuala Lumpur</option>
				<option value="Labuan">Labuan</option>
				<option value="Sabah">Sabah</option>
				<option value="Putrajaya">Putrajaya</option></select>
				<div class="error_message"></div>
			</div>
			<div class="input">
				<label for="tel">رقم الهاتف*</label>
				<div class="phone_number">
					<!-- <label class='prefix_tel_code'>+00</label> -->
					<input name="prefix_tel_code" id="prefix_tel_code_input" value="+60">
					<input value="" name="tel" type="number" placeholder="أكتب رقم هاتفك هنا" id="tel" required>
				</div>
				<div class="error_message"></div>
			</div>

      <label for="usertype">نوع المستخدم*</label>
      <br>
<script>
      function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
      <input type="checkbox" name="check" value="seller" onclick="onlyOne(this)">
      <label for="seller">بائع</label><br>
      <input type="checkbox" name="check" value="buyer" onclick="onlyOne(this)">
      <label for="buyer">مشتري</label><br>
      <input type="checkbox" name="check" value="both" onclick="onlyOne(this)">
      <label for="both">كلاهما</label><br>

			<div class="input">
				<label for="email">بريد إلكتروني*</label>
				<input name="email" value="" type="email" placeholder="اكتب بريدك الإلكتروني هنا" id="email" required>
        <div class="error_message"></div>
      </div>
      <div class="input">
				<label for="address">العنوان*</label>
				<input name="address" value="" type="address" placeholder="اكتب العنوان هنا" id="address" required>
				<div class="error_message"></div>
			</div>

			<div class="input password">
				<label for="password">كلمة المرور*</label>
				<input name="password" type="password" placeholder="اكتب كلمة المرور الخاصة بك هنا" id="password" required>
				
				<span class="password-toggle-icon"><i class="fas fa-eye"></i></span>

				<div class="error_message"></div>
				<div class="tip">
					يجب أن تكون كلمة المرور الخاصة بك قوية:
				</div>
			</div>
			
			<div class="input">
				<p>من خلال إنشاء حسابك فإنك توافق على <a href="../public/terms_of_service.php">شروط الاستخدام</a> و <a href="../public/privacy_policy.php">سياسة الخصوصية</a></p>
			</div>
			<div class="input">
				<button id="btn" type="btn" name="create">إنشاء حساب</button>
			</div>
			<div class="input login">
				<p>هل لديك حساب؟ <a href="login.php">تسجيل الدخول</a></p>
			</div>

		</form>


		<div class="overview">
			<a class="logo">
				<!-- <img src="../img/logo1.png" alt="" srcset=""> -->
			</a>
			<div class="vector">
				<img src="../img/undraw_sign_up_n6im.svg" alt="" srcset="">
			</div>
			<div class="list">
				<ul>
					<li>استخدم موقعنا مجانًا، دون دفع أي شيء على الإطلاق</li>
					<li>يمكنك العثور على مشترين أو بائعين على موقعنا</li>
					<li>تواصل مع أشخاص في مجتمعك</li>
				</ul>
			</div>
			<div class="counter">
				<li class="activeli">1</li>
				<li><i class="fa-solid fa-check"></i></li>
			</div>
		</div>
	</section>

	<!-- 

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/connection.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("الإيميل مسجل مسبقاً");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>-->

<script src="https://kit.fontawesome.com/250e3d3d26.js" crossorigin="anonymous"></script>
<style media="all" id="fa-v4-font-face"></style>

<script>
const passwordField = document.getElementById("password");
const togglePassword = document.querySelector(".password-toggle-icon i");

togglePassword.addEventListener("click", function () {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  }
});
    </script>

</body>
</html>