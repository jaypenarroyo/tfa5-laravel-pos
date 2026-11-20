# Upload the Laravel POS Project to GitHub Using VS Code

## Before you begin

Install [Git](https://git-scm.com/downloads) and [Visual Studio Code](https://code.visualstudio.com/), and create a [GitHub account](https://github.com/). Do not upload `.env`, `vendor`, or `node_modules`; the included `.gitignore` protects these files.

## Method 1 Use VS Code Source Control

1. Extract the project ZIP to a normal folder such as `Documents/tfa5-laravel-pos`.
2. Open VS Code.
3. Select **File > Open Folder**, choose `tfa5-laravel-pos`, and click **Select Folder**.
4. Open **Terminal > New Terminal** and run `composer install` if the `vendor` folder is not present.
5. In the left Activity Bar, click the **Source Control** icon. It looks like a branching graph.
6. Click **Initialize Repository**. VS Code creates a local Git repository.
7. Review the files under **Changes**. Confirm that `.env`, `vendor`, and `node_modules` are not listed.
8. In the message box above the Changes list, type `Initial commit for TFA5 Laravel POS`.
9. Click **Commit**. If VS Code asks whether to stage all changes, select **Yes**.
10. Click **Publish Branch** or **Publish to GitHub**.
11. Sign in to GitHub when VS Code opens the browser authorization page.
12. Enter a repository name such as `tfa5-laravel-pos`.
13. Choose **Public repository** if your instructor must open the link without being invited. Choose **Private repository** only if required, then add the instructor as a collaborator.
14. Wait for VS Code to finish publishing.
15. Click **Open on GitHub** and copy the repository URL from the browser. This is the GitHub link to submit.

## Method 2 Use the VS Code terminal

Use this method if **Publish Branch** does not appear.

1. On GitHub, click **New repository**.
2. Name it `tfa5-laravel-pos` and choose Public or Private.
3. Do not add a README, `.gitignore`, or license because the project already contains its own files.
4. Click **Create repository**.
5. Copy the HTTPS repository URL, for example `https://github.com/YOUR-USERNAME/tfa5-laravel-pos.git`.
6. Return to VS Code and open **Terminal > New Terminal**.
7. Run these commands one at a time:

   ```bash
   git init
   git add .
   git status
   git commit -m "Initial commit for TFA5 Laravel POS"
   git branch -M main
   git remote add origin https://github.com/YOUR-USERNAME/tfa5-laravel-pos.git
   git push -u origin main
   ```

8. Replace `YOUR-USERNAME` with your GitHub username before running the `git remote add origin` command.
9. If GitHub asks you to sign in, complete the browser sign-in. GitHub no longer accepts an account password for command-line pushes; use the browser flow or a personal access token.
10. Refresh the GitHub repository page and confirm that `app`, `resources`, `routes`, `database`, `tests`, `composer.json`, and `README.md` are visible.

## Update GitHub after making changes

In VS Code Source Control, stage the changed files, enter a short message, click **Commit**, and click **Sync Changes**. You can also use:

```bash
git add .
git commit -m "Describe the changes"
git push
```

## Final submission checklist

- All four URLs work locally: `/`, `/about`, `/customers`, and `/users`.
- Customer and user pages each show at least five records.
- `README.md`, migrations, seeders, and tests are included.
- `.env`, `vendor`, and `node_modules` are not on GitHub.
- The repository visibility lets the instructor open the link.
- The GitHub repository URL is copied for submission.
- A separate hosted application link is prepared if the instructor requires one. GitHub stores the source code, but GitHub Pages cannot run a Laravel/PHP application; use a Laravel-capable host for the live app.
