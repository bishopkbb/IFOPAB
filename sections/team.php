<?php
/*
    Names, titles, and organizational structure are approved brand
    material — extracted directly from the leadership business-card
    layouts in docs/ifopab brand.pdf (pages 31-35), not invented.
    Photos were supplied directly by the client (assets/images/team/,
    moved there from a folder they placed at the project root) and
    matched to each person by the filenames they were saved under —
    not sourced or guessed at, per docs/07 section 62. Titilayo
    Famuyiwa has no supplied photo, so she keeps the monogram-avatar
    treatment everyone used before photos existed. Two extra action/
    speaking shots of the same two people (Israel Ajala, Vincent
    Ibhaze) weren't used here — the front-facing portraits read better
    at this small circular size — but found a home instead as the hero
    banner's speaker photos (assets/images/banner/banner-speaker-1/2.png,
    see sections/hero.php), so they were moved there rather than left
    duplicated in this folder unused.

    israel-ajala.jpeg (the client-supplied original) had a transparency
    checkerboard pattern baked permanently into its pixels — the source
    file had a transparent background but was exported/flattened to
    JPEG, which can't hold an alpha channel, so the editor's "no
    background" checker preview became real pixel data. Detected the
    checker squares by their exact ~26px repeat period (real fabric/
    skin never alternates between two fixed brightness bands on a
    strict grid), made those pixels transparent, then flattened onto
    the card's own surface colour (--ifopab-surface) and re-exported as
    israel-ajala-clean.jpg so it blends into the avatar circle with no
    alpha needed. mottley-lyndon.jpeg is a normal flattened JPEG with a
    genuine solid white background, not a masked checker.

    abiola-idowu.png and steven-andrews.png separately had a soft grey-
    blue halo ringing the subject in the circular avatar — a different
    defect, common to background-removal cutouts: their semi-
    transparent edge pixels were colour-contaminated by a blue-toned
    original backdrop (measured — their edge pixels averaged RGB
    ~(55,67,98) and ~(84,84,114), visibly blue, versus ~(30-40) neutral
    dark for every other photo's edges), so the light card background
    showed through those pixels as a blue-grey fringe instead of a
    clean line. Fixed by binarizing alpha at a threshold that discards
    the contaminated fringe, eroding 2px further in to catch any bleed
    just inside that threshold too, then re-feathering a fresh 1px
    blur on the now-clean silhouette so the edge stays soft rather than
    a hard cutout. The other 5 photos were checked and their edge
    pixels are neutral/dark, no contamination to remove.

    Cards flip on hover to a gold back face. Members without a supplied
    bio show an honest "coming soon" note, the same content-state
    pattern already used for the section itself before this content
    existed. Members WITH a bio (the Founder and Apostle Eugene Ogu)
    show a short teaser drawn from their own bio's first sentence, plus
    a "Read Full Bio" button that opens the full text in a modal —
    cards stay the same compact size as everyone else's rather than
    growing to fit the longest bio. The Founder card isn't part of the
    $ifopabCouncil array (it's a standalone section above the grid), so
    its slug/teaser are computed the same way just below rather than by
    the loop, and the modal-rendering loop further down reads from
    array_merge([$ifopabFounder], $ifopabCouncil) instead of
    $ifopabCouncil alone so the Founder's modal still gets rendered.

    Titilayo Famuyiwa (Executive Secretary) sits first in the council
    grid rather than in her own standalone card above, so the section
    holds 8 people — an even 4-per-row across two rows instead of a
    7-card grid ending in a lonely 4th row.

    Both the Founder's and Apostle Eugene Ogu's bios were supplied
    directly by the client in conversation — real approved biographies,
    not researched or guessed at. Text is reproduced as supplied, with
    only stylistic normalization (a stray space before a comma in the
    Founder's bio; em dashes/curly quotes swapped for plain punctuation
    in Eugene's, on request) — no wording changes. The Founder's front-
    facing name stays "Bishop Israel Ade Ajala" (no hyphen), matching
    the brand PDF business-card spelling this file already sources
    names from, even though the bio was pasted in chat as "Ade-Ajala".
    Eugene's "Member in Council" front-face role is his title within
    IFOPAB specifically — distinct from, and not replaced by, his own
    ministry's title (Founder/Senior Pastor of ALEM), which appears in
    the bio text itself.
*/
$ifopabEugeneBio = [
    "Apostle Eugene Egwuatu Ogu is the Founder and Senior Pastor of Abundant Life Evangel Mission (ALEM), headquartered in Port Harcourt, Nigeria. A true servant of God and respected voice in the Christian community, he is widely known for his passionate leadership, deep teaching of the Word, and unwavering commitment to truth and righteousness.",
    "For decades, Apostle Ogu has been a beacon of hope, impacting lives through ministry, mentorship, and humanitarian service. Through his NGO, Arm of Hope Foundation, he has extended care to widows, orphans, and displaced families, offering education, healthcare, and relief support to many across Nigeria. His ministry stands firmly on the vision: \"Except We Care, The People Perish.\"",
    "Apostle Ogu has also served in several national and international Christian bodies, including the Pentecostal Fellowship of Nigeria (PFN) and the Christian Association of Nigeria (CAN), making remarkable contributions to the growth of the Church.",
    "He is a teacher, song minister, and a fearless voice for the Gospel, renowned for his humility, boldness, and compassion.",
];

