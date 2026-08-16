<?php $ifopabCurrentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<ul class="navigation clearfix">
    <li class="<?= $ifopabCurrentPage === 'index.php' ? 'current' : '' ?>"><a href="index.php">Home</a></li>
    <li class="<?= $ifopabCurrentPage === 'vision.php' ? 'current' : '' ?>"><a href="vision.php">Our Vision</a></li>
    <li class="<?= $ifopabCurrentPage === 'beliefs.php' ? 'current' : '' ?>"><a href="beliefs.php">What We Believe</a></li>
    <li class="<?= $ifopabCurrentPage === 'team.php' ? 'current' : '' ?>"><a href="team.php">Meet Our Team</a></li>
    <li class="dropdown<?= in_array($ifopabCurrentPage, ['gathering.php', 'attend.php'], true) ? ' current' : '' ?>">
        <a href="gathering.php">Gathering</a>
        <ul>
            <li><a href="gathering.php#gathering">Our Inaugural Gathering</a></li>
            <li><a href="attend.php">Who Should Attend</a></li>
        </ul>
    </li>
    <li class="<?= $ifopabCurrentPage === 'join.php' ? 'current' : '' ?>"><a href="join.php">Join Us</a></li>
    <li class="<?= $ifopabCurrentPage === 'contact.php' ? 'current' : '' ?>"><a href="contact.php">Contact Us</a></li>
</ul>
