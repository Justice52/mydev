<br />
<b>Warning</b>:  Undefined array key "id" in <b>C:\xampp\htdocs\Office\generate_invoice.php</b> on line <b>5</b><br />
<br />
<b>Warning</b>:  getimagesize(&lt;images&gt;logo-1-1024x907-1.jpg): Failed to open stream: No such file or directory in <b>C:\xampp\htdocs\Office\fpdf\fpdf.php</b> on line <b>1255</b><br />
<br />
<b>Fatal error</b>:  Uncaught Exception: FPDF error: Missing or incorrect image file: &lt;images&gt;logo-1-1024x907-1.jpg in C:\xampp\htdocs\Office\fpdf\fpdf.php:267
Stack trace:
#0 C:\xampp\htdocs\Office\fpdf\fpdf.php(1257): FPDF-&gt;Error('Missing or inco...')
#1 C:\xampp\htdocs\Office\fpdf\fpdf.php(890): FPDF-&gt;_parsejpg('&lt;images&gt;logo-1-...')
#2 C:\xampp\htdocs\Office\generate_invoice.php(19): FPDF-&gt;Image('&lt;images&gt;logo-1-...', 10, 6, 30)
#3 C:\xampp\htdocs\Office\fpdf\fpdf.php(330): PDF-&gt;Header()
#4 C:\xampp\htdocs\Office\generate_invoice.php(36): FPDF-&gt;AddPage()
#5 {main}
  thrown in <b>C:\xampp\htdocs\Office\fpdf\fpdf.php</b> on line <b>267</b><br />
