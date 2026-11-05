Batool's ExamMate — Fully Offline HTML / CSS / JavaScript / PHP package

This package is self-contained and does not require internet access, Google Fonts, a CDN, Manus storage, or external runtime files.

Files
- index.html: static website entry point
- index.php: PHP-compatible entry point
- assets/style.css: local compiled stylesheet using system fonts
- assets/app.js: local compiled JavaScript application
- assets/pdf.worker.mjs: local PDF worker
- assets/batools-exammate-logo.png: local logo image

Deployment
1. Extract this folder.
2. Upload index.php, index.html, and the complete assets folder to public_html.
3. Open your domain. PHP hosting uses index.php; static hosting uses index.html.
4. The browser-based demo, local material reading, paper generation, practice, scoring, and local result history work without an internet connection.

Note
The fully offline export uses the browser/local fallback generation path. The original editable source ZIP contains the optional server-side AI integration, which requires a server and model/API configuration and is not part of this offline-only package.
