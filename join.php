<?php require_once __DIR__ . '/config/bootstrap.php'; ?>
<?php
/*
    "Join Us" collects genuine personal data (name, email, phone), which
    is a materially different kind of decision from copy/layout choices
    made elsewhere on this site. docs/02 section 27 states registration
    status is "not confirmed" and warns against building a public
    registration workflow without approval — so this is deliberately
    framed as expressing interest / getting on IFOPAB's radar ahead of
    the (still TBD) gathering, never as completed registration. See
    sections/join-form.php for the copy itself.

    Submissions are emailed to info@ifopab.org — the same already-public,
    already-approved contact address used sitewide, not a new or
    invented destination. No database, third-party form service, or new
    data store is introduced.

    Security/robustness notes for whoever deploys this:
    - mail() depends on the host having a working MTA (sendmail/postfix)
      and reasonable SPF/DKIM for the sending domain, or messages may be
      dropped or spam-filtered. Verify deliverability after deploy, or
      swap to an SMTP library (e.g. PHPMailer) if mail() proves
      unreliable on the production host.
    - Honeypot field ("website") is the spam defense here rather than a
      CAPTCHA, since no CAPTCHA provider/API key has been supplied or
      approved. Proportionate for a low-value target with no
      authenticated user state to protect — see also why no CSRF token
      is implemented (would require session infrastructure this project
      doesn't otherwise use, for a threat class the honeypot already
      covers here: unwanted submissions, not account takeover).
    - Email header injection is prevented by rejecting any email value
      containing CR/LF before it's used in the Reply-To header.
*/

$pageTitle = 'Join Us';

$ifopabRoles = [
    'Pastor',
    'Apostle',
    'Bishop',
    'Other Invited Spiritual Leader',
];

$ifopabFormValues = [
    'full_name' => '',
    'email' => '',
    'phone' => '',
    'role' => '',
    'organization' => '',
    'country' => '',
    'message' => '',
];
$ifopabFormErrors = [];
$ifopabFormSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot: a real visitor never fills this (hidden via CSS); bots
    // filling every field usually do.
    $isBot = trim((string)($_POST['website'] ?? '')) !== '';

    foreach ($ifopabFormValues as $key => $default) {
        $ifopabFormValues[$key] = trim((string)($_POST[$key] ?? ''));
    }

    if (!$isBot) {
        if ($ifopabFormValues['full_name'] === '') {
            $ifopabFormErrors['full_name'] = 'Please enter your full name.';
        }

        if ($ifopabFormValues['email'] === '') {
            $ifopabFormErrors['email'] = 'Please enter your email address.';
        } elseif (!filter_var($ifopabFormValues['email'], FILTER_VALIDATE_EMAIL)) {
            $ifopabFormErrors['email'] = 'Please enter a valid email address.';
        }

        if (!in_array($ifopabFormValues['role'], $ifopabRoles, true)) {
            $ifopabFormErrors['role'] = 'Please select the option that best describes you.';
        }

        if (empty($_POST['consent'])) {
            $ifopabFormErrors['consent'] = 'Please confirm you agree to be contacted.';
        }

        if (empty($ifopabFormErrors)) {
            $to = 'info@ifopab.org';
            $subject = 'IFOPAB Website — New "Join Us" Submission';

            $body = "A new interest submission was received via the IFOPAB website's Join Us form:\n\n"
                . "Name: {$ifopabFormValues['full_name']}\n"
                . "Email: {$ifopabFormValues['email']}\n"
                . "Phone: " . ($ifopabFormValues['phone'] !== '' ? $ifopabFormValues['phone'] : '(not provided)') . "\n"
                . "Role: {$ifopabFormValues['role']}\n"
                . "Church / Ministry / Organization: " . ($ifopabFormValues['organization'] !== '' ? $ifopabFormValues['organization'] : '(not provided)') . "\n"
                . "Country: " . ($ifopabFormValues['country'] !== '' ? $ifopabFormValues['country'] : '(not provided)') . "\n\n"
                . "Message:\n" . ($ifopabFormValues['message'] !== '' ? $ifopabFormValues['message'] : '(none)') . "\n";

            // Reject anything with a line break before it ever reaches a
            // header — the standard defense against header injection.
            $replyTo = (strpos($ifopabFormValues['email'], "\r") === false && strpos($ifopabFormValues['email'], "\n") === false)
                ? $ifopabFormValues['email']
                : 'info@ifopab.org';

            $headers = "From: IFOPAB Website <info@ifopab.org>\r\n"
                . "Reply-To: {$replyTo}\r\n"
                . "Content-Type: text/plain; charset=UTF-8";

            $sent = @mail($to, $subject, $body, $headers);

            if ($sent) {
                $ifopabFormSuccess = true;
                $ifopabFormValues = array_fill_keys(array_keys($ifopabFormValues), '');
            } else {
                $ifopabFormErrors['_general'] = "Something went wrong and we couldn't send your submission. Please email us directly at info@ifopab.org instead.";
            }
        }
    } else {
        // Silently treat bot submissions as "success" so the honeypot
        // doesn't tip off automated scripts that they were caught.
        $ifopabFormSuccess = true;
        $ifopabFormValues = array_fill_keys(array_keys($ifopabFormValues), '');
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
                        <h1>Join Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <?php include __DIR__ . '/sections/join-form.php'; ?>

        <?php include __DIR__ . '/includes/footer.php'; ?>
    </div>

    <?php include __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
