<?php
// Muhiuddin92 Technologies portfolio.
// Update the contact details in this file before publishing.
$siteName = "Muhiuddin92 Technologies";
$email = "hello@muhiuddin92.com"; // Replace with your real business email.
$whatsapp = ""; // Add country code and number, e.g. 923001234567.
$phoneDisplay = ""; // Optional display number.
$location = "Chiniot, Punjab, Pakistan";
$sent = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["contact_submit"])) {
    $name = trim($_POST["name"] ?? "");
    $senderEmail = filter_var(trim($_POST["email"] ?? ""), FILTER_VALIDATE_EMAIL);
    $service = trim($_POST["service"] ?? "");
    $message = trim($_POST["message"] ?? "");
    if ($name === "" || !$senderEmail || $message === "") {
        $error = "Please enter your name, a valid email address, and a project message.";
    } elseif ($email === "hello@muhiuddin92.com") {
        $error = "Please configure the business email address in index.php before using the contact form.";
    } else {
        $subject = "Portfolio inquiry: " . ($service ?: "New project");
        $body = "Name: {$name}\nEmail: {$senderEmail}\nService: {$service}\n\nMessage:\n{$message}";
        $headers = "From: " . $email . "\r\nReply-To: " . $senderEmail;
        if (mail($email, $subject, $body, $headers)) $sent = true;
        else $error = "Your message could not be sent. Please use the email or WhatsApp link instead.";
    }
}
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8"); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#081426">
  <meta name="description" content="Muhiuddin92 Technologies builds custom PHP and MySQL web applications, educational management systems, finance tools, dashboards and Excel automation.">
  <title>Muhiuddin92 Technologies | Custom Web Applications</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="#home" aria-label="Muhiuddin92 Technologies home">
    <span class="brand-mark">M<span>92</span></span>
    <span class="brand-name">MUHIUDDIN92 <small>TECHNOLOGIES</small></span>
  </a>
  <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false"><span></span><span></span></button>
  <nav class="nav">
    <a href="#about">About</a><a href="#services">Services</a><a href="#work">Projects</a><a href="#experience">Experience</a><a href="#contact" class="nav-cta">Let's talk <b>↗</b></a>
  </nav>
</header>

<main>
<section class="hero section-wrap" id="home">
  <div class="hero-copy">
    <div class="eyebrow"><span class="pulse"></span> INDEPENDENT DEVELOPER & DIGITAL SOLUTIONS</div>
    <h1>Building practical<br>software for <em>real work.</em></h1>
    <p class="hero-lead">I design and develop custom web applications that simplify operations, organize information and help teams work smarter.</p>
    <div class="hero-actions">
      <a class="btn btn-gold" href="#work">Explore my work <span>↗</span></a>
      <a class="text-link" href="#contact">Discuss a project <span>↗</span></a>
    </div>
    <div class="hero-meta"><span>BASED IN <?=e($location)?></span><span>AVAILABLE FOR SELECT PROJECTS</span></div>
  </div>
  <div class="hero-visual">
    <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
    <div class="code-card">
      <div class="code-top"><span class="dots">● ● ●</span><span>solution.php</span><span>•••</span></div>
      <div class="code-body">
        <div><i>01</i><span class="code-purple">&lt;?php</span></div>
        <div><i>02</i><span class="code-blue">$solution</span> = <span class="code-gold">"Your idea"</span>;</div>
        <div><i>03</i><span class="code-blue">$stack</span> = [</div>
        <div><i>04</i>&nbsp;&nbsp;<span class="code-green">'PHP'</span>, <span class="code-green">'MySQL'</span>,</div>
        <div><i>05</i>&nbsp;&nbsp;<span class="code-green">'JavaScript'</span></div>
        <div><i>06</i>];</div>
        <div><i>07</i><span class="code-purple">build</span>(<span class="code-blue">$solution</span>);</div>
        <div><i>08</i><span class="code-purple">?&gt;</span></div>
      </div>
      <div class="code-footer"><span><b></b> SYSTEM READY</span><span>MUHIUDDIN92 / 2026</span></div>
    </div>
    <div class="floating-tag tag-one"><span>✳</span> PHP + MySQL</div>
    <div class="floating-tag tag-two"><span>↗</span> From idea to launch</div>
    <div class="hero-stamp">M92<br><small>BUILD WITH PURPOSE</small></div>
  </div>
  <div class="hero-bottom"><span>SCROLL TO EXPLORE</span><span class="scroll-line"></span><span>01 / 05</span></div>
