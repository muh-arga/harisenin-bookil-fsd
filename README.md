# TaskKu — AI-Assisted Debugging Exercise (Session 1)

Mini project untuk **Harisenin BooKil - Full Stack Web Developer** (Agustus 2026).

This branch contains six common Laravel mistakes. The application is intentionally
broken. Your goal is to diagnose and repair it with help from an AI assistant—not
to ask AI to rewrite the whole project.

## Exercise Mission

Make these six behaviours work:

1. The create form is protected against cross-site request forgery.
2. A task can be created with a title and optional description.
3. The edit page displays the selected task.
4. A task's title and description can be updated.
5. A completed task can be changed back to incomplete.
6. A task can be deleted using the correct HTTP method.

Run the tests after every fix:

```bash
php artisan test --filter=TaskExerciseTest
```

Use this workflow for each failure:

1. Reproduce the problem in the browser or test suite.
2. Copy the exact error—not only the last line.
3. Ask AI to explain the error and identify likely files.
4. Ask for the smallest possible fix and why it works.
5. Review the proposed change before applying it.
6. Run the tests and manually verify the feature.

Example prompt:

```text
I am learning Laravel by debugging a small task manager.
When I [describe the action], I get this error: [paste exact error].
Relevant code: [paste the smallest relevant code].
Explain the root cause, suggest the smallest fix, and tell me how to verify it.
Do not rewrite unrelated files.
```

A simple to-do list application built with Laravel 12 + Bootstrap 5 + MySQL.
Designed for beginners and career switchers — easy to understand, easy to debug.

## Tech Stack

| Layer      | Technology           |
|------------|---------------------|
| Frontend   | Blade + Bootstrap 5 |
| Backend    | Laravel 12 (PHP 8.3)|
| Database   | MySQL               |

## Branches

| Branch       | Description                          |
|--------------|--------------------------------------|
| `session-1`  | Clean working version (for demo)     |
| `session-2`  | Broken version with 6 planted bugs   |

## Setup Instructions

### Prerequisites

- PHP 8.2+
- Composer
- MySQL 8.0+

### Installation

```bash
# 1. Clone the repo
git clone https://github.com/muh-arga/harisenin-bookil-fsd.git
cd harisenin-bookil-fsd

# 2. Switch to session-1 branch (clean version)
git checkout session-1

# 3. Install PHP dependencies
composer install

# 4. Copy environment file
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Create MySQL database
mysql -u root -p -e "CREATE DATABASE taskku;"

# 7. Configure .env — set DB credentials
#    DB_DATABASE=taskku
#    DB_USERNAME=root
#    DB_PASSWORD=yourpassword

# 8. Run migrations
php artisan migrate

# 9. Start the dev server
php artisan serve
```

Visit http://localhost:8000

## Features

- List all tasks
- Add new task (title + description)
- Edit task
- Mark task done / undone (toggle)
- Delete task

## Project Structure

```
app/
  Http/Controllers/
    TaskController.php     — 6 methods (index, store, edit, update, toggle, destroy)
  Models/
    Task.php              — Eloquent model
database/
  migrations/
    xxxx_create_tasks_table.php — tasks table schema
resources/views/
  layout.blade.php        — Bootstrap layout + navbar
  tasks/
    index.blade.php       — task list + add form
    edit.blade.php        — edit form
routes/
  web.php                 — 6 routes
```

## Session 2 — Debug Challenge

Switch to `session-2` branch and try to find all 6 bugs!

```bash
git checkout session-2
php artisan migrate:fresh   # reset database
php artisan serve
```

Use the debugging workflow + AI tools to find and fix each bug.
