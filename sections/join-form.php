<!-- join-section -->
<!--
    Framed as expressing interest ahead of the gathering, not completed
    registration — the gathering date is still TBD and docs/02 section
    27 states registration status is "not confirmed". See join.php for
    the full reasoning and the server-side handling this form posts to.
    Role options are the exact approved audience categories from the
    Who Should Attend section (docs/04 section 15) — nothing invented.
-->
<section class="join-section" id="join">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 join-info-column">
                <div class="join-info">
                    <div class="join-info-accent"></div>
                    <h2>Tell Us You're Interested</h2>
                    <p class="join-info-intro">Let us know you'd like to be part of IFOPAB's inaugural gathering, and we'll be in touch as details are confirmed.</p>

                    <ul class="join-steps">
                        <li class="wow fadeInUp" data-wow-delay="0ms">
                            <span class="join-step-number">01</span>
                            <div>
                                <h3>Share Your Details</h3>
                                <p>Tell us who you are and how to reach you.</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="80ms">
                            <span class="join-step-number">02</span>
                            <div>
                                <h3>We'll Review It</h3>
                                <p>Your submission goes directly to the IFOPAB team.</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="160ms">
                            <span class="join-step-number">03</span>
                            <div>
                                <h3>Stay Connected</h3>
                                <p>We'll follow up as gathering details are confirmed.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="join-info-alt">
                        <p>Prefer email? Reach us directly at <a href="mailto:info@ifopab.org">info@ifopab.org</a>.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 join-form-column">
                <div class="join-form-card wow fadeInUp" data-wow-delay="100ms">
                    <?php if ($ifopabFormSuccess): ?>
                        <div class="join-success" role="status">
                            <span class="join-success-icon"><i class="fas fa-check"></i></span>
                            <h3>Thank You</h3>
                            <p>We've received your details and will be in touch as gathering information is confirmed.</p>
                        </div>
                    <?php else: ?>

                        <?php if (!empty($ifopabFormErrors['_general'])): ?>
                        <div class="join-form-alert" role="alert">
                            <?= htmlspecialchars($ifopabFormErrors['_general']) ?>
                        </div>
                        <?php endif; ?>

                        <form method="post" action="join.php#join" class="join-form">
                            <!-- Honeypot: hidden from real visitors via CSS, left blank by them; bots that fill every field trip it. -->
                            <div class="join-form-honeypot" aria-hidden="true">
                                <label for="join-website">Website</label>
                                <input type="text" id="join-website" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="join-form-row">
                                <div class="join-form-group">
                                    <label for="join-full-name">Full Name <span class="join-required">*</span></label>
                                    <input
                                        type="text"
                                        id="join-full-name"
                                        name="full_name"
                                        placeholder="e.g. John Adeyemi"
                                        value="<?= htmlspecialchars($ifopabFormValues['full_name']) ?>"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabFormErrors['full_name']) ? 'aria-invalid="true" aria-describedby="join-full-name-error"' : '' ?>
                                    >
                                    <?php if (isset($ifopabFormErrors['full_name'])): ?>
                                    <span class="join-form-error" id="join-full-name-error"><?= htmlspecialchars($ifopabFormErrors['full_name']) ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="join-form-group">
                                    <label for="join-email">Email Address <span class="join-required">*</span></label>
                                    <input
                                        type="email"
                                        id="join-email"
                                        name="email"
                                        placeholder="e.g. john@yourchurch.org"
                                        value="<?= htmlspecialchars($ifopabFormValues['email']) ?>"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabFormErrors['email']) ? 'aria-invalid="true" aria-describedby="join-email-error"' : '' ?>
                                    >
                                    <?php if (isset($ifopabFormErrors['email'])): ?>
                                    <span class="join-form-error" id="join-email-error"><?= htmlspecialchars($ifopabFormErrors['email']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="join-form-row">
                                <div class="join-form-group">
                                    <label for="join-phone">Phone Number</label>
                                    <input
                                        type="tel"
                                        id="join-phone"
                                        name="phone"
                                        placeholder="e.g. +1 720 859 1737"
                                        value="<?= htmlspecialchars($ifopabFormValues['phone']) ?>"
                                    >
                                </div>

                                <div class="join-form-group">
                                    <label for="join-role">I Am A... <span class="join-required">*</span></label>
                                    <select
                                        id="join-role"
                                        name="role"
                                        required
                                        aria-required="true"
                                        <?= isset($ifopabFormErrors['role']) ? 'aria-invalid="true" aria-describedby="join-role-error"' : '' ?>
                                    >
                                        <option value="" disabled <?= $ifopabFormValues['role'] === '' ? 'selected' : '' ?>>Select one</option>
                                        <?php foreach ($ifopabRoles as $roleOption): ?>
                                        <option value="<?= htmlspecialchars($roleOption) ?>" <?= $ifopabFormValues['role'] === $roleOption ? 'selected' : '' ?>><?= htmlspecialchars($roleOption) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($ifopabFormErrors['role'])): ?>
                                    <span class="join-form-error" id="join-role-error"><?= htmlspecialchars($ifopabFormErrors['role']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="join-form-row">
                                <div class="join-form-group">
                                    <label for="join-organization">Church / Ministry / Organization</label>
                                    <input
                                        type="text"
                                        id="join-organization"
                                        name="organization"
                                        placeholder="e.g. Grace Fellowship Church"
                                        value="<?= htmlspecialchars($ifopabFormValues['organization']) ?>"
                                    >
                                </div>

                                <div class="join-form-group">
                                    <label for="join-country">Country</label>
                                    <input
                                        type="text"
                                        id="join-country"
                                        name="country"
                                        placeholder="e.g. Nigeria"
                                        value="<?= htmlspecialchars($ifopabFormValues['country']) ?>"
                                    >
                                </div>
                            </div>

                            <div class="join-form-group">
                                <label for="join-message">Anything You'd Like Us to Know</label>
                                <textarea
                                    id="join-message"
                                    name="message"
                                    rows="4"
                                    placeholder="Optional — questions, context, or anything else you'd like to share."
                                ><?= htmlspecialchars($ifopabFormValues['message']) ?></textarea>
                            </div>

                            <div class="join-form-consent">
                                <input
                                    type="checkbox"
                                    id="join-consent"
                                    name="consent"
                                    value="1"
                                    required
                                    aria-required="true"
                                    <?= isset($ifopabFormErrors['consent']) ? 'aria-invalid="true" aria-describedby="join-consent-error"' : '' ?>
                                >
                                <label for="join-consent">I agree to be contacted by IFOPAB regarding the inaugural gathering.</label>
                            </div>
                            <?php if (isset($ifopabFormErrors['consent'])): ?>
                            <span class="join-form-error" id="join-consent-error"><?= htmlspecialchars($ifopabFormErrors['consent']) ?></span>
                            <?php endif; ?>

                            <button type="submit" class="theme-btn-one join-form-submit">Send My Details</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- join-section end -->
