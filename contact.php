<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<?php
/*
    Same architecture and reasoning as join.php's form (see that file
    for the fuller write-up): server-side validation is authoritative,
    a honeypot substitutes for a CAPTCHA, and submissions email to
    info@ifopab.org — the same already-public, already-approved address
    used sitewide, not a new destination. A general enquiry form
    doesn't carry the same "registration status" framing concern
    join.php's did (it's not about attending the gathering), but the
    same deployment caveat applies: verify mail() deliverability on
    the production host.
*/

$pageTitle = 'Contact Us';

$ifopabSubjects = [
    'General Enquiry',
    'About the Gathering',
    'Partnership / Collaboration',
    'Media / Press',
    'Other',
];

$ifopabContactValues = [
    'full_name' => '',
    'email' => '',
    'phone' => '',
    'subject' => '',
    'message' => '',
];
$ifopabContactErrors = [];
$ifopabContactSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isBot = trim((string)($_POST['website'] ?? '')) !== '';

    foreach ($ifopabContactValues as $key => $default) {
        $ifopabContactValues[$key] = trim((string)($_POST[$key] ?? ''));
    }

    if (!$isBot) {
        if ($ifopabContactValues['full_name'] === '') {
            $ifopabContactErrors['full_name'] = 'Please enter your full name.';
        }

        if ($ifopabContactValues['email'] === '') {
            $ifopabContactErrors['email'] = 'Please enter your email address.';
        } elseif (!filter_var($ifopabContactValues['email'], FILTER_VALIDATE_EMAIL)) {
            $ifopabContactErrors['email'] = 'Please enter a valid email address.';
        }

        if (!in_array($ifopabContactValues['subject'], $ifopabSubjects, true)) {
            $ifopabContactErrors['subject'] = 'Please select a subject.';
        }

        if ($ifopabContactValues['message'] === '') {
            $ifopabContactErrors['message'] = 'Please enter your message.';
        }

        if (empty($_POST['consent'])) {
            $ifopabContactErrors['consent'] = 'Please confirm you agree to be contacted.';
        }

        if (empty($ifopabContactErrors)) {
            $to = 'info@ifopab.org';
            $subjectLine = 'IFOPAB Website — ' . $ifopabContactValues['subject'];

            $body = "A new enquiry was received via the IFOPAB website's Contact form:\n\n"
                . "Name: {$ifopabContactValues['full_name']}\n"
                . "Email: {$ifopabContactValues['email']}\n"
                . "Phone: " . ($ifopabContactValues['phone'] !== '' ? $ifopabContactValues['phone'] : '(not provided)') . "\n"
                . "Subject: {$ifopabContactValues['subject']}\n\n"
                . "Message:\n{$ifopabContactValues['message']}\n";

            $replyTo = (strpos($ifopabContactValues['email'], "\r") === false && strpos($ifopabContactValues['email'], "\n") === false)
                ? $ifopabContactValues['email']
                : 'info@ifopab.org';

            $headers = "From: IFOPAB Website <info@ifopab.org>\r\n"
                . "Reply-To: {$replyTo}\r\n"
                . "Content-Type: text/plain; charset=UTF-8";

            $sent = @mail($to, $subjectLine, $body, $headers);

            if ($sent) {
                $ifopabContactSuccess = true;
                $ifopabContactValues = array_fill_keys(array_keys($ifopabContactValues), '');
            } else {
                $ifopabContactErrors['_general'] = "Something went wrong and we couldn't send your message. Please email us directly at info@ifopab.org instead.";
            }
        }
    } else {
        $ifopabContactSuccess = true;
        $ifopabContactValues = array_fill_keys(array_keys($ifopabContactValues), '');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
</head>
<body>

    <div class="boxed_wrapper">

        <?php include __DIR__ . '/includes/header.php'; ?>

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php include __DIR__ . '/sections/contact-form.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
