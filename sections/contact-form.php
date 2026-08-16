<!-- contact-form-section -->
<!--
    Contact info as plain content (icon + label + value) rather than
    the boxed cards this replaced (sections/contact.php, now retired —
    kept on disk, unused, same as journey.php's precedent). Same
    approved email/phone/address used sitewide — docs/07 section 63
    forbids inventing contact details. Map embed uses Google's key-less
    query embed (maps.google.com/maps?q=...&output=embed) since no
    Google Cloud API key/billing has been supplied or approved.
-->
<section class="contact-form-section" id="contact-form">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12 col-sm-12 contact-info-column">
                <div class="contact-info-content wow fadeInUp" data-wow-delay="0ms">
                    <div class="contact-info-accent"></div>
                    <h2>Get in Touch</h2>
                    <p class="contact-info-intro">We'd love to hear from you. Reach out using the details below, or send us a message.</p>

                    <ul class="contact-info-list">
                        <li>
                            <span class="contact-info-icon"><i class="flaticon-email"></i></span>
                            <div>
                                <span class="contact-info-label">Email</span>
                                <a href="mailto:info@ifopab.org">info@ifopab.org</a>
                            </div>
                        </li>
                        <li>
                            <span class="contact-info-icon"><i class="flaticon-telephone"></i></span>
                            <div>
                                <span class="contact-info-label">Call</span>
                                <a href="tel:+17208591737">+1.720.859.1737</a>
                            </div>
                        </li>
                        <li>
                            <span class="contact-info-icon"><i class="flaticon-pin"></i></span>
                            <div>
                                <span class="contact-info-label">Address</span>
                                <p>1391 Oswego Street, Aurora CO 80010</p>
                            </div>
                        </li>
                    </ul>

                    <div class="contact-info-tagline">
                        <div class="contact-info-tagline-bar"></div>
                        <p>United in Christ. Strengthened in Fellowship.</p>
                        <ul class="contact-info-social">
                            <li><a href="#" aria-label="IFOPAB on Facebook"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#" aria-label="IFOPAB on Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" aria-label="IFOPAB on X"><svg class="social-x" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="currentColor" d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a></li>
                            <li><a href="#" aria-label="IFOPAB on YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 col-sm-12 contact-form-column">
                <div class="contact-form-card wow fadeInUp" data-wow-delay="120ms">
                    <div class="contact-form-accent"></div>
                    <h2>Send Us an Enquiry</h2>
                    <p class="contact-form-intro">Have a question about IFOPAB or the inaugural gathering? Send us a message and we'll get back to you.</p>

                    <?php if ($ifopabContactSuccess): ?>
                        <div class="join-success" role="status">
                            <span class="join-success-icon"><i class="fas fa-check"></i></span>
                            <h3>Message Sent</h3>
                            <p>Thank you for reaching out. We've received your message and will respond as soon as we can.</p>
                        </div>
                    <?php else: ?>

                        <?php if (!empty($ifopabContactErrors['_general'])): ?>
                        <div class="join-form-alert" role="alert">
                            <?= htmlspecialchars($ifopabContactErrors['_general']) ?>
                        </div>
                        <?php endif; ?>

                        <form method="post" action="contact.php#contact-form" class="join-form">
                            <div class="join-form-honeypot" aria-hidden="true">
                                <label for="contact-website">Website</label>
                                <input type="text" id="contact-website" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="join-form-row">
                                <div class="join-form-group">
                                    <label for="contact-full-name">Full Name <span class="join-required">*</span></label>
                                    <input
                                        type="text"
                                        id="contact-full-name"
                                        name="full_name"
                                        placeholder="e.g. Sarah Johnson"
                                        value="<?= htmlspecialchars($ifopabContactValues['full_name']) ?>"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabContactErrors['full_name']) ? 'aria-invalid="true" aria-describedby="contact-full-name-error"' : '' ?>
                                    >
                                    <?php if (isset($ifopabContactErrors['full_name'])): ?>
                                    <span class="join-form-error" id="contact-full-name-error"><?= htmlspecialchars($ifopabContactErrors['full_name']) ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="join-form-group">
                                    <label for="contact-email">Email Address <span class="join-required">*</span></label>
                                    <input
                                        type="email"
                                        id="contact-email"
                                        name="email"
                                        placeholder="e.g. sarah@example.com"
                                        value="<?= htmlspecialchars($ifopabContactValues['email']) ?>"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabContactErrors['email']) ? 'aria-invalid="true" aria-describedby="contact-email-error"' : '' ?>
                                    >
                                    <?php if (isset($ifopabContactErrors['email'])): ?>
                                    <span class="join-form-error" id="contact-email-error"><?= htmlspecialchars($ifopabContactErrors['email']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="join-form-row">
                                <div class="join-form-group">
                                    <label for="contact-phone">Phone Number</label>
                                    <input
                                        type="tel"
                                        id="contact-phone"
                                        name="phone"
                                        placeholder="e.g. +1 720 859 1737"
                                        value="<?= htmlspecialchars($ifopabContactValues['phone']) ?>"
                                    >
                                </div>

                                <div class="join-form-group">
                                    <label for="contact-subject">Subject <span class="join-required">*</span></label>
                                    <select
                                        id="contact-subject"
                                        name="subject"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabContactErrors['subject']) ? 'aria-invalid="true" aria-describedby="contact-subject-error"' : '' ?>
                                    >
                                        <option value="" disabled <?= $ifopabContactValues['subject'] === '' ? 'selected' : '' ?>>Select one</option>
                                        <?php foreach ($ifopabSubjects as $subjectOption): ?>
                                        <option value="<?= htmlspecialchars($subjectOption) ?>" <?= $ifopabContactValues['subject'] === $subjectOption ? 'selected' : '' ?>><?= htmlspecialchars($subjectOption) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($ifopabContactErrors['subject'])): ?>
                                    <span class="join-form-error" id="contact-subject-error"><?= htmlspecialchars($ifopabContactErrors['subject']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="join-form-group">
                                <label for="contact-message">Message <span class="join-required">*</span></label>
                                <textarea
                                    id="contact-message"
                                    name="message"
                                    rows="5"
                                    placeholder="How can we help?"
                                    required
                                    aria-required="true"
                                    <?= isset($ifopabContactErrors['message']) ? 'aria-invalid="true" aria-describedby="contact-message-error"' : '' ?>
                                ><?= htmlspecialchars($ifopabContactValues['message']) ?></textarea>
                                <?php if (isset($ifopabContactErrors['message'])): ?>
                                <span class="join-form-error" id="contact-message-error"><?= htmlspecialchars($ifopabContactErrors['message']) ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="join-form-consent">
                                <input
                                    type="checkbox"
                                    id="contact-consent"
                                    name="consent"
                                    value="1"
                                    required
                                    aria-required="true"
                                    <?= isset($ifopabContactErrors['consent']) ? 'aria-invalid="true" aria-describedby="contact-consent-error"' : '' ?>
                                >
                                <label for="contact-consent">I agree to be contacted by IFOPAB regarding this enquiry.</label>
                            </div>
                            <?php if (isset($ifopabContactErrors['consent'])): ?>
                            <span class="join-form-error" id="contact-consent-error"><?= htmlspecialchars($ifopabContactErrors['consent']) ?></span>
                            <?php endif; ?>

                            <button type="submit" class="theme-btn-one join-form-submit">
                                Send Message
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="contact-map-bold wow fadeInUp" data-wow-delay="0ms">
            <div class="contact-map-card">
                <iframe
                    src="https://maps.google.com/maps?q=1391+Oswego+Street,+Aurora+CO+80010&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    title="IFOPAB office location map"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
            <a
                class="theme-btn-one contact-map-btn"
                href="https://www.google.com/maps/search/?api=1&query=1391+Oswego+Street%2C+Aurora+CO+80010"
                target="_blank"
                rel="noopener noreferrer"
            >
                <i class="fas fa-location-arrow"></i>
                Get Directions
            </a>
        </div>
    </div>
</section>
<!-- contact-form-section end -->