</section>

<section class="ticker" aria-label="Technology stack"><div class="ticker-track"><span>PHP DEVELOPMENT</span><b>✳</b><span>MYSQL DATABASES</span><b>✳</b><span>WEB APPLICATIONS</span><b>✳</b><span>EXCEL AUTOMATION</span><b>✳</b><span>EDTECH SOLUTIONS</span><b>✳</b><span>PHP DEVELOPMENT</span><b>✳</b><span>MYSQL DATABASES</span><b>✳</b></div></section>

<section class="section section-wrap about" id="about">
  <div class="section-kicker">01 — ABOUT</div>
  <div class="about-grid">
    <div><h2>Technology should<br>make work <em>simpler.</em></h2></div>
    <div class="about-copy">
      <p class="large-copy">I’m Ghulam Muhiuddin, a technology professional and application developer focused on building useful digital systems for education and business.</p>
      <p>My work combines hands-on institutional experience with practical software development. Having worked across academic coordination, examinations, HR and campus administration, I understand the day-to-day problems that well-designed systems should solve.</p>
      <a class="under-link" href="#contact">Let's work together <span>↗</span></a>
    </div>
  </div>
  <div class="stats-row">
    <div><strong>2014</strong><span>Career journey began</span></div>
    <div><strong>PHP <i>+</i> SQL</strong><span>Core development stack</span></div>
    <div><strong>01 : 01</strong><span>Direct collaboration</span></div>
    <div><strong>PK <i>↗</i> Global</strong><span>Client reach</span></div>
  </div>
</section>

<section class="section services-section" id="services">
 <div class="section-wrap">
  <div class="section-kicker">02 — WHAT I DO</div>
  <div class="section-heading"><h2>Solutions built around<br><em>your workflow.</em></h2><p>Purpose-built systems, clear interfaces and maintainable code — shaped around the way your organization actually works.</p></div>
  <div class="service-grid">
    <article class="service-card"><span class="service-no">01</span><div class="service-icon">⌘</div><h3>Custom Web Applications</h3><p>Role-based portals, admin panels and tailored web systems developed around your requirements.</p><div class="tags"><span>PHP</span><span>MySQL</span><span>JavaScript</span></div></article>
    <article class="service-card"><span class="service-no">02</span><div class="service-icon">▤</div><h3>Education Management</h3><p>Student records, assessments, attendance, fee workflows and academic reporting systems.</p><div class="tags"><span>Student Portals</span><span>Reports</span></div></article>
    <article class="service-card"><span class="service-no">03</span><div class="service-icon">◫</div><h3>Finance & Inventory</h3><p>Practical tools for income, expenses, stock, purchases, sales, payroll and operational control.</p><div class="tags"><span>Finance</span><span>Inventory</span></div></article>
    <article class="service-card"><span class="service-no">04</span><div class="service-icon">▥</div><h3>Excel Automation & Dashboards</h3><p>Structured workbooks, automated calculations, management dashboards and printable reports.</p><div class="tags"><span>Excel</span><span>Automation</span></div></article>
    <article class="service-card"><span class="service-no">05</span><div class="service-icon">◉</div><h3>Database & Reporting</h3><p>Relational database design, data organization, searchable records and decision-ready reporting.</p><div class="tags"><span>MySQL</span><span>SQL</span></div></article>
    <article class="service-card"><span class="service-no">06</span><div class="service-icon">↻</div><h3>Maintenance & Support</h3><p>Bug fixing, feature improvements, backups, deployment assistance and ongoing maintenance.</p><div class="tags"><span>Support</span><span>Optimization</span></div></article>
  </div>
 </div>
