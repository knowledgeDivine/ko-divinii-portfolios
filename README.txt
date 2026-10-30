K.O DIVINII — PREMIUM PORTFOLIO (XAMPP / VS CODE)

WHAT'S INCLUDED
- Premium responsive portfolio homepage
- Works / project archive and individual project pages
- Skills section
- CV page with Print / Save as PDF
- PHP + MySQL admin dashboard to add/edit projects and skills and update profile
- projects/ folder for your existing website folders
- database.sql

INSTALL
1. Install and open XAMPP. Start Apache and MySQL.
2. Extract this folder into: C:\xampp\htdocs\
   The final path should be C:\xampp\htdocs\KO_DIVINII_PREMIUM_PORTFOLIO\
3. Open http://localhost/phpmyadmin
4. Click Import, choose database.sql from this folder, and click Import/Go.
   Database name: ko_divinii_portfolio_v2
5. If your MySQL username/password is not root / blank, edit includes/db.php.
6. Open http://localhost/KO_DIVINII_PREMIUM_PORTFOLIO/

ADMIN
Open: http://localhost/KO_DIVINII_PREMIUM_PORTFOLIO/admin/login.php
Username: admin
Password: KODivinii@2026
Change this password before publishing online. For a public deployment, use a unique strong password and HTTPS.

ADD YOUR EXISTING WEBSITE FOLDERS
1. Copy each complete website folder into the included projects/ directory.
   Example: projects/amora/index.php
2. In Admin > Add project, fill in the project details.
3. Set Website folder path to: projects/amora/
4. Set a cover image path if desired, e.g. assets/images/amora-cover.jpg
5. Make sure the website's main page is named index.php or index.html.
The portfolio links directly to the website folder. Each project can also have a separate live URL.

ADD YOUR CV
The CV page is editable via Admin > Profile / CV and pulls experience and skills from the database.
You can use the browser's Print / Save as PDF function to export a CV PDF. Add real work history and contact details before publishing.

VS CODE
Open this folder in VS Code. Edit assets/css/style.css for design, index.php for homepage layout, and add project folders inside projects/.

IMPORTANT
- The SQL does not contain your real CV, personal contact information, photo, or work history. Update the sample details in Admin.
- Use HTTPS and change the default admin password before hosting publicly.
- This starter uses PHP 8+ and MySQL/MariaDB.


PROJECTS TRANSFERRED FROM YOUR PREVIOUS PORTFOLIO
- BYI Cars
- K.O Gaming
- MIMI Homes
- Not An Ordinary Mind
- K.O DIVINII VIP Golf Club
- AMORA Clothing
- A.O.K Energy
- Ordinar Fintech
- Not An Ordinary Mind — Art Premium

These nine complete project folders are already copied into /projects and their entries are seeded in database.sql. Import the updated database.sql into the new database to display them in the new portfolio. The CV document remains excluded, as previously requested.


VERCEL DEPLOYMENT NOTES
- This folder now includes vercel.json and a PHP catch-all using the community PHP runtime vercel-php@0.9.0.
- Vercel does not provide your local XAMPP MySQL database. You must create a remote MySQL database with a provider that permits external connections, import database.sql, and configure PORTFOLIO_DB_HOST, PORTFOLIO_DB_PORT, PORTFOLIO_DB_NAME, PORTFOLIO_DB_USER, PORTFOLIO_DB_PASS in Vercel.
- Do not commit real database passwords or .env files to GitHub.
- Vercel function filesystems are not persistent storage. Any upload feature must use external object storage; session-dependent admin features should be tested on Vercel before relying on them.
- The nine imported project folders include separate PHP/MySQL apps. Their individual database configs still point to local XAMPP databases and each app needs its own database migration/environment configuration before its dynamic features work online. The portfolio links and static assets can deploy, but do not assume each app's login/forms/database features are production-ready.
- PHP is provided by the community runtime. Runtime docs: https://github.com/vercel-community/php
