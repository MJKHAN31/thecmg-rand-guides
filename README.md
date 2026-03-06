# The CMG Brand Guide System

A zero-maintenance system for publishing client brand guides. This repository hosts all client brand guides as simple, self-contained HTML files.

## 🚀 How to Add a New Client Brand Guide

Follow these steps to publish a new guide for a client.

### Step 1: Prepare the Files
1.  Receive the `client-brand.html` file from the design team.
2.  Create a new folder in this repository.
    *   **Naming Rule**: Use the client's name in lowercase, with hyphens instead of spaces.
    *   *Example*: For "Valley Spring", name the folder `valley-spring`.
    *   *Example*: For "Next Client", name the folder `next-client`.

### Step 2: Add the Guide
1.  Place the HTML file inside the new folder.
2.  **Rename the file** to `index.html`.
    *   *Correct*: `valley-spring/index.html`
    *   *Incorrect*: `valley-spring/brand-guide.html`

### Step 3: Publish
1.  Commit and push the changes to GitHub.
    ```bash
    git add .
    git commit -m "Add brand guide for [Client Name]"
    git push origin master
    ```
2.  Wait ~60 seconds for GitHub to deploy.

### Step 4: Share the Link
The brand guide will be live at:
`https://brand.thecmg.co/[folder-name]`

*Example*: `https://brand.thecmg.co/valley-spring`

---

## 🔒 Important: Private vs. Public Repository

**If you make this repository Private:**

*   **Free GitHub Plan**: GitHub Pages will **STOP working**. Your brand guides will go offline (404 error).
*   **GitHub Pro / Team Plan**: You can keep the repository private, but you must enable GitHub Pages in the settings. You can choose to make the site public (anyone with the link can view) or private (only logged-in team members can view).

**Recommendation**: Keep this repository **Public** unless you have a paid GitHub plan and require strict access control.

---

## 🛠 Technical Setup (One-Time)

### Directory Structure
```
repository-root/
├── index.html          (Main landing page)
├── .nojekyll           (Bypasses Jekyll build process)
├── CNAME               (Custom domain config)
├── valley-spring/      (Client Folder)
│   └── index.html      (Brand Guide)
└── next-client/        (Client Folder)
    └── index.html      (Brand Guide)
```

### DNS Configuration
To make `brand.thecmg.co` work, the following DNS record is required at your domain registrar:

*   **Type**: `CNAME`
*   **Host**: `brand`
*   **Value**: `MJKHAN31.github.io`