</section>

<section class="section section-wrap work-section" id="work">
 <div class="section-kicker">03 — SELECTED WORK</div>
 <div class="section-heading"><h2>Ideas translated<br>into <em>digital tools.</em></h2><p>A selection of application concepts and development work aligned with real operational needs.</p></div>
 <div class="work-list">
  <article class="work-item">
   <div class="work-art art-blue"><div class="mock-window"><div class="mock-bar"></div><div class="mock-layout"><div class="mock-side"></div><div class="mock-content"><b></b><b></b><div class="mock-cards"><i></i><i></i><i></i></div><div class="mock-table"></div></div></div></div><span class="art-label">EDUCATION / 01</span></div>
   <div class="work-info"><div class="work-type">EDUCATION TECHNOLOGY</div><h3>Student File & Resource Portal</h3><p>A centralized portal concept for students to search and download learning resources, with a secure administrator upload dashboard.</p><div class="tags"><span>PHP</span><span>MySQL</span><span>PDF Management</span></div><span class="work-status">DEVELOPMENT CONCEPT</span></div>
  </article>
  <article class="work-item reverse">
   <div class="work-art art-gold"><div class="finance-ui"><div class="finance-title">Monthly overview <small>↗</small></div><div class="finance-number">Rs. 248,500</div><div class="finance-caption">Illustrative balance</div><div class="bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></div><span class="art-label">BUSINESS / 02</span></div>
   <div class="work-info"><div class="work-type">FINANCE & ADMINISTRATION</div><h3>College Finance Management</h3><p>A bookkeeping system concept for income, expenses, salary slips, custom account heads and printable financial reports.</p><div class="tags"><span>PHP</span><span>MySQL</span><span>Reporting</span></div><span class="work-status">PROJECT CONCEPT</span></div>
  </article>
  <article class="work-item">
   <div class="work-art art-purple"><div class="phone-ui"><div class="phone-notch"></div><div class="phone-head">Late Arrival Register</div><div class="phone-line"></div><div class="phone-row"><i></i><b></b></div><div class="phone-row"><i></i><b></b></div><div class="phone-row"><i></i><b></b></div><div class="phone-action">Record arrival +</div></div><span class="art-label">CAMPUS OPERATIONS / 03</span></div>
   <div class="work-info"><div class="work-type">CAMPUS OPERATIONS</div><h3>Late Arrival Register</h3><p>A student arrival tracking concept with master records, roll-number lookup, parent contact logs and exportable reports.</p><div class="tags"><span>PHP</span><span>MySQL</span><span>Excel / PDF</span></div><span class="work-status">PROJECT CONCEPT</span></div>
  </article>
  <article class="work-item reverse">
   <div class="work-art art-green"><div class="store-ui"><div class="store-head">MEDICINE INVENTORY <span>•••</span></div><div class="store-metrics"><i><b>128</b><small>Products</small></i><i><b>09</b><small>Low stock</small></i></div><div class="store-row"><b></b><span></span><small>In stock</small></div><div class="store-row"><b></b><span></span><small>Expiry alert</small></div><div class="store-row"><b></b><span></span><small>Sales</small></div></div><span class="art-label">INVENTORY / 04</span></div>
   <div class="work-info"><div class="work-type">INVENTORY MANAGEMENT</div><h3>Medicine Store System</h3><p>A pharmacy management concept covering purchases, sales, stock levels and advance alerts for near-expiry medicines.</p><div class="tags"><span>PHP</span><span>MySQL</span><span>Stock Control</span></div><span class="work-status">PROJECT CONCEPT</span></div>
  </article>
 </div>
 <div class="more-projects"><span>MORE EXPERIMENTS & TOOLS</span><p><b>Muhiuddin92FamilyAcc</b> — family account tracking · <b>Mpy</b> — browser-based Python learning tool · <b>Messenger</b> — registered-user communication concept</p></div>