$ifopabIsraelBio = [
    "Bishop Israel Ade Ajala is a visionary leader with an insightful awareness of what people need to succeed and what he can do to empower them for success.",
    "Bishop Israel Ade Ajala was born in Nigeria, West Africa. He is a graduate of Economics from Obafemi Awolowo University, Ile-Ife Nigeria. After completing his university education, Bishop Ade Ajala went to Ghana as a missionary and served under Youth With A Mission, Tema Ghana.",
    "He later joined Mercy Ships, a missionary that travels around the developing world and provides medical assistance and the gospel of Jesus Christ to the poor.",
    "As a prolific and articulate teacher of the word of God, Bishop Israel has travelled to over 60 countries in all the continents of the world, preaching the gospel of the kingdom of God, planting churches and empowering local church leaders through his dynamic and insightful leadership training seminars.",
];

$ifopabFounder = [
    'name' => 'Bishop Israel Ade Ajala',
    'initials' => 'IA',
    'role' => 'Founder',
    'photo' => 'assets/images/team/israel-ajala-clean.jpg',
    'bio' => $ifopabIsraelBio,
];

if (!empty($ifopabFounder['bio'])) {
    $ifopabFounder['slug'] = 'bio-' . preg_replace('/[^a-z0-9]+/', '-', strtolower($ifopabFounder['name']));
    $ifopabFounder['teaser'] = preg_split('/(?<=[.?!])\s+/', $ifopabFounder['bio'][0], 2)[0];
}

$ifopabCouncil = [
    ['name' => 'Titilayo Famuyiwa', 'initials' => 'TF', 'role' => 'Executive Secretary'],
    ['name' => 'Bishop Abiola Idowu', 'initials' => 'AI', 'role' => 'Member in Council', 'photo' => 'assets/images/team/abiola-idowu.png'],
    ['name' => 'Apostle Steven Andrews', 'initials' => 'SA', 'role' => 'Member in Council', 'photo' => 'assets/images/team/steven-andrews.png'],
    ['name' => 'Bishop Melroy Meade', 'initials' => 'MM', 'role' => 'Member in Council', 'photo' => 'assets/images/team/melroy-meade.png'],
    ['name' => 'Bishop Mottley Lyndon', 'initials' => 'ML', 'role' => 'Member in Council', 'photo' => 'assets/images/team/mottley-lyndon.jpeg'],
    ['name' => 'Apostle Razafimampionona', 'initials' => 'R', 'role' => 'Member in Council', 'photo' => 'assets/images/team/razafimampionona.png'],
    ['name' => 'Apostle Vincent Ibhaze', 'initials' => 'VI', 'role' => 'Member in Council', 'photo' => 'assets/images/team/vincent-ibhaze.png'],
    ['name' => 'Apostle Eugene Egwuatu Ogu', 'initials' => 'EO', 'role' => 'Member in Council', 'photo' => 'assets/images/team/eugene-ogu.png', 'bio' => $ifopabEugeneBio],
];

foreach ($ifopabCouncil as $i => $member) {
    if (!empty($member['bio'])) {
        $ifopabCouncil[$i]['slug'] = 'bio-' . preg_replace('/[^a-z0-9]+/', '-', strtolower($member['name']));
        $ifopabCouncil[$i]['teaser'] = preg_split('/(?<=[.?!])\s+/', $member['bio'][0], 2)[0];
    }
}

