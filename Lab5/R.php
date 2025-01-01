//1. الاتصال بقاعدة البيانات

PDO:

<?php
// إعدادات الاتصال
$host = 'localhost';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';

try {
    // إنشاء اتصال مع قاعدة البيانات
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // تعيين وضع الأخطاء إلى استثناءات
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "تم الاتصال بقاعدة البيانات باستخدام PDO!";
} catch (PDOException $e) {
    echo "خطأ في الاتصال: " . $e->getMessage();
}
?>

MySQLi:

الطريقة الإجرائية:

<?php
// إعدادات الاتصال
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

// إنشاء اتصال مع قاعدة البيانات
$conn = mysqli_connect($host, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

echo "تم الاتصال بقاعدة البيانات باستخدام MySQLi!";
?>

الطريقة الكائنية:

<?php
// إعدادات الاتصال
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

// إنشاء اتصال مع قاعدة البيانات
$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بقاعدة البيانات باستخدام MySQLi!";
?>

2. تنفيذ استعلامات SQL

PDO:

<?php
// استعلام لاختيار جميع السجلات من جدول "users"
$stmt = $pdo->query("SELECT * FROM users");

// جلب النتائج كصفوف مترابطة
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'] . "<br>";
}
?>

MySQLi:

الطريقة الإجرائية:

<?php
// استعلام لاختيار جميع السجلات من جدول "users"
$result = mysqli_query($conn, "SELECT * FROM users");

// التحقق من وجود السجلات
if (mysqli_num_rows($result) > 0) {
    // جلب السجلات
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "لا توجد نتائج.";
}
?>

الطريقة الكائنية:

<?php
// استعلام لاختيار جميع السجلات من جدول "users"
$result = $conn->query("SELECT * FROM users");

// التحقق من وجود السجلات
if ($result->num_rows > 0) {
    // جلب السجلات
    while ($row = $result->fetch_assoc()) {
        echo $row['username'] . "<br>";
    }
} else {
    echo "لا توجد نتائج.";
}
?>

3. استخدام الاستعلامات المحضرة (Prepared Statements)

PDO:

<?php
// إعداد الاستعلام المحضر
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");

// ربط المعامل
$email = 'example@example.com';
$stmt->bindParam(':email', $email);

// تنفيذ الاستعلام
$stmt->execute();

// جلب النتائج
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo $row['username'] . "<br>";
}
?>

MySQLi:

الطريقة الإجرائية:

<?php
// إعداد الاستعلام المحضر
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");

// ربط المعامل
$email = 'example@example.com';
mysqli_stmt_bind_param($stmt, "s", $email);

// تنفيذ الاستعلام
mysqli_stmt_execute($stmt);

// جلب النتائج
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['username'] . "<br>";
}
?>

الطريقة الكائنية:

<?php
// إعداد الاستعلام المحضر
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");

// ربط المعامل
$email = 'example@example.com';
$stmt->bind_param("s", $email);

// تنفيذ الاستعلام
$stmt->execute();

// جلب النتائج
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo $row['username'] . "<br>";
}
?>

4. إدارة الأخطاء

PDO:

<?php
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // تنفيذ استعلام خاطئ لتوليد خطأ
    $pdo->exec("INVALID SQL QUERY");
} catch (PDOException $e) {
    echo "حدث خطأ: " . $e->getMessage();
}
?>

MySQLi:

الطريقة الإجرائية:

<?php
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// تنفيذ استعلام خاطئ
$result = mysqli_query($conn, "INVALID SQL QUERY");

if (!$result) {
    echo "خطأ في الاستعلام: " . mysqli_error($conn);
}
?>

الطريقة الكائنية:

<?php
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// تنفيذ استعلام خاطئ
$result = $conn->query("INVALID SQL QUERY");

if (!$result) {
    echo "خطأ في الاستعلام: " . $conn->error;
}
?>

// إغلاق الاتصال

//PDO:
//PDO لا يوجد دالة مباشرة لإغلاق الاتصال، لكن الاتصال يغلق تلقائيًا عند انتهاء تنفيذ السكربت.

//$pdo = null; // يمكن استخدام هذا لإغلاق الاتصال يدويًا إذا أردت

//MySQLi:

الطريقة الإجرائية//:

//mysqli_close($conn);

الطريقة الكائنية//:

//$conn->close();

//PDO أكثر مرونة حيث يدعم الاتصال بأنواع مختلفة من قواعد البيانات ويدير الأخطاء عبر الاستثناءات

//MySQLi مخصص فقط لـ MySQL ويوفر واجهتين (إجرائية وكائنية) للتفاعل مع قاعدة البيانات.

يمكن استخدام// PDO مع استعلامات محضرة بشكل بسيط وبطريقة آمنة، وكذلك في MySQLi ولكن مع خيارات إضافية في الطريقة الإجرائية والكائنية.

اختيارك بين// PDO و MySQLi يعتمد على احتياجاتك: إذا كنت بحاجة إلى العمل مع قواعد بيانات متعددة أو إذا كنت تفضل استخدام البرمجة الكائنية، فقد يكون PDO هو الخيار الأمثل. أما إذا كنت تعمل مع MySQL فقط، فقد يكون MySQLi هو الخيار الأفضل