</section>

<section class="section experience-section" id="experience">
 <div class="section-wrap">
  <div class="section-kicker">04 — EXPERIENCE</div>
  <div class="section-heading"><h2>Experience beyond<br>the <em>editor.</em></h2><p>Operational experience informs the systems I plan and build — from user workflows to reporting and administration.</p></div>
  <div class="timeline">
   <div class="timeline-date">AUG 2014 — PRESENT</div>
   <div class="timeline-content"><div class="timeline-top"><h3>Superior Group of Colleges</h3><span>EDUCATION SECTOR</span></div><h4>Academic & Campus Administration</h4><p>Progressive responsibilities across academic coordination, examination control, human resources and institutional administration.</p><ul><li>Class coordination and academic operations</li><li>Examination planning, records and result processes</li><li>HR coordination and staff administration</li><li>Vice-principal responsibilities and campus-level management</li></ul></div>
  </div>
  <div class="timeline">
   <div class="timeline-date">ONGOING</div>
   <div class="timeline-content"><div class="timeline-top"><h3>Muhiuddin92 Technologies</h3><span>INDEPENDENT INITIATIVE</span></div><h4>Web Development & Digital Solutions</h4><p>Developing practical software concepts and offering technology services in custom web applications, database-driven systems and workflow automation.</p></div>
  </div>
  <div class="skills-block"><div><div class="section-kicker">TECHNICAL TOOLKIT</div><h3>Tools I work with</h3></div><div class="skill-cloud"><span>PHP</span><span>MySQL</span><span>HTML5</span><span>CSS3</span><span>JavaScript</span><span>Bootstrap</span><span>Excel</span><span>SQL</span><span>CRUD Applications</span><span>cPanel</span><span>Database Design</span><span>Reporting</span></div></div>
 </div>
</section>

<section class="contact-section" id="contact">
 <div class="section-wrap contact-wrap">
  <div class="section-kicker">05 — GET IN TOUCH</div>
  <div class="contact-grid">
   <div><h2>Have a workflow<br>to improve? <em>Let's build.</em></h2><p>Tell me what you are trying to achieve. We can discuss the requirements, a practical approach and the next steps.</p><div class="contact-direct"><span>BUSINESS / PROJECT INQUIRIES</span><a href="mailto:<?=e($email)?>"><?=e($email)?></a><small><?=e($location)?></small></div></div>
   <div class="form-panel">
    <?php if ($sent): ?><div class="form-alert success">Thank you. Your message has been sent.</div><?php endif; ?>
    <?php if ($error): ?><div class="form-alert"><?=e($error)?></div><?php endif; ?>
    <form method="post" action="#contact">
     <label>Your name<input name="name" required placeholder="Name"></label>
     <label>Email address<input name="email" type="email" required placeholder="you@example.com"></label>
     <label>What do you need?<select name="service"><option value="">Select a service</option><option>Custom web application</option><option>Education management system</option><option>Finance or inventory system</option><option>Excel automation</option><option>Maintenance and support</option><option>Other</option></select></label>
     <label>Project details<textarea name="message" rows="4" required placeholder="A short description of your project..."></textarea></label>
     <button class="btn btn-gold submit-btn" type="submit" name="contact_submit">Send inquiry <span>↗</span></button>
    </form>
   </div>
  </div>
 </div>
</section>
</main>
<footer class="footer">
 <div class="section-wrap footer-top"><a class="brand" href="#home"><span class="brand-mark">M<span>92</span></span><span class="brand-name">MUHIUDDIN92 <small>TECHNOLOGIES</small></span></a><span>BUILD WITH PURPOSE. DELIVER WITH CLARITY.</span><a href="#home">BACK TO TOP ↑</a></div>
 <div class="section-wrap footer-bottom"><span>© <?=date("Y")?> Muhiuddin92 Technologies. All rights reserved.</span><span>PHP · MYSQL · WEB APPLICATIONS</span></div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