/* Renders either a photo or initials inside the .team-avatar circle —
   used for the front face and the bio modal (the flip-back hides
   .team-avatar entirely, photo or not). */
function ifopab_team_avatar(array $person, string $extraClass = ''): void
{
    $class = trim('team-avatar ' . $extraClass);
    if (!empty($person['photo'])) {
        printf(
            '<div class="%s team-avatar-photo"><img src="%s" alt="%s"></div>',
            htmlspecialchars($class),
            htmlspecialchars($person['photo']),
            htmlspecialchars($person['name'])
        );
    } else {
        printf('<div class="%s">%s</div>', htmlspecialchars($class), htmlspecialchars($person['initials']));
    }
}
?>
<!-- team-leadership-section -->
<section class="team-leadership-section" id="team">
    <div class="auto-container">
        <div class="team-flip team-flip-founder wow fadeInUp" data-wow-delay="0ms">
            <div class="team-flip-inner">
                <div class="team-flip-front team-founder-card">
                    <?php ifopab_team_avatar($ifopabFounder, 'team-avatar-founder'); ?>
                    <span class="team-role">Founder</span>
                    <h2><?= htmlspecialchars($ifopabFounder['name']) ?></h2>
                </div>
                <div class="team-flip-back team-founder-card">
                    <span class="team-role">Founder</span>
                    <h2><?= htmlspecialchars($ifopabFounder['name']) ?></h2>
                    <p class="team-bio-teaser"><?= htmlspecialchars($ifopabFounder['teaser']) ?></p>
                    <button type="button" class="team-bio-expand" data-bio-target="<?= htmlspecialchars($ifopabFounder['slug']) ?>">
                        Read Full Bio <i class="fas fa-expand-alt" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-leadership-section end -->

<!-- team-council-section -->
<section class="team-council-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Members in Council</h2>
        </div>

        <div class="team-council-grid">
            <?php foreach ($ifopabCouncil as $i => $member): ?>
            <div class="team-council-col wow fadeInUp" data-wow-delay="<?= $i * 80 ?>ms">
                <div class="team-flip">
                    <div class="team-flip-inner">
                        <div class="team-flip-front team-council-card">
                            <?php ifopab_team_avatar($member); ?>
                            <h3><?= htmlspecialchars($member['name']) ?></h3>
                            <span class="team-role"><?= htmlspecialchars($member['role']) ?></span>
                        </div>
                        <div class="team-flip-back team-council-card">
                            <h3><?= htmlspecialchars($member['name']) ?></h3>
                            <span class="team-role"><?= htmlspecialchars($member['role']) ?></span>
                            <?php if (!empty($member['bio'])): ?>
                            <p class="team-bio-teaser"><?= htmlspecialchars($member['teaser']) ?></p>
                            <button type="button" class="team-bio-expand" data-bio-target="<?= htmlspecialchars($member['slug']) ?>">
                                Read Full Bio <i class="fas fa-expand-alt" aria-hidden="true"></i>
                            </button>
                            <?php else: ?>
                            <p>Full profile coming soon.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- team-council-section end -->

<?php foreach (array_merge([$ifopabFounder], $ifopabCouncil) as $member): ?>
<?php if (!empty($member['bio'])): ?>
<!-- Placed outside the flip card structure on purpose: .team-flip's
     3D transform context would otherwise re-anchor a position:fixed
     modal to the card instead of the viewport. -->
<div class="team-bio-modal" id="<?= htmlspecialchars($member['slug']) ?>" aria-hidden="true">
    <div class="team-bio-modal-overlay" data-bio-close></div>
    <div class="team-bio-modal-panel" role="dialog" aria-modal="true" aria-labelledby="<?= htmlspecialchars($member['slug']) ?>-title">
        <button type="button" class="team-bio-modal-close" data-bio-close aria-label="Close">
            <i class="fas fa-times" aria-hidden="true"></i>
        </button>
        <?php ifopab_team_avatar($member); ?>
        <span class="team-role"><?= htmlspecialchars($member['role']) ?></span>
        <h3 id="<?= htmlspecialchars($member['slug']) ?>-title"><?= htmlspecialchars($member['name']) ?></h3>
        <div class="team-bio">
            <?php foreach ($member['bio'] as $paragraph): ?>
            <p><?= htmlspecialchars($paragraph) ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; ?>
