
<?php
include('includes/companies-header.php');
include_once('../const/mysqli-connection.php');
if (isset($_GET['stdId']) && isset($_GET['compId'])) {
    $studentId = $_GET['stdId'];
    $companyId = $_GET['compId'];

    $queryStudent = "SELECT * FROM students WHERE id = $studentId";
    $studentResult = mysqli_query($dbConnection,$queryStudent);
    $row = mysqli_fetch_assoc($studentResult);
    $studentEmail = $row['email'];

    $queryCompany = "SELECT * FROM companies WHERE id = $companyId";
    $companyResult = mysqli_query($dbConnection,$queryCompany);
    $row = mysqli_fetch_assoc($companyResult);
    $companyEmail = $row['email'];


}
?>

<div class="container mt-4 w-50">
    <form method="post" action="">
    <div class="form-group">
        <label for="">From Email</label>
        <input type="email" name="from" class="form-control" value="<?php echo $companyEmail ?>" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">To Email</label>
        <input type="email" name="to" class="form-control" value="<?php echo $studentEmail ?>" id="" placeholder="">
    </div>
   
    <div class="form-group">
        <label for="">Your Message Here</label>
        <textarea class="form-control" id=""name="subject" rows="3"></textarea>
    </div>
    <button type="submit"  class="btn btn-success" name="send"><i class="fas fa-paper-plane"></i> Send</button>
    </form>
</div>

<?php
    if (isset($_POST['send'])) {
        // $from = $_POST['from'];
        // $to = $_POST['to'];
        // $subject = $_POST['subject'];
        // $text = str_replace("\n.", "\n..", $subject);
        // echo $from.$to.$subject;

        $to = "chamamat2017@gmail.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: chamamat2017@gmail.com.com" . "\r\n" .
        "CC: ac21816017@utg.edu.gm.com";

        ini_set("SMTP","ssl://smtp.gmail.com");
        ini_set("smtp_port","25");
        ini_set('sendmail_from', 'chamamat2017@gmail.com');
        mail($to,$subject,$txt,$headers);
    }
?>