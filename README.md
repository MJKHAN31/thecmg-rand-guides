# The CMG Brand Guide System

A zero-maintenance system for publishing client brand guides.

## How to Add a New Client Brand Guide

1.  **Get the File**: Receive the `client-brand.html` file from the design team.
2.  **Create Folder**: Create a new folder in this repository with the client's name (lowercase, hyphens instead of spaces).
    *   Example: For "Next Client", create a folder named `next-client`.
3.  **Rename & Move**: Rename the HTML file to `index.html` and place it inside the new folder.
4.  **Publish**: Commit and push the changes to GitHub.

### Example Structure

```
repository-root/
├── index.html          (Main landing page)
├── valley-spring/      (Client Folder)
│   └── index.html      (Brand Guide)
├── next-client/        (Client Folder)
│   └── index.html      (Brand Guide)
└── CNAME               (Custom domain config)
```

## URL Access

Once pushed, the brand guide will be live at:
`https://brand.thecmg.co/client-folder-name`

Example: `https://brand.thecmg.co/valley-spring`

## Initial Setup (One-Time)

To make `brand.thecmg.co` work, you must configure your domain's DNS settings:

1.  **Go to your Domain Registrar** (e.g., GoDaddy, Namecheap, Google Domains).
2.  **Add a CNAME Record**:
    *   **Type**: `CNAME`
    *   **Name/Host**: `brand`
    *   **Value/Target**: `MJKHAN31.github.io`
    *   **TTL**: Automatic or 1 hour

Wait up to 24 hours for DNS changes to propagate.